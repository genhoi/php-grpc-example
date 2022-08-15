<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/error_details.v1.proto

namespace Platform\Common\ErrorDetails\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes what preconditions have failed.
 * For example, if an RPC failed because it required the Terms of Service to be
 * acknowledged, it could list the terms of service violation in the
 * PreconditionFailure message.
 *
 * Generated from protobuf message <code>platform.common.error_details.v1.PreconditionFailure</code>
 */
class PreconditionFailure extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes all precondition violations.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.PreconditionFailure.Violation violations = 1;</code>
     */
    private $violations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Platform\Common\ErrorDetails\V1\PreconditionFailure\Violation>|\Google\Protobuf\Internal\RepeatedField $violations
     *           Describes all precondition violations.
     * }
     */
    public function __construct($data = NULL) {
        \Platform\Common\ErrorDetails\V1\Metadata\ErrorDetailsV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes all precondition violations.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.PreconditionFailure.Violation violations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getViolations()
    {
        return $this->violations;
    }

    /**
     * Describes all precondition violations.
     *
     * Generated from protobuf field <code>repeated .platform.common.error_details.v1.PreconditionFailure.Violation violations = 1;</code>
     * @param array<\Platform\Common\ErrorDetails\V1\PreconditionFailure\Violation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setViolations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Common\ErrorDetails\V1\PreconditionFailure\Violation::class);
        $this->violations = $arr;

        return $this;
    }

}

