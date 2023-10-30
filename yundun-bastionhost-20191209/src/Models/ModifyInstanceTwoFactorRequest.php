<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceTwoFactorRequest extends Model
{
    /**
     * @description Specifies whether to enable two-factor authentication. Valid values:
     *
     *   **true**: enables two-factor authentication.
     *   **false**: disables two-factor authentication.
     *
     * @example true
     *
     * @var string
     */
    public $enableTwoFactor;

    /**
     * @description The ID of the bastion host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 1
     *
     * @var string
     */
    public $skipTwoFactorTime;

    /**
     * @description One or more methods that are used to send a verification code if two-factor authentication is enabled. If you set the EnableTwoFactor parameter to true, you must specify at least one method. Valid values:
     *
     *   **sms**: text message
     *   **email**: email
     *   **dingtalk**: Notice in DingTalk
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
