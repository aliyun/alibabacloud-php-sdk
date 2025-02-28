<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\Dara\Model;

class dedicatedHosts extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $allocationStatus;
    /**
     * @var string
     */
    public $bastionInstanceId;
    /**
     * @var string
     */
    public $CPUAllocationRatio;
    /**
     * @var string
     */
    public $cpuUsed;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $dedicatedHostGroupId;
    /**
     * @var string
     */
    public $dedicatedHostId;
    /**
     * @var string
     */
    public $diskAllocationRatio;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $hostCPU;
    /**
     * @var string
     */
    public $hostClass;
    /**
     * @var string
     */
    public $hostMem;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string
     */
    public $hostStatus;
    /**
     * @var string
     */
    public $hostStorage;
    /**
     * @var string
     */
    public $hostType;
    /**
     * @var string
     */
    public $IPAddress;
    /**
     * @var string
     */
    public $imageCategory;
    /**
     * @var string
     */
    public $instanceNumber;
    /**
     * @var string
     */
    public $memAllocationRatio;
    /**
     * @var string
     */
    public $memoryUsed;
    /**
     * @var string
     */
    public $openPermission;
    /**
     * @var string
     */
    public $storageUsed;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'allocationStatus'     => 'AllocationStatus',
        'bastionInstanceId'    => 'BastionInstanceId',
        'CPUAllocationRatio'   => 'CPUAllocationRatio',
        'cpuUsed'              => 'CpuUsed',
        'createdTime'          => 'CreatedTime',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'diskAllocationRatio'  => 'DiskAllocationRatio',
        'endTime'              => 'EndTime',
        'engine'               => 'Engine',
        'hostCPU'              => 'HostCPU',
        'hostClass'            => 'HostClass',
        'hostMem'              => 'HostMem',
        'hostName'             => 'HostName',
        'hostStatus'           => 'HostStatus',
        'hostStorage'          => 'HostStorage',
        'hostType'             => 'HostType',
        'IPAddress'            => 'IPAddress',
        'imageCategory'        => 'ImageCategory',
        'instanceNumber'       => 'InstanceNumber',
        'memAllocationRatio'   => 'MemAllocationRatio',
        'memoryUsed'           => 'MemoryUsed',
        'openPermission'       => 'OpenPermission',
        'storageUsed'          => 'StorageUsed',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }

        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }

        if (null !== $this->CPUAllocationRatio) {
            $res['CPUAllocationRatio'] = $this->CPUAllocationRatio;
        }

        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->hostCPU) {
            $res['HostCPU'] = $this->hostCPU;
        }

        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }

        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }

        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }

        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }

        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }

        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }

        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }

        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }

        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }

        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }

        if (isset($map['CPUAllocationRatio'])) {
            $model->CPUAllocationRatio = $map['CPUAllocationRatio'];
        }

        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['HostCPU'])) {
            $model->hostCPU = $map['HostCPU'];
        }

        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }

        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }

        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }

        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }

        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }

        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }

        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }

        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
