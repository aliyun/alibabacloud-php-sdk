<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $autoRenew;

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
    public $distributionTag;

    /**
     * @var string
     */
    public $ecsClassCode;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $hostCPU;

    /**
     * @var string
     */
    public $hostClass;

    /**
     * @var int
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
     * @var int
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
     * @var int
     */
    public $instanceNumber;

    /**
     * @var int
     */
    public $instanceNumberMaster;

    /**
     * @var int
     */
    public $instanceNumberROMaster;

    /**
     * @var int
     */
    public $instanceNumberROSlave;

    /**
     * @var int
     */
    public $instanceNumberSlave;

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
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

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
        'accountName'            => 'AccountName',
        'accountType'            => 'AccountType',
        'allocationStatus'       => 'AllocationStatus',
        'autoRenew'              => 'AutoRenew',
        'CPUAllocationRatio'     => 'CPUAllocationRatio',
        'cpuUsed'                => 'CpuUsed',
        'createdTime'            => 'CreatedTime',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'dedicatedHostId'        => 'DedicatedHostId',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'distributionTag'        => 'DistributionTag',
        'ecsClassCode'           => 'EcsClassCode',
        'expiredTime'            => 'ExpiredTime',
        'hostCPU'                => 'HostCPU',
        'hostClass'              => 'HostClass',
        'hostMem'                => 'HostMem',
        'hostName'               => 'HostName',
        'hostStatus'             => 'HostStatus',
        'hostStorage'            => 'HostStorage',
        'hostType'               => 'HostType',
        'IPAddress'              => 'IPAddress',
        'imageCategory'          => 'ImageCategory',
        'instanceNumber'         => 'InstanceNumber',
        'instanceNumberMaster'   => 'InstanceNumberMaster',
        'instanceNumberROMaster' => 'InstanceNumberROMaster',
        'instanceNumberROSlave'  => 'InstanceNumberROSlave',
        'instanceNumberSlave'    => 'InstanceNumberSlave',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'memoryUsed'             => 'MemoryUsed',
        'openPermission'         => 'OpenPermission',
        'regionId'               => 'RegionId',
        'requestId'              => 'RequestId',
        'storageUsed'            => 'StorageUsed',
        'VPCId'                  => 'VPCId',
        'vSwitchId'              => 'VSwitchId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
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
        if (null !== $this->distributionTag) {
            $res['DistributionTag'] = $this->distributionTag;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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
        if (null !== $this->instanceNumberMaster) {
            $res['InstanceNumberMaster'] = $this->instanceNumberMaster;
        }
        if (null !== $this->instanceNumberROMaster) {
            $res['InstanceNumberROMaster'] = $this->instanceNumberROMaster;
        }
        if (null !== $this->instanceNumberROSlave) {
            $res['InstanceNumberROSlave'] = $this->instanceNumberROSlave;
        }
        if (null !== $this->instanceNumberSlave) {
            $res['InstanceNumberSlave'] = $this->instanceNumberSlave;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
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
        if (isset($map['DistributionTag'])) {
            $model->distributionTag = $map['DistributionTag'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
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
        if (isset($map['InstanceNumberMaster'])) {
            $model->instanceNumberMaster = $map['InstanceNumberMaster'];
        }
        if (isset($map['InstanceNumberROMaster'])) {
            $model->instanceNumberROMaster = $map['InstanceNumberROMaster'];
        }
        if (isset($map['InstanceNumberROSlave'])) {
            $model->instanceNumberROSlave = $map['InstanceNumberROSlave'];
        }
        if (isset($map['InstanceNumberSlave'])) {
            $model->instanceNumberSlave = $map['InstanceNumberSlave'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
