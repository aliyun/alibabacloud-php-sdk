<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups\zoneIDList;
use AlibabaCloud\Tea\Model;

class dedicatedHostGroups extends Model
{
    /**
     * @description The policy that is used to allocate host resources. Valid values:
     *
     *   **Evenly**: The system preferentially deploys database instances on the hosts where no resources or fewer resources are allocated. This maximizes system stability.
     *   **Intensively**: The system preferentially deploys database instances on the hosts that are created earlier and have more allocated resources. This maximizes resource utilization.
     *
     * @example Evenly
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description The ID of the primary instance deployed on the host. If no primary instance is deployed on the host, an empty string is returned.
     *
     * @example rm-bp15rszyxs4t3****
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @var string
     */
    public $category;

    /**
     * @description The CPU allocation ratio of the host.
     *
     * @example 9.38
     *
     * @var float
     */
    public $cpuAllocateRation;

    /**
     * @description The number of CPU cores allocated to the host.
     *
     * @example 3
     *
     * @var float
     */
    public $cpuAllocatedAmount;

    /**
     * @description The CPU overcommit ratio of the host.
     *
     * @example 200
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description The time when the host was created.
     *
     * @example 2021-05-07T02:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of hosts by storage type.
     *
     * @example 2
     *
     * @var mixed[]
     */
    public $dedicatedHostCountGroupByHostType;

    /**
     * @description The name of the dedicated cluster in which the host is created.
     *
     * @example dhg-34639v1jt4y4****
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description The ID of the dedicated cluster in which the host is created.
     *
     * @example dhg-34639v1jt4y4****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The instance deployment mode of the host.
     *
     * @example origin
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The disk allocation rate of the host.
     *
     * @example 100
     *
     * @var float
     */
    public $diskAllocateRation;

    /**
     * @description The disk storage allocated to the host.
     *
     * @example 1024
     *
     * @var float
     */
    public $diskAllocatedAmount;

    /**
     * @description The storage overcommit ratio of the host.
     *
     * @example 200
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description The disk storage used by the host.
     *
     * @example 1024
     *
     * @var float
     */
    public $diskUsedAmount;

    /**
     * @description The disk usage of the host.
     *
     * @example 0
     *
     * @var float
     */
    public $diskUtility;

    /**
     * @description The database engine of the host.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The number of hosts.
     *
     * @example 2
     *
     * @var int
     */
    public $hostNumber;

    /**
     * @description The policy that is used for host troubleshooting. Valid values:
     *
     *   Auto (default): The system automatically replaces faulty hosts.
     *   Manual: You must manually replace faulty hosts.
     *
     * @example Auto
     *
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description The number of instances deployed on the host.
     *
     * @example 2
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description The memory allocation ratio of the host.
     *
     * @example 9.38
     *
     * @var float
     */
    public $memAllocateRation;

    /**
     * @description The amount of memory allocated to the host.
     *
     * @example 0
     *
     * @var float
     */
    public $memAllocatedAmount;

    /**
     * @description The memory overcommit ratio of the host.
     *
     * @example 100
     *
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @description The amount of used memory.
     *
     * @example 0
     *
     * @var float
     */
    public $memUsedAmount;

    /**
     * @description The memory usage.
     *
     * @example 0
     *
     * @var float
     */
    public $memUtility;

    /**
     * @description Indicates whether the host OS permissions are granted. Valid values:
     *
     *   **0 or 1**: no.
     *   **2 or 3** (default): yes.
     *
     * >  When you create a dedicated cluster that runs **MySQL**, **SQL Server**, or **PostgreSQL**, you can grant the host OS permissions based on your business requirements.
     * @example 1
     *
     * @var string
     */
    public $openPermission;

    /**
     * @description The description of the host.
     *
     * @example mysql-host
     *
     * @var string
     */
    public $text;

    /**
     * @description The virtual private cloud (VPC) ID of the dedicated cluster in which the host is created.
     *
     * @example vpc-bp1ov7as4yvz4kxei****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @var zoneIDList
     */
    public $zoneIDList;
    protected $_name = [
        'allocationPolicy'                  => 'AllocationPolicy',
        'bastionInstanceId'                 => 'BastionInstanceId',
        'category'                          => 'Category',
        'cpuAllocateRation'                 => 'CpuAllocateRation',
        'cpuAllocatedAmount'                => 'CpuAllocatedAmount',
        'cpuAllocationRatio'                => 'CpuAllocationRatio',
        'createTime'                        => 'CreateTime',
        'dedicatedHostCountGroupByHostType' => 'DedicatedHostCountGroupByHostType',
        'dedicatedHostGroupDesc'            => 'DedicatedHostGroupDesc',
        'dedicatedHostGroupId'              => 'DedicatedHostGroupId',
        'deployType'                        => 'DeployType',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
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
