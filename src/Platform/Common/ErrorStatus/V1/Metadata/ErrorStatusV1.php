<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/error_status.v1.proto

namespace Platform\Common\ErrorStatus\V1\Metadata;

class ErrorStatusV1
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
common/error_status.v1.protoplatform.common.error_status.v1"N
Status
code (
message (	%
details (2.google.protobuf.AnyBK�Platform\\Common\\ErrorStatus\\V1�\'Platform\\Common\\ErrorStatus\\V1\\Metadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

