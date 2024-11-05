<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceTwoFactorRequest extends Model
{
    /**
     * @description Specifies whether to enable two-factor authentication. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $enableTwoFactor;

    /**
     * @description The ID of the bastion host.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The duration within which two-factor authentication is not required after a user passes two-factor authentication. Valid values: 0 to 168. Unit: hours. If you set this parameter to 0, the user must pass two-factor authentication every time the user logs on to the bastion host.
     *
     * @example 1
     *
     * @var string
     */
    public $skipTwoFactorTime;

    /**
     * @description The method used to send a verification code for two-factor authentication. If EnableTwoFactor is set to true, you must specify at least one method. Valid values:
     *
     *   **sms:** text message.
     *   **email**: email.
     *   **dingtalk**: notice in DingTalk.
     *   **totp**: one-time password (OTP) token.
     *   **gmusbkey**: SM-based USB key.
     *
     * @example ["sms"]
     *
     * @var string
     */
    public $twoFactorMethods;
    protected $_name = [
        'enableTwoFactor'   => 'EnableTwoFactor',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
        'skipTwoFactorTime' => 'SkipTwoFactorTime',
        'twoFactorMethods'  => 'TwoFactorMethods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTwoFactor) {
            $res['EnableTwoFactor'] = $this->enableTwoFactor;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->skipTwoFactorTime) {
            $res['SkipTwoFactorTime'] = $this->skipTwoFactorTime;
        }
        if (null !== $this->twoFactorMethods) {
            $res['TwoFactorMethods'] = $this->twoFactorMethods;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceTwoFactorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableTwoFactor'])) {
            $model->enableTwoFactor = $map['EnableTwoFactor'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SkipTwoFactorTime'])) {
            $model->skipTwoFactorTime = $map['SkipTwoFactorTime'];
        }
        if (isset($map['TwoFactorMethods'])) {
            $model->twoFactorMethods = $map['TwoFactorMethods'];
        }

        return $model;
    }
}
