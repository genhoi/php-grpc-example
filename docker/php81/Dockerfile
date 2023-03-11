FROM php:8.1.16 as grpc_php_plugin

ENV GRPC_VERSION=1.50.0

RUN apt-get update \
    && apt-get -y --no-install-recommends install curl unzip git build-essential automake libtool cmake \
    && git clone --recurse-submodules -b v${GRPC_VERSION} --depth 1 --shallow-submodules https://github.com/grpc/grpc \
    && cd grpc \
    && mkdir -p cmake/build \
    && cd cmake/build \
    && cmake ../.. \
    && make protoc grpc_php_plugin \
    && mv /grpc/cmake/build/grpc_php_plugin /usr/bin/grpc_php_plugin

FROM php:8.1.16 as bin_loader

ENV RR_VERSION=2.12.3
ENV PROTOBUF_VERSION=21.8

RUN apt-get update \
    && apt-get -y --no-install-recommends install curl unzip \
    && curl --show-error --fail -L https://github.com/roadrunner-server/roadrunner/releases/download/v${RR_VERSION}/protoc-gen-php-grpc-${RR_VERSION}-linux-amd64.tar.gz | tar -C /tmp -zx \
    && mv /tmp/protoc-gen-php-grpc-${RR_VERSION}-linux-amd64/protoc-gen-php-grpc /usr/bin/protoc-gen-php-grpc \
    && curl --show-error --fail -L https://github.com/roadrunner-server/roadrunner/releases/download/v${RR_VERSION}/roadrunner-${RR_VERSION}-linux-amd64.tar.gz | tar -C /tmp -zx \
    && mv /tmp/roadrunner-${RR_VERSION}-linux-amd64/rr /usr/bin/rr \
    && curl --show-error --fail -L -o /tmp/protoc.zip https://github.com/protocolbuffers/protobuf/releases/download/v${PROTOBUF_VERSION}/protoc-${PROTOBUF_VERSION}-linux-x86_64.zip \
    && unzip -d /tmp/protoc /tmp/protoc.zip \
    && mv /tmp/protoc/bin/protoc /usr/bin/protoc \
    && mv /tmp/protoc/include /usr/bin/include

FROM php:8.1.16

ARG WITH_XDEBUG=0

ENV TERM xterm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions \
    grpc \
    protobuf \
    intl \
    opcache \
    pcntl \
    sockets \
    bcmath \
    zip \
    && apt-get update \
    && apt-get -y --no-install-recommends install \
      libpcre2-8-0 \
      unzip \
      zip \
      vim \
      gettext \
      git \
      curl \
      openssl \
      locales \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8

ENV LANG en_US.utf8

RUN if [ $WITH_XDEBUG -eq "1" ]; then \
      install-php-extensions xdebug-3.1.4 \
      && echo 'xdebug.mode=debug' >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini" \
      && echo 'xdebug.start_with_request=yes' >> "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini"; \
    fi

COPY --from=bin_loader /usr/bin/rr /usr/bin/rr

COPY --from=bin_loader /usr/bin/protoc /usr/bin/protoc
COPY --from=bin_loader /usr/bin/include/google /usr/bin/include/google

COPY --from=bin_loader /usr/bin/protoc-gen-php-grpc /usr/bin/protoc-gen-php-grpc
COPY --from=grpc_php_plugin /usr/bin/grpc_php_plugin /usr/bin/grpc_php_plugin
COPY --from=composer:2.3.10 /usr/bin/composer /usr/bin/composer

CMD ["/usr/bin/rr", "serve"]

STOPSIGNAL SIGTERM