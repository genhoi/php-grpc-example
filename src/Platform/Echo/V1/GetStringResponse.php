<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: echo/methods/get_string.v1.proto

namespace Platform\Echo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.echo.v1.GetStringResponse</code>
 */
class GetStringResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string result = 1;</code>
     */
    protected $result = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $result
     * }
     */
    public function __construct($data = NULL) {
        \Platform\Echo\V1\Metadata\GetStringV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string result = 1;</code>
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>string result = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->result = $var;

        return $this;
    }

}

