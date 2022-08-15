<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/error_details.v1.proto

namespace Platform\Common\ErrorDetails\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes violations in a client request. This error type focuses on the
 * syntactic aspects of the request.
 *
 * Generated from protobuf message <code>platform.common.error_details.v1.BadRequest</code>
 */
class BadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes all violations in a client request.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.BadRequest.FieldViolation field_violations = 1;</code>
     */
    private $field_violations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Platform\Common\ErrorDetails\V1\BadRequest\FieldViolation>|\Google\Protobuf\Internal\RepeatedField $field_violations
     *           Describes all violations in a client request.
     * }
     */
    public function __construct($data = NULL) {
        \Platform\Common\ErrorDetails\V1\Metadata\ErrorDetailsV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes all violations in a client request.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.BadRequest.FieldViolation field_violations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldViolations()
    {
        return $this->field_violations;
    }

    /**
     * Describes all violations in a client request.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.BadRequest.FieldViolation field_violations = 1;</code>
     * @param array<\Platform\Common\ErrorDetails\V1\BadRequest\FieldViolation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldViolations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Common\ErrorDetails\V1\BadRequest\FieldViolation::class);
        $this->field_violations = $arr;

        return $this;
    }

}

