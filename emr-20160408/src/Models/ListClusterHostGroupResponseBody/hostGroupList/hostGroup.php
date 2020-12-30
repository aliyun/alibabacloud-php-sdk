<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostGroupResponseBody\hostGroupList;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $hostGroupSubType;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $scalingGroupMinNode;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $hostGroupChangeStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $dataDiskType;

    /**
     * @var int
     */
    public $systemDiskCount;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $scalingGroupBizId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $scalingGroupMaxNode;

    /**
     * @var string
     */
    public $hostGroupChangeType;

    /**
     * @var string
     */
    public $lockType;

    /**
     * @var string
     */
    public $scalingInMode;

    /**
     * @var float
     */
    public $costSavingPercent;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $dataDiskCount;

    /**
     * @var string
     */
    public $scalingGroupActiveStatus;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var string
     */
    public $scalingGroupConfigState;

    /**
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'status'                   => 'Status',
        'hostGroupSubType'         => 'HostGroupSubType',
        'hostGroupType'            => 'HostGroupType',
        'comment'                  => 'Comment',
        'scalingGroupMinNode'      => 'ScalingGroupMinNode',
        'vswitchId'                => 'VswitchId',
        'securityGroupId'          => 'SecurityGroupId',
        'hostGroupChangeStatus'    => 'HostGroupChangeStatus',
        'chargeType'               => 'ChargeType',
        'payType'                  => 'PayType',
        'dataDiskType'             => 'DataDiskType',
        'systemDiskCount'          => 'SystemDiskCount',
        'systemDiskSize'           => 'SystemDiskSize',
        'scalingGroupBizId'        => 'ScalingGroupBizId',
        'gmtModified'              => 'gmtModified',
        'memory'                   => 'Memory',
        'scalingGroupMaxNode'      => 'ScalingGroupMaxNode',
        'hostGroupChangeType'      => 'HostGroupChangeType',
        'lockType'                 => 'LockType',
        'scalingInMode'            => 'ScalingInMode',
        'costSavingPercent'        => 'CostSavingPercent',
        'dataDiskSize'             => 'DataDiskSize',
        'lockReason'               => 'LockReason',
        'hostGroupId'              => 'HostGroupId',
        'gmtCreate'                => 'gmtCreate',
        'instanceType'             => 'InstanceType',
        'cpu'                      => 'Cpu',
        'dataDiskCount'            => 'DataDiskCount',
        'scalingGroupActiveStatus' => 'ScalingGroupActiveStatus',
        'nodeCount'                => 'NodeCount',
        'systemDiskType'           => 'SystemDiskType',
        'scalingGroupConfigState'  => 'ScalingGroupConfigState',
        'hostGroupName'            => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hostGroupSubType) {
            $res['HostGroupSubType'] = $this->hostGroupSubType;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->scalingGroupMinNode) {
            $res['ScalingGroupMinNode'] = $this->scalingGroupMinNode;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->hostGroupChangeStatus) {
            $res['HostGroupChangeStatus'] = $this->hostGroupChangeStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->dataDiskType) {
            $res['DataDiskType'] = $this->dataDiskType;
        }
        if (null !== $this->systemDiskCount) {
            $res['SystemDiskCount'] = $this->systemDiskCount;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->scalingGroupBizId) {
            $res['ScalingGroupBizId'] = $this->scalingGroupBizId;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->scalingGroupMaxNode) {
            $res['ScalingGroupMaxNode'] = $this->scalingGroupMaxNode;
        }
        if (null !== $this->hostGroupChangeType) {
            $res['HostGroupChangeType'] = $this->hostGroupChangeType;
        }
        if (null !== $this->lockType) {
            $res['LockType'] = $this->lockType;
        }
        if (null !== $this->scalingInMode) {
            $res['ScalingInMode'] = $this->scalingInMode;
        }
        if (null !== $this->costSavingPercent) {
            $res['CostSavingPercent'] = $this->costSavingPercent;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->dataDiskCount) {
            $res['DataDiskCount'] = $this->dataDiskCount;
        }
        if (null !== $this->scalingGroupActiveStatus) {
            $res['ScalingGroupActiveStatus'] = $this->scalingGroupActiveStatus;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->scalingGroupConfigState) {
            $res['ScalingGroupConfigState'] = $this->scalingGroupConfigState;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HostGroupSubType'])) {
            $model->hostGroupSubType = $map['HostGroupSubType'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ScalingGroupMinNode'])) {
            $model->scalingGroupMinNode = $map['ScalingGroupMinNode'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['HostGroupChangeStatus'])) {
            $model->hostGroupChangeStatus = $map['HostGroupChangeStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DataDiskType'])) {
            $model->dataDiskType = $map['DataDiskType'];
        }
        if (isset($map['SystemDiskCount'])) {
            $model->systemDiskCount = $map['SystemDiskCount'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['ScalingGroupBizId'])) {
            $model->scalingGroupBizId = $map['ScalingGroupBizId'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ScalingGroupMaxNode'])) {
            $model->scalingGroupMaxNode = $map['ScalingGroupMaxNode'];
        }
        if (isset($map['HostGroupChangeType'])) {
            $model->hostGroupChangeType = $map['HostGroupChangeType'];
        }
        if (isset($map['LockType'])) {
            $model->lockType = $map['LockType'];
        }
        if (isset($map['ScalingInMode'])) {
            $model->scalingInMode = $map['ScalingInMode'];
        }
        if (isset($map['CostSavingPercent'])) {
            $model->costSavingPercent = $map['CostSavingPercent'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DataDiskCount'])) {
            $model->dataDiskCount = $map['DataDiskCount'];
        }
        if (isset($map['ScalingGroupActiveStatus'])) {
            $model->scalingGroupActiveStatus = $map['ScalingGroupActiveStatus'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['ScalingGroupConfigState'])) {
            $model->scalingGroupConfigState = $map['ScalingGroupConfigState'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
