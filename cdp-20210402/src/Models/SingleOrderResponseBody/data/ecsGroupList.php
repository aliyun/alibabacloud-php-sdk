<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\SingleOrderResponseBody\data;

use AlibabaCloud\Tea\Model;

class ecsGroupList extends Model
{
    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @var string
     */
    public $hostGroupType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $systemDiskCapacity;

    /**
     * @var int
     */
    public $systemDiskCount;

    /**
     * @var string
     */
    public $systemDiskType;
    protected $_name = [
        'cpuCount'           => 'CpuCount',
        'diskCapacity'       => 'DiskCapacity',
        'diskCount'          => 'DiskCount',
        'diskType'           => 'DiskType',
        'hostGroupName'      => 'HostGroupName',
        'hostGroupType'      => 'HostGroupType',
        'instanceType'       => 'InstanceType',
        'memorySize'         => 'MemorySize',
        'nodeCount'          => 'NodeCount',
        'systemDiskCapacity' => 'SystemDiskCapacity',
        'systemDiskCount'    => 'SystemDiskCount',
        'systemDiskType'     => 'SystemDiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
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
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->hostGroupType) {
            $res['HostGroupType'] = $this->hostGroupType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->systemDiskCapacity) {
            $res['SystemDiskCapacity'] = $this->systemDiskCapacity;
        }
        if (null !== $this->systemDiskCount) {
            $res['SystemDiskCount'] = $this->systemDiskCount;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
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
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['HostGroupType'])) {
            $model->hostGroupType = $map['HostGroupType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['SystemDiskCapacity'])) {
            $model->systemDiskCapacity = $map['SystemDiskCapacity'];
        }
        if (isset($map['SystemDiskCount'])) {
            $model->systemDiskCount = $map['SystemDiskCount'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }

        return $model;
    }
}
