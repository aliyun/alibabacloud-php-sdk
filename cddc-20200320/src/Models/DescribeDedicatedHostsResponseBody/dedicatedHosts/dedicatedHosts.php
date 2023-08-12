<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Normal
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
     * @example bastionhost-cn-i7m2fgw****
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @example 10
     *
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 10
     *
     * @var string
     */
    public $cpuUsed;

    /**
     * @example 2020-10-16 16:30:19
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example dhg-6w7q18iwt5jo****
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
     * @example 10
     *
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @example {\"SystemDiskSize\":20,\"DataDiskCount\":0,\"DataDiskSize\":0,\"DataDiskCategory\":[\"\"],\"SystemDiskCategory\":\"cloud_essd\"}
     *
     * @var string
     */
    public $diskInfo;

    /**
     * @example 0
     *
     * @var string
     */
    public $distributionSymbol;

    /**
     * @example t4n9uz07h3r1tmcejtxf:1
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
     * @example i-2zec7l031p0jtru3pn7a
     *
     * @var string
     */
    public $ecsId;

    /**
     * @example 2021-10-16 16:30:19
     *
     * @var string
     */
    public $endTime;

    /**
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @example 16
     *
     * @var string
     */
    public $hostCPU;

    /**
     * @example rds.g6.4xlarge
     *
     * @var string
     */
    public $hostClass;

    /**
     * @example 65536
     *
     * @var string
     */
    public $hostMem;

    /**
     * @example ch-bp15xfnp706tl****
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
     * @example 1234
     *
     * @var string
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
     * @example ALinux
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @example 1
     *
     * @var string
     */
    public $instanceNumber;

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
     * @example 2012_std_ha,2012_std,2016_std_ha,2016_std,2017_std_ha,2017_std,2019_std_ha,2019_std
     *
     * @var string
     */
    public $mssqlSupportVersion;

    /**
     * @example 3
     *
     * @var string
     */
    public $openPermission;

    /**
     * @example 588800
     *
     * @var string
     */
    public $storageUsed;

    /**
     * @example vpc-bp1roz55mrbj3ka1s****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-bp133c8ifzxd3iv6q****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountType'          => 'AccountType',
        'allocationStatus'     => 'AllocationStatus',
        'bastionInstanceId'    => 'BastionInstanceId',
        'CPUAllocationRatio'   => 'CPUAllocationRatio',
        'category'             => 'Category',
        'chargeType'           => 'ChargeType',
        'cpuUsed'              => 'CpuUsed',
        'createdTime'          => 'CreatedTime',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'diskAllocationRatio'  => 'DiskAllocationRatio',
        'diskInfo'             => 'DiskInfo',
        'distributionSymbol'   => 'DistributionSymbol',
        'distributionTag'      => 'DistributionTag',
        'ecsClassCode'         => 'EcsClassCode',
        'ecsId'                => 'EcsId',
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
        'mssqlSupportVersion'  => 'MssqlSupportVersion',
        'openPermission'       => 'OpenPermission',
        'storageUsed'          => 'StorageUsed',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
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
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->CPUAllocationRatio) {
            $res['CPUAllocationRatio'] = $this->CPUAllocationRatio;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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
        if (null !== $this->diskInfo) {
            $res['DiskInfo'] = $this->diskInfo;
        }
        if (null !== $this->distributionSymbol) {
            $res['DistributionSymbol'] = $this->distributionSymbol;
        }
        if (null !== $this->distributionTag) {
            $res['DistributionTag'] = $this->distributionTag;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
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
        if (null !== $this->mssqlSupportVersion) {
            $res['MssqlSupportVersion'] = $this->mssqlSupportVersion;
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

    /**
     * @param array $map
     *
     * @return dedicatedHosts
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
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['CPUAllocationRatio'])) {
            $model->CPUAllocationRatio = $map['CPUAllocationRatio'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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
        if (isset($map['DiskInfo'])) {
            $model->diskInfo = $map['DiskInfo'];
        }
        if (isset($map['DistributionSymbol'])) {
            $model->distributionSymbol = $map['DistributionSymbol'];
        }
        if (isset($map['DistributionTag'])) {
            $model->distributionTag = $map['DistributionTag'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
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
        if (isset($map['MssqlSupportVersion'])) {
            $model->mssqlSupportVersion = $map['MssqlSupportVersion'];
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
