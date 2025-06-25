<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $clientSecurityGroupIds;

    /**
     * @var bool
     */
    public $enablePortalPrivateAccess;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $slaveVswitchId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clientSecurityGroupIds' => 'ClientSecurityGroupIds',
        'enablePortalPrivateAccess' => 'EnablePortalPrivateAccess',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'securityGroupIds' => 'SecurityGroupIds',
        'slaveVswitchId' => 'SlaveVswitchId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->clientSecurityGroupIds)) {
            Model::validateArray($this->clientSecurityGroupIds);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientSecurityGroupIds) {
            if (\is_array($this->clientSecurityGroupIds)) {
                $res['ClientSecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->clientSecurityGroupIds as $item1) {
                    $res['ClientSecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enablePortalPrivateAccess) {
            $res['EnablePortalPrivateAccess'] = $this->enablePortalPrivateAccess;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slaveVswitchId) {
            $res['SlaveVswitchId'] = $this->slaveVswitchId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['ClientSecurityGroupIds'])) {
            if (!empty($map['ClientSecurityGroupIds'])) {
                $model->clientSecurityGroupIds = [];
                $n1 = 0;
                foreach ($map['ClientSecurityGroupIds'] as $item1) {
                    $model->clientSecurityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnablePortalPrivateAccess'])) {
            $model->enablePortalPrivateAccess = $map['EnablePortalPrivateAccess'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SlaveVswitchId'])) {
            $model->slaveVswitchId = $map['SlaveVswitchId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
