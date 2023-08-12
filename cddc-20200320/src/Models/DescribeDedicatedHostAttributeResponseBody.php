<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostAttributeResponseBody extends Model
{
    /**
     * @example cdp_system
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Admin
     *
     * @var string
     */
    public $accountType;

    /**
     * @example Suspended
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 200
     *
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @example 36
     *
     * @var string
     */
    public $cpuUsed;

    /**
     * @example 2021-11-13T07:14:22Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example dhg-34639v1jt4y4****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @example ch-bp10a5id3boqi****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @example 200
     *
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @example tag
     *
     * @var string
     */
    public $distributionTag;

    /**
     * @example ecs.r5.16xlarge
     *
     * @var string
     */
    public $ecsClassCode;

    /**
     * @example 2022-03-16T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 16
     *
     * @var int
     */
    public $hostCPU;

    /**
     * @example mssql.host.c2xlarge
     *
     * @var string
     */
    public $hostClass;

    /**
     * @example 2048
     *
     * @var int
     */
    public $hostMem;

    /**
     * @example ch-8vbj9x74z874o****
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 1
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $hostStorage;

    /**
     * @example dhg_cloud_ssd
     *
     * @var string
     */
    public $hostType;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @example WindowsWithMssqlStdLicense
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @example 3
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @example 4
     *
     * @var int
     */
    public $instanceNumberMaster;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceNumberROMaster;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceNumberROSlave;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceNumberSlave;

    /**
     * @example 90
     *
     * @var string
     */
    public $memAllocationRatio;

    /**
     * @example 24576
     *
     * @var string
     */
    public $memoryUsed;

    /**
     * @example 1
     *
     * @var string
     */
    public $openPermission;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 00A001D6-2630-5CBD-A23C-80BC1BAFDC31
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 588800
     *
     * @var string
     */
    public $storageUsed;

    /**
     * @example vpc-wz9vu1jb32wn3sdd6****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description VSwitch ID。
     *
     * @example vsw-bp1kaugqyrzb58oc1****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-h
     *
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
