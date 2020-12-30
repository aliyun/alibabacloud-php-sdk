<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes;
use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var string
     */
    public $lockType;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $hostGroupSubType;

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
    public $diskType;

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
    public $instanceType;

    /**
     * @var string
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $cpuCore;

    /**
     * @var int
     */
    public $memoryCapacity;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $hostGroupChangeType;

    /**
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'nodes'                 => 'Nodes',
        'lockType'              => 'LockType',
        'hostGroupType'         => 'HostGroupType',
        'hostGroupSubType'      => 'HostGroupSubType',
        'hostGroupChangeStatus' => 'HostGroupChangeStatus',
        'chargeType'            => 'ChargeType',
        'diskType'              => 'DiskType',
        'lockReason'            => 'LockReason',
        'hostGroupId'           => 'HostGroupId',
        'instanceType'          => 'InstanceType',
        'bandWidth'             => 'BandWidth',
        'diskCount'             => 'DiskCount',
        'period'                => 'Period',
        'diskCapacity'          => 'DiskCapacity',
        'cpuCore'               => 'CpuCore',
        'memoryCapacity'        => 'MemoryCapacity',
        'nodeCount'             => 'NodeCount',
        'hostGroupChangeType'   => 'HostGroupChangeType',
        'hostGroupName'         => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->lockType) {
            $res['LockType'] = $this->lockType;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->hostGroupSubType) {
            $res['HostGroupSubType'] = $this->hostGroupSubType;
        }
        if (null !== $this->hostGroupChangeStatus) {
            $res['HostGroupChangeStatus'] = $this->hostGroupChangeStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->cpuCore) {
            $res['CpuCore'] = $this->cpuCore;
        }
        if (null !== $this->memoryCapacity) {
            $res['MemoryCapacity'] = $this->memoryCapacity;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->hostGroupChangeType) {
            $res['HostGroupChangeType'] = $this->hostGroupChangeType;
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
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['LockType'])) {
            $model->lockType = $map['LockType'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['HostGroupSubType'])) {
            $model->hostGroupSubType = $map['HostGroupSubType'];
        }
        if (isset($map['HostGroupChangeStatus'])) {
            $model->hostGroupChangeStatus = $map['HostGroupChangeStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['CpuCore'])) {
            $model->cpuCore = $map['CpuCore'];
        }
        if (isset($map['MemoryCapacity'])) {
            $model->memoryCapacity = $map['MemoryCapacity'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['HostGroupChangeType'])) {
            $model->hostGroupChangeType = $map['HostGroupChangeType'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
