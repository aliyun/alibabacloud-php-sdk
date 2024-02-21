<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes;
use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $bandWidth;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 16
     *
     * @var int
     */
    public $cpuCore;

    /**
     * @example 120
     *
     * @var int
     */
    public $diskCapacity;

    /**
     * @example 4
     *
     * @var int
     */
    public $diskCount;

    /**
     * @example CLOUD_SSD
     *
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $hostGroupChangeStatus;

    /**
     * @example RESIZE_DISK
     *
     * @var string
     */
    public $hostGroupChangeType;

    /**
     * @example G-9D08642FB8CE****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @example 0
     *
     * @var string
     */
    public $hostGroupSubType;

    /**
     * @example CORE
     *
     * @var string
     */
    public $hostGroupType;

    /**
     * @example ecs.n4.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0
     *
     * @var string
     */
    public $lockReason;

    /**
     * @example 0
     *
     * @var string
     */
    public $lockType;

    /**
     * @example 16
     *
     * @var int
     */
    public $memoryCapacity;

    /**
     * @example 4
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @example 30
     *
     * @var string
     */
    public $period;
    protected $_name = [
        'bandWidth'             => 'BandWidth',
        'chargeType'            => 'ChargeType',
        'cpuCore'               => 'CpuCore',
        'diskCapacity'          => 'DiskCapacity',
        'diskCount'             => 'DiskCount',
        'diskType'              => 'DiskType',
        'hostGroupChangeStatus' => 'HostGroupChangeStatus',
        'hostGroupChangeType'   => 'HostGroupChangeType',
        'hostGroupId'           => 'HostGroupId',
        'hostGroupName'         => 'HostGroupName',
        'hostGroupSubType'      => 'HostGroupSubType',
        'hostGroupType'         => 'HostGroupType',
        'instanceType'          => 'InstanceType',
        'lockReason'            => 'LockReason',
        'lockType'              => 'LockType',
        'memoryCapacity'        => 'MemoryCapacity',
        'nodeCount'             => 'NodeCount',
        'nodes'                 => 'Nodes',
        'period'                => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpuCore) {
            $res['CpuCore'] = $this->cpuCore;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->hostGroupChangeStatus) {
            $res['HostGroupChangeStatus'] = $this->hostGroupChangeStatus;
        }
        if (null !== $this->hostGroupChangeType) {
            $res['HostGroupChangeType'] = $this->hostGroupChangeType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->hostGroupSubType) {
            $res['HostGroupSubType'] = $this->hostGroupSubType;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->lockType) {
            $res['LockType'] = $this->lockType;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CpuCore'])) {
            $model->cpuCore = $map['CpuCore'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HostGroupChangeStatus'])) {
            $model->hostGroupChangeStatus = $map['HostGroupChangeStatus'];
        }
        if (isset($map['HostGroupChangeType'])) {
            $model->hostGroupChangeType = $map['HostGroupChangeType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['HostGroupSubType'])) {
            $model->hostGroupSubType = $map['HostGroupSubType'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LockType'])) {
            $model->lockType = $map['LockType'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
