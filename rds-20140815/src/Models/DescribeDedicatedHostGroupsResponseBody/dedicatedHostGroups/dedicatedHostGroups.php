<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups\zoneIDList;
use AlibabaCloud\Tea\Model;

class dedicatedHostGroups extends Model
{
    /**
     * @description The policy based on which the system allocates resources in the dedicated cluster. Valid values:
     *
     *   **Evenly**: The system evenly allocates the resources to all the hosts in the dedicated cluster.
     *   **Intensively**: The system preferentially allocates the resources to the heavily loaded hosts in the dedicated cluster.
     *
     * @example Evenly
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description The ID of the bastion host.
     *
     * @example bastionhost-cn-m7xxxxxxxx
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description The percentage of allocated cores in the dedicated cluster. Unit: %.
     *
     * @example 25
     *
     * @var float
     */
    public $cpuAllocateRation;

    /**
     * @description The number of allocated cores in the dedicated cluster.
     *
     * @example 8
     *
     * @var float
     */
    public $cpuAllocatedAmount;

    /**
     * @description The core overcommitment ratio of the dedicated cluster. Unit: %. For more information about the core overcommitment ratio, see [Manage a dedicated cluster](~~182328~~).
     *
     * @example 200
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description The timestamp when the dedicated cluster was created.
     *
     * @example 1571125370000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The type of storage media that is used for the hosts in the dedicated cluster. Valid values:
     *
     *   **dhg_cloud_ssd**: cloud disks
     *   **dhg_local_ssd**: local disks
     *
     * @example dhg_cloud_ssd
     *
     * @var mixed[]
     */
    public $dedicatedHostCountGroupByHostType;

    /**
     * @description The name of the dedicated cluster.
     *
     * @example testHostGroup
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The percentage of allocated disk space in the dedicated cluster. Unit: %.
     *
     * @example 0.49
     *
     * @var float
     */
    public $diskAllocateRation;

    /**
     * @description The amount of allocated disk space in the dedicated cluster. Unit: GB.
     *
     * @example 200
     *
     * @var float
     */
    public $diskAllocatedAmount;

    /**
     * @description The disk overcommitment ratio of the dedicated cluster. Unit: %. For more information about the core overcommitment ratio, see [Manage a dedicated cluster](~~182328~~).
     *
     * @example 200
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description The amount of used disk space in the dedicated cluster. Unit: GB.
     *
     * @example 20
     *
     * @var float
     */
    public $diskUsedAmount;

    /**
     * @description The disk usage of the dedicated cluster. Unit: %.
     *
     * @example 0
     *
     * @var float
     */
    public $diskUtility;

    /**
     * @description The database engine of the instances in the dedicated cluster.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The total number of hosts in the dedicated cluster.
     *
     * @example 3
     *
     * @var int
     */
    public $hostNumber;

    /**
     * @description The policy that is used to handle host failures. Valid values:
     *
     *   **Auto**: The system automatically replaces faulty hosts.
     *   **Manual**: You must manually replace faulty hosts.
     *
     * @example Auto
     *
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description The total number of instances in the dedicated cluster.
     *
     * @example 4
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description The percentage of allocated memory space in the dedicated cluster. Unit: %.
     *
     * @example 33.7
     *
     * @var float
     */
    public $memAllocateRation;

    /**
     * @description The amount of allocated memory space in the dedicated cluster.
     *
     * @example 16384
     *
     * @var float
     */
    public $memAllocatedAmount;

    /**
     * @description The memory overcommitment ratio of the dedicated cluster. Unit: %. For more information about the core overcommitment ratio, see [Manage a dedicated cluster](~~182328~~).
     *
     * @example 90
     *
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @description The amount of used memory space in the dedicated cluster. Unit: MB.
     *
     * @example 0
     *
     * @var float
     */
    public $memUsedAmount;

    /**
     * @description The memory usage of the dedicated cluster. Unit: %.
     *
     * @example 0
     *
     * @var float
     */
    public $memUtility;

    /**
     * @description Indicates whether the feature that allows you to have the OS permissions on the host is enabled. Valid values:
     *
     *   **0** or **null**: The permissions cannot be granted.
     *   **1**: The permissions can be granted.
     *   **3**: The permissions have been granted.
     *
     * @example 3
     *
     * @var string
     */
    public $openPermission;

