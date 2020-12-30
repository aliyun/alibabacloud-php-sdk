<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $sysDiskType;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $gpuDriver;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'sysDiskCapacity' => 'SysDiskCapacity',
        'hostGroupType'   => 'HostGroupType',
        'comment'         => 'Comment',
        'sysDiskType'     => 'SysDiskType',
        'autoRenew'       => 'AutoRenew',
        'chargeType'      => 'ChargeType',
        'gpuDriver'       => 'GpuDriver',
        'diskType'        => 'DiskType',
        'hostGroupId'     => 'HostGroupId',
        'instanceType'    => 'InstanceType',
        'diskCount'       => 'DiskCount',
        'createType'      => 'CreateType',
        'period'          => 'Period',
        'diskCapacity'    => 'DiskCapacity',
        'vSwitchId'       => 'VSwitchId',
        'nodeCount'       => 'NodeCount',
        'hostGroupName'   => 'HostGroupName',
        'clusterId'       => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysDiskCapacity) {
            $res['SysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->sysDiskType) {
            $res['SysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->gpuDriver) {
            $res['GpuDriver'] = $this->gpuDriver;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['SysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['SysDiskCapacity'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['SysDiskType'])) {
            $model->sysDiskType = $map['SysDiskType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['GpuDriver'])) {
            $model->gpuDriver = $map['GpuDriver'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
