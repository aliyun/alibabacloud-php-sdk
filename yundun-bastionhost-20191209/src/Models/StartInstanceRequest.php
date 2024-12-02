<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

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
     * @description The ID of the bastion host that you want to enable.
     *
     * This parameter is required.
     * @example bastionhost-cn-78v1gh****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description An array consisting of the IDs of security groups to which the bastion host is added.
     *
     * This parameter is required.
     * @example sg-bp1aiupc4yjqgmm****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $slaveVswitchId;

    /**
     * @description The ID of the vSwitch to which the bastion host belongs.
     *
     * @example vsw-bp1xfwzzfti0kjbf****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clientSecurityGroupIds'    => 'ClientSecurityGroupIds',
        'enablePortalPrivateAccess' => 'EnablePortalPrivateAccess',
        'instanceId'                => 'InstanceId',
        'regionId'                  => 'RegionId',
        'securityGroupIds'          => 'SecurityGroupIds',
        'slaveVswitchId'            => 'SlaveVswitchId',
        'vswitchId'                 => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientSecurityGroupIds) {
            $res['ClientSecurityGroupIds'] = $this->clientSecurityGroupIds;
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
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->slaveVswitchId) {
            $res['SlaveVswitchId'] = $this->slaveVswitchId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientSecurityGroupIds'])) {
            if (!empty($map['ClientSecurityGroupIds'])) {
                $model->clientSecurityGroupIds = $map['ClientSecurityGroupIds'];
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
                $model->securityGroupIds = $map['SecurityGroupIds'];
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
