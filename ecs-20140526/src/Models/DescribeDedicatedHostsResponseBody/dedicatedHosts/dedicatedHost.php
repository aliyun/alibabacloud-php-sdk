<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\hostDetailInfo;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\instances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportedCustomInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportedInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportedInstanceTypesList;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHost extends Model
{
    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @description The policy used to migrate the instances deployed on the dedicated host when the dedicated host fails. Valid values:
     *
     *   Migrate: The instances are migrated to another physical server. Instances that are not in the Stopped state when the dedicated host fails are restarted.
     *   Stop: The instances are stopped. If the dedicated host cannot be repaired, the instances are migrated to another physical server and restarted.
     *
     * If the dedicated host has cloud disks attached, the default value is Migrate. If the dedicated host has local disks attached, the default value is Stop.
     * @example Migrate
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description Indicates whether the dedicated host was added to the resource pool for automatic deployment. Valid values:
     *
     *   on: The dedicated host was added to the resource pool for automatic deployment.
     *   off: The dedicated host was not added to the resource pool for automatic deployment.
     *
     * For more information about automatic deployment, see the "Automatic deployment" section in [Functions and features](https://help.aliyun.com/document_detail/118938.html).
     * @example on
     *
     * @var string
     */
    public $autoPlacement;

    /**
     * @description The automatic release time of the instances deployed on the dedicated host. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2017-01-01T12:00Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description The performance specifications of the dedicated host.
     *
     * @var capacity
     */
    public $capacity;

    /**
     * @description The billing method of the dedicated host.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of physical cores per CPU.
     *
     * @example 3
     *
     * @var int
     */
    public $cores;

    /**
     * @description The CPU overcommit ratio.
     *
     * @example 1
     *
     * @var float
     */
    public $cpuOverCommitRatio;

    /**
     * @description The time when the dedicated host was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2018-01-01T12:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the dedicated host cluster to which the dedicated host belongs.
     *
     * @example dc-bp12wlf6am0vz9v2****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The ID of the dedicated host.
     *
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The name of the dedicated host.
     *
     * @example MyDDHTestName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The ID of the dedicated host owner.
     *
     * @example 100************7
     *
     * @var int
     */
    public $dedicatedHostOwnerId;

    /**
     * @description The type of the dedicated host.
     *
     * @example ddh.g5
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description The description of the dedicated host.
     *
     * @example this-is-my-DDH
     *
     * @var string
     */
    public $description;

    /**
     * @description The expiration time of the subscription dedicated host. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2019-01-01T12:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The GPU model.
     *
     * @example gpu
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     *
     * @var hostDetailInfo
     */
    public $hostDetailInfo;

    /**
     * @description The ECS instances that were created on the dedicated host.
     *
     * @var instances
     */
    public $instances;

    /**
     * @description The machine code of the dedicated host.
     *
     * @example 12aaa123456ff19dec12345d3026e****
     *
     * @var string
     */
    public $machineId;

    /**
     * @description The network attributes of the dedicated host.
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description The reasons why the resources of the dedicated host were locked.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The number of physical GPUs.
     *
     * @example 10
     *
     * @var int
     */
    public $physicalGpus;

    /**
     * @description The region ID of the dedicated host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the dedicated host belongs.
     *
     * @example rg-aek3b6jzp66****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The unit of the subscription period. Valid values:
     *
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $saleCycle;

    /**
     * @description The number of physical CPUs.
     *
     * @example 5
     *
     * @var int
     */
    public $sockets;

    /**
     * @description The status of the dedicated host. Valid values:
     *
     *   Available: The dedicated host is running normally.
     *   UnderAssessment: The dedicated host is available but has potential risks that may cause the ECS instances on the dedicated host to fail.
     *   PermanentFailure: The dedicated host has permanent failures and is unavailable.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The custom ECS instance families that are supported by the dedicated host.
     *
     * @var supportedCustomInstanceTypeFamilies
     */
    public $supportedCustomInstanceTypeFamilies;

    /**
     * @description The ECS instance families that are supported by the dedicated host.
     *
     * @var supportedInstanceTypeFamilies
     */
    public $supportedInstanceTypeFamilies;

    /**
     * @description The ECS instance types that are supported by the dedicated host.
     *
     * @var supportedInstanceTypesList
     */
    public $supportedInstanceTypesList;

    /**
     * @description The tags of the dedicated host.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The zone ID of the dedicated host.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'schedulerOptions'                    => 'SchedulerOptions',
        'actionOnMaintenance'                 => 'ActionOnMaintenance',
        'autoPlacement'                       => 'AutoPlacement',
        'autoReleaseTime'                     => 'AutoReleaseTime',
        'capacity'                            => 'Capacity',
        'chargeType'                          => 'ChargeType',
        'cores'                               => 'Cores',
        'cpuOverCommitRatio'                  => 'CpuOverCommitRatio',
        'creationTime'                        => 'CreationTime',
        'dedicatedHostClusterId'              => 'DedicatedHostClusterId',
        'dedicatedHostId'                     => 'DedicatedHostId',
        'dedicatedHostName'                   => 'DedicatedHostName',
        'dedicatedHostOwnerId'                => 'DedicatedHostOwnerId',
        'dedicatedHostType'                   => 'DedicatedHostType',
        'description'                         => 'Description',
        'expiredTime'                         => 'ExpiredTime',
        'GPUSpec'                             => 'GPUSpec',
        'hostDetailInfo'                      => 'HostDetailInfo',
        'instances'                           => 'Instances',
        'machineId'                           => 'MachineId',
        'networkAttributes'                   => 'NetworkAttributes',
        'operationLocks'                      => 'OperationLocks',
        'physicalGpus'                        => 'PhysicalGpus',
        'regionId'                            => 'RegionId',
        'resourceGroupId'                     => 'ResourceGroupId',
        'saleCycle'                           => 'SaleCycle',
        'sockets'                             => 'Sockets',
        'status'                              => 'Status',
        'supportedCustomInstanceTypeFamilies' => 'SupportedCustomInstanceTypeFamilies',
        'supportedInstanceTypeFamilies'       => 'SupportedInstanceTypeFamilies',
        'supportedInstanceTypesList'          => 'SupportedInstanceTypesList',
        'tags'                                => 'Tags',
        'zoneId'                              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toMap() : null;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->cpuOverCommitRatio) {
            $res['CpuOverCommitRatio'] = $this->cpuOverCommitRatio;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->dedicatedHostOwnerId) {
            $res['DedicatedHostOwnerId'] = $this->dedicatedHostOwnerId;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->hostDetailInfo) {
            $res['HostDetailInfo'] = null !== $this->hostDetailInfo ? $this->hostDetailInfo->toMap() : null;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->machineId) {
            $res['MachineId'] = $this->machineId;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedCustomInstanceTypeFamilies) {
            $res['SupportedCustomInstanceTypeFamilies'] = null !== $this->supportedCustomInstanceTypeFamilies ? $this->supportedCustomInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = null !== $this->supportedInstanceTypeFamilies ? $this->supportedInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = null !== $this->supportedInstanceTypesList ? $this->supportedInstanceTypesList->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['CpuOverCommitRatio'])) {
            $model->cpuOverCommitRatio = $map['CpuOverCommitRatio'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['DedicatedHostOwnerId'])) {
            $model->dedicatedHostOwnerId = $map['DedicatedHostOwnerId'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['HostDetailInfo'])) {
            $model->hostDetailInfo = hostDetailInfo::fromMap($map['HostDetailInfo']);
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['MachineId'])) {
            $model->machineId = $map['MachineId'];
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedCustomInstanceTypeFamilies'])) {
            $model->supportedCustomInstanceTypeFamilies = supportedCustomInstanceTypeFamilies::fromMap($map['SupportedCustomInstanceTypeFamilies']);
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            $model->supportedInstanceTypeFamilies = supportedInstanceTypeFamilies::fromMap($map['SupportedInstanceTypeFamilies']);
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            $model->supportedInstanceTypesList = supportedInstanceTypesList::fromMap($map['SupportedInstanceTypesList']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
