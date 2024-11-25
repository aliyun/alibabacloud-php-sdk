<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyRCInstanceAttributeRequest extends Model
{
    /**
     * @description The hostname of the instance.
     *
     * @example testHost1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The instance ID.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new password of the instance.
     *
     *   The value must be 8 to 30 characters in length.
     *   The value must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include `()` ~ ! @ # $ % ^ & \\* - _ + = \\`
     *
     * @example 2F9e9@a69c!e18b569c8
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to restart the instance. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $reboot;

    /**
     * @description The region ID of the instance. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostName'   => 'HostName',
        'instanceId' => 'InstanceId',
        'password'   => 'Password',
        'reboot'     => 'Reboot',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->reboot) {
            $res['Reboot'] = $this->reboot;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRCInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Reboot'])) {
            $model->reboot = $map['Reboot'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
