<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $hostType;

    /**
     * @var string
     */
    public $hostStorage;

    /**
     * @var string
     */
    public $memoryUsed;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $storageUsed;

    /**
     * @var string
     */
    public $ecsClassCode;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $memAllocationRatio;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $hostStatus;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hostCPU;

    /**
     * @var string
     */
    public $cpuUsed;

    /**
     * @var string
     */
    public $instanceNumber;

    /**
     * @var string
     */
    public $openPermission;

    /**
     * @var string
     */
    public $distributionSymbol;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $hostClass;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @var string
     */
    public $hostMem;

    /**
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'deployType'           => 'DeployType',
        'hostType'             => 'HostType',
        'hostStorage'          => 'HostStorage',
        'memoryUsed'           => 'MemoryUsed',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'allocationStatus'     => 'AllocationStatus',
        'storageUsed'          => 'StorageUsed',
        'ecsClassCode'         => 'EcsClassCode',
        'dedicatedHostId'      => 'DedicatedHostId',
        'memAllocationRatio'   => 'MemAllocationRatio',
        'createdTime'          => 'CreatedTime',
        'IPAddress'            => 'IPAddress',
        'hostStatus'           => 'HostStatus',
        'hostName'             => 'HostName',
        'hostCPU'              => 'HostCPU',
        'cpuUsed'              => 'CpuUsed',
        'instanceNumber'       => 'InstanceNumber',
        'openPermission'       => 'OpenPermission',
        'distributionSymbol'   => 'DistributionSymbol',
        'VPCId'                => 'VPCId',
        'hostClass'            => 'HostClass',
        'endTime'              => 'EndTime',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
        'CPUAllocationRatio'   => 'CPUAllocationRatio',
        'imageCategory'        => 'ImageCategory',
        'engine'               => 'Engine',
        'diskAllocationRatio'  => 'DiskAllocationRatio',
        'hostMem'              => 'HostMem',
        'bastionInstanceId'    => 'BastionInstanceId',
        'accountName'          => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostCPU) {
            $res['HostCPU'] = $this->hostCPU;
        }
        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->distributionSymbol) {
            $res['DistributionSymbol'] = $this->distributionSymbol;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->CPUAllocationRatio) {
            $res['CPUAllocationRatio'] = $this->CPUAllocationRatio;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostCPU'])) {
            $model->hostCPU = $map['HostCPU'];
        }
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['DistributionSymbol'])) {
            $model->distributionSymbol = $map['DistributionSymbol'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['CPUAllocationRatio'])) {
            $model->CPUAllocationRatio = $map['CPUAllocationRatio'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
