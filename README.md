## Run 

```bash
git clone git@github.com:genhoi/php-grpc-example.git
cd php-grpc-example
docker compose build
docker compose run --rm app composer install
docker compose run --rm app protoc $(find ./proto -type f -name "*.proto") -I /usr/bin/include -I=./proto --plugin=/usr/bin/protoc-gen-php-grpc --php-grpc_out=./src --php_out=./src 
docker compose up -d
```

## GRPC UI 

http://127.0.0.1:22801/