    /**
     * @description The name and ID of the dedicated cluster. The value consists of **DedicatedHostGroupDesc** and **DedicatedHostGroupId**. Format: DedicatedHostGroupDesc/DedicatedHostGroupId.
     *
     * @example testHostGroup/dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $text;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the dedicated cluster belongs.
     *
     * @example vpc-bp1oxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The zones to which the hosts of the dedicated cluster belong.
     *
     * @var zoneIDList
     */
    public $zoneIDList;
    protected $_name = [
        'allocationPolicy'                  => 'AllocationPolicy',
        'bastionInstanceId'                 => 'BastionInstanceId',
        'cpuAllocateRation'                 => 'CpuAllocateRation',
        'cpuAllocatedAmount'                => 'CpuAllocatedAmount',
        'cpuAllocationRatio'                => 'CpuAllocationRatio',
        'createTime'                        => 'CreateTime',
        'dedicatedHostCountGroupByHostType' => 'DedicatedHostCountGroupByHostType',
        'dedicatedHostGroupDesc'            => 'DedicatedHostGroupDesc',
        'dedicatedHostGroupId'              => 'DedicatedHostGroupId',
        'diskAllocateRation'                => 'DiskAllocateRation',
        'diskAllocatedAmount'               => 'DiskAllocatedAmount',
        'diskAllocationRatio'               => 'DiskAllocationRatio',
        'diskUsedAmount'                    => 'DiskUsedAmount',
        'diskUtility'                       => 'DiskUtility',
        'engine'                            => 'Engine',
        'hostNumber'                        => 'HostNumber',
        'hostReplacePolicy'                 => 'HostReplacePolicy',
        'instanceNumber'                    => 'InstanceNumber',
        'memAllocateRation'                 => 'MemAllocateRation',
        'memAllocatedAmount'                => 'MemAllocatedAmount',
        'memAllocationRatio'                => 'MemAllocationRatio',
        'memUsedAmount'                     => 'MemUsedAmount',
        'memUtility'                        => 'MemUtility',
        'openPermission'                    => 'OpenPermission',
        'text'                              => 'Text',
        'VPCId'                             => 'VPCId',
        'zoneIDList'                        => 'ZoneIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->cpuAllocateRation) {
            $res['CpuAllocateRation'] = $this->cpuAllocateRation;
        }
        if (null !== $this->cpuAllocatedAmount) {
            $res['CpuAllocatedAmount'] = $this->cpuAllocatedAmount;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dedicatedHostCountGroupByHostType) {
            $res['DedicatedHostCountGroupByHostType'] = $this->dedicatedHostCountGroupByHostType;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->diskAllocateRation) {
            $res['DiskAllocateRation'] = $this->diskAllocateRation;
        }
        if (null !== $this->diskAllocatedAmount) {
            $res['DiskAllocatedAmount'] = $this->diskAllocatedAmount;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->diskUsedAmount) {
            $res['DiskUsedAmount'] = $this->diskUsedAmount;
        }
        if (null !== $this->diskUtility) {
            $res['DiskUtility'] = $this->diskUtility;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->hostNumber) {
            $res['HostNumber'] = $this->hostNumber;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->memAllocateRation) {
            $res['MemAllocateRation'] = $this->memAllocateRation;
        }
        if (null !== $this->memAllocatedAmount) {
            $res['MemAllocatedAmount'] = $this->memAllocatedAmount;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->memUsedAmount) {
            $res['MemUsedAmount'] = $this->memUsedAmount;
        }
        if (null !== $this->memUtility) {
            $res['MemUtility'] = $this->memUtility;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->zoneIDList) {
            $res['ZoneIDList'] = null !== $this->zoneIDList ? $this->zoneIDList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['CpuAllocateRation'])) {
            $model->cpuAllocateRation = $map['CpuAllocateRation'];
        }
        if (isset($map['CpuAllocatedAmount'])) {
            $model->cpuAllocatedAmount = $map['CpuAllocatedAmount'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DedicatedHostCountGroupByHostType'])) {
            $model->dedicatedHostCountGroupByHostType = $map['DedicatedHostCountGroupByHostType'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DiskAllocateRation'])) {
            $model->diskAllocateRation = $map['DiskAllocateRation'];
        }
        if (isset($map['DiskAllocatedAmount'])) {
            $model->diskAllocatedAmount = $map['DiskAllocatedAmount'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['DiskUsedAmount'])) {
            $model->diskUsedAmount = $map['DiskUsedAmount'];
        }
        if (isset($map['DiskUtility'])) {
            $model->diskUtility = $map['DiskUtility'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['HostNumber'])) {
            $model->hostNumber = $map['HostNumber'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['MemAllocateRation'])) {
            $model->memAllocateRation = $map['MemAllocateRation'];
        }
        if (isset($map['MemAllocatedAmount'])) {
            $model->memAllocatedAmount = $map['MemAllocatedAmount'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['MemUsedAmount'])) {
            $model->memUsedAmount = $map['MemUsedAmount'];
        }
        if (isset($map['MemUtility'])) {
            $model->memUtility = $map['MemUtility'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['ZoneIDList'])) {
            $model->zoneIDList = zoneIDList::fromMap($map['ZoneIDList']);
        }

        return $model;
    }
}
