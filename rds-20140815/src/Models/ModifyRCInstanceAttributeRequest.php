<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $password;
    /**
     * @var bool
     */
    public $reboot;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'hostName'        => 'HostName',
        'instanceId'      => 'InstanceId',
        'password'        => 'Password',
        'reboot'          => 'Reboot',
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
