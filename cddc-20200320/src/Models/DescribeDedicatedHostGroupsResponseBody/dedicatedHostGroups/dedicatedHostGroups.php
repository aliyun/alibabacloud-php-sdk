<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponseBody\dedicatedHostGroups\dedicatedHostGroups\zoneIDList;
use AlibabaCloud\Tea\Model;

class dedicatedHostGroups extends Model
{
    /**
     * @var float
     */
    public $diskAllocateRation;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var mixed[]
     */
    public $dedicatedHostCountGroupByHostType;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var float
     */
    public $diskUtility;

    /**
     * @var float
     */
    public $memUsedAmount;

    /**
     * @var float
     */
    public $memAllocatedAmount;

    /**
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @var float
     */
    public $memAllocateRation;

    /**
     * @var float
     */
    public $memUtility;

    /**
     * @var float
     */
    public $cpuAllocatedAmount;

    /**
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @var float
     */
    public $cpuAllocateRation;

    /**
     * @var int
     */
    public $instanceNumber;

    /**
     * @var string
     */
    public $openPermission;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var float
     */
    public $diskAllocatedAmount;

    /**
     * @var int
     */
    public $hostNumber;

    /**
     * @var float
     */
    public $diskUsedAmount;

    /**
     * @var string
     */
    public $allocationPolicy;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @var zoneIDList
     */
    public $zoneIDList;
    protected $_name = [
        'diskAllocateRation'                => 'DiskAllocateRation',
        'deployType'                        => 'DeployType',
        'createTime'                        => 'CreateTime',
        'dedicatedHostCountGroupByHostType' => 'DedicatedHostCountGroupByHostType',
        'text'                              => 'Text',
        'dedicatedHostGroupId'              => 'DedicatedHostGroupId',
        'diskUtility'                       => 'DiskUtility',
        'memUsedAmount'                     => 'MemUsedAmount',
        'memAllocatedAmount'                => 'MemAllocatedAmount',
        'cpuAllocationRatio'                => 'CpuAllocationRatio',
        'memAllocationRatio'                => 'MemAllocationRatio',
        'memAllocateRation'                 => 'MemAllocateRation',
        'memUtility'                        => 'MemUtility',
        'cpuAllocatedAmount'                => 'CpuAllocatedAmount',
        'dedicatedHostGroupDesc'            => 'DedicatedHostGroupDesc',
        'cpuAllocateRation'                 => 'CpuAllocateRation',
        'instanceNumber'                    => 'InstanceNumber',
        'openPermission'                    => 'OpenPermission',
        'VPCId'                             => 'VPCId',
        'diskAllocatedAmount'               => 'DiskAllocatedAmount',
        'hostNumber'                        => 'HostNumber',
        'diskUsedAmount'                    => 'DiskUsedAmount',
        'allocationPolicy'                  => 'AllocationPolicy',
        'engine'                            => 'Engine',
        'diskAllocationRatio'               => 'DiskAllocationRatio',
        'bastionInstanceId'                 => 'BastionInstanceId',
        'hostReplacePolicy'                 => 'HostReplacePolicy',
        'zoneIDList'                        => 'ZoneIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskAllocateRation) {
            $res['DiskAllocateRation'] = $this->diskAllocateRation;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dedicatedHostCountGroupByHostType) {
            $res['DedicatedHostCountGroupByHostType'] = $this->dedicatedHostCountGroupByHostType;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->diskUtility) {
            $res['DiskUtility'] = $this->diskUtility;
        }
        if (null !== $this->memUsedAmount) {
            $res['MemUsedAmount'] = $this->memUsedAmount;
        }
        if (null !== $this->memAllocatedAmount) {
            $res['MemAllocatedAmount'] = $this->memAllocatedAmount;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->memAllocateRation) {
            $res['MemAllocateRation'] = $this->memAllocateRation;
        }
        if (null !== $this->memUtility) {
            $res['MemUtility'] = $this->memUtility;
        }
        if (null !== $this->cpuAllocatedAmount) {
            $res['CpuAllocatedAmount'] = $this->cpuAllocatedAmount;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->cpuAllocateRation) {
            $res['CpuAllocateRation'] = $this->cpuAllocateRation;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->diskAllocatedAmount) {
            $res['DiskAllocatedAmount'] = $this->diskAllocatedAmount;
        }
        if (null !== $this->hostNumber) {
            $res['HostNumber'] = $this->hostNumber;
        }
        if (null !== $this->diskUsedAmount) {
            $res['DiskUsedAmount'] = $this->diskUsedAmount;
        }
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
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
        if (isset($map['DiskAllocateRation'])) {
            $model->diskAllocateRation = $map['DiskAllocateRation'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DedicatedHostCountGroupByHostType'])) {
            $model->dedicatedHostCountGroupByHostType = $map['DedicatedHostCountGroupByHostType'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DiskUtility'])) {
            $model->diskUtility = $map['DiskUtility'];
        }
        if (isset($map['MemUsedAmount'])) {
            $model->memUsedAmount = $map['MemUsedAmount'];
        }
        if (isset($map['MemAllocatedAmount'])) {
            $model->memAllocatedAmount = $map['MemAllocatedAmount'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['MemAllocateRation'])) {
            $model->memAllocateRation = $map['MemAllocateRation'];
        }
        if (isset($map['MemUtility'])) {
            $model->memUtility = $map['MemUtility'];
        }
        if (isset($map['CpuAllocatedAmount'])) {
            $model->cpuAllocatedAmount = $map['CpuAllocatedAmount'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['CpuAllocateRation'])) {
            $model->cpuAllocateRation = $map['CpuAllocateRation'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['DiskAllocatedAmount'])) {
            $model->diskAllocatedAmount = $map['DiskAllocatedAmount'];
        }
        if (isset($map['HostNumber'])) {
            $model->hostNumber = $map['HostNumber'];
        }
        if (isset($map['DiskUsedAmount'])) {
            $model->diskUsedAmount = $map['DiskUsedAmount'];
        }
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if (isset($map['ZoneIDList'])) {
            $model->zoneIDList = zoneIDList::fromMap($map['ZoneIDList']);
        }

        return $model;
    }
}
