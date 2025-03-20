<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SetForgetPasswordConfigurationRequest extends Model
{
    /**
     * @description The authentication channels. Valid values: email and sms.
     *
     * @example email
     *
     * @var string[]
     */
    public $authenticationChannels;

    /**
     * @description The status of the forgot password feature. Valid values: enabled and disabled.
     *
     * This parameter is required.
     *
     * @example enabled
     *
     * @var string
     */
    public $forgetPasswordStatus;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example eiam-111ccc1111
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authenticationChannels' => 'AuthenticationChannels',
        'forgetPasswordStatus' => 'ForgetPasswordStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationChannels) {
            $res['AuthenticationChannels'] = $this->authenticationChannels;
        }
        if (null !== $this->forgetPasswordStatus) {
            $res['ForgetPasswordStatus'] = $this->forgetPasswordStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetForgetPasswordConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationChannels'])) {
            if (!empty($map['AuthenticationChannels'])) {
                $model->authenticationChannels = $map['AuthenticationChannels'];
            }
        }
        if (isset($map['ForgetPasswordStatus'])) {
            $model->forgetPasswordStatus = $map['ForgetPasswordStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
