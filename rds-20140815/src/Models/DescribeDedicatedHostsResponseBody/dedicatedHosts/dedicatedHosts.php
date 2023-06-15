<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @description The account of the host. You can call the [CreateDedicatedHostAccount](~~196877~~) operation to create a host account.
     *
     * @example test123
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Indicates whether the system allows you to create instances on the host. Valid values:
     *
     *   **0**: The system does not allow you to create instances on the host.
     *   **1**: The system allows you to create instances on the host.
     *
     * @example 1
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description The ID of the bastion host.
     *
     * @example bastionhost-cn-m7xxxxxxxx
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description The core overcommitment ratio of the dedicated cluster. Unit: %. For more information about the core overcommitment ratio, see [Manage a dedicated cluster](~~182328~~).
     *
     * @example 200
     *
     * @var string
     */
    public $CPUAllocationRatio;

    /**
     * @description The number of used cores on the host.
     *
     * @example 4
     *
     * @var string
     */
    public $cpuUsed;

    /**
     * @description The time when the host was created.
     *
     * @example 2021-03-25 17:29:06.0
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The ID of the host.
     *
     * @example i-bpxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The disk overcommitment ratio of the dedicated cluster. Unit: %. For more information about the disk overcommitment ratio, see [Manage a dedicated cluster](~~182328~~).
     *
     * @example 200
     *
     * @var string
     */
    public $diskAllocationRatio;

    /**
     * @description The time when the host expires.
     *
     * @example 2021-04-25T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The database engine of instances that are created on the host.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The total number of cores that are configured for the host.
     *
     * @example 8
     *
     * @var string
     */
    public $hostCPU;

    /**
     * @description The specifications of the host.
     *
     * @example ecs.i2.16xlarge
     *
     * @var string
     */
    public $hostClass;

    /**
     * @description The total memory space of the host. Unit: MB.
     *
     * @example 32238
     *
     * @var string
     */
    public $hostMem;

    /**
     * @description The name of the host.
     *
     * @example testHost1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The status of the host. Valid values:
     *
     *   **0**: The host is being created.
     *   **1**: The host is running.
     *   **2**: The host is faulty.
     *   **3**: The host is being replaced.
     *   **4**: The host is deprecated.
     *   **5**: The host is being deleted.
     *   **6**: The host is restarting.
     *
     * @example 1
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @description The storage capacity of the host. Unit: MB.
     *
     * @example 2097152
     *
     * @var string
     */
    public $hostStorage;

    /**
     * @description The type of storage media that is used for the host. Valid values:
     *
     *   **dhg_cloud_ssd**: enhanced SSD
     *   **dhg_local_ssd**: local SSD
     *
     * @example dhg_cloud_ssd
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The internal IP address of the host.
     *
     * @example 192.xx.xx.xx
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The image of the host. This parameter is returned only when the **Engine** parameter is set to **mssql**. Valid values:
     *
     *   **WindowsWithMssqlStdLicense**: a Windows image, which contains the licenses of the SQL Server Standard Edition
     *   **WindowsWithMssqlEntLisence**: a Windows image, which contains the licenses of the SQL Server Enterprise Edition
     *   **WindowsWithMssqlWebLisence**: a Windows image, which contains the licenses of the SQL Server Web Edition
     *
     * @example WindowsWithMssqlStdLicense
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @description The total number of instances that are created on the host.
     *
     * @example 4
     *
     * @var string
     */
    public $instanceNumber;

    /**
     * @description The maximum memory usage per host in the dedicated cluster.
     *
     * @example 90
     *
     * @var string
     */
    public $memAllocationRatio;

    /**
     * @description The amount of used memory space on the host. Unit: MB.
     *
     * @example 16384
     *
     * @var string
     */
    public $memoryUsed;

    /**
     * @description Indicates whether the operating system permissions of the host can be granted. Valid values:
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
     * @description The amount of used storage space on the host.
     *
     * @example 0
     *
     * @var string
     */
    public $storageUsed;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the host belongs.
     *
     * @example vpc-bpxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch associated with the specified VPC.
     *
     * @example vsw-bpxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the host.
     *
     * @example cn-hangzhou-i
     *
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
    }

    public function toMap()
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
