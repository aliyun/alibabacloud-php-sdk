<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\hostDetailInfo;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\instances;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\operationLocks;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportedCustomInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\supportInstanceTypesList;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHost extends Model
{
    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @var string
     */
    public $autoPlacement;

    /**
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @var capacity
     */
    public $capacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var float
     */
    public $cpuOverCommitRatio;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var hostDetailInfo
     */
    public $hostDetailInfo;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var string
     */
    public $machineId;

    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var int
     */
    public $physicalGpus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $saleCycle;

    /**
     * @var string
     */
    public $status;

    /**
     * @var supportInstanceTypeFamilies
     */
    public $supportInstanceTypeFamilies;

    /**
     * @var supportInstanceTypesList
     */
    public $supportInstanceTypesList;

    /**
     * @var supportedCustomInstanceTypeFamilies
     */
    public $supportedCustomInstanceTypeFamilies;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $totalPhysicalCores;

    /**
     * @var int
     */
    public $totalSockets;

    /**
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
        'cpuOverCommitRatio'                  => 'CpuOverCommitRatio',
        'creationTime'                        => 'CreationTime',
        'dedicatedHostClusterId'              => 'DedicatedHostClusterId',
        'dedicatedHostId'                     => 'DedicatedHostId',
        'dedicatedHostName'                   => 'DedicatedHostName',
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
        'status'                              => 'Status',
        'supportInstanceTypeFamilies'         => 'SupportInstanceTypeFamilies',
        'supportInstanceTypesList'            => 'SupportInstanceTypesList',
        'supportedCustomInstanceTypeFamilies' => 'SupportedCustomInstanceTypeFamilies',
        'tags'                                => 'Tags',
        'totalPhysicalCores'                  => 'TotalPhysicalCores',
        'totalSockets'                        => 'TotalSockets',
        'zoneId'                              => 'ZoneId',
    ];

    public function validate()
    {
        Model::validateRequired('schedulerOptions', $this->schedulerOptions, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportInstanceTypeFamilies) {
            $res['SupportInstanceTypeFamilies'] = null !== $this->supportInstanceTypeFamilies ? $this->supportInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportInstanceTypesList) {
            $res['SupportInstanceTypesList'] = null !== $this->supportInstanceTypesList ? $this->supportInstanceTypesList->toMap() : null;
        }
        if (null !== $this->supportedCustomInstanceTypeFamilies) {
            $res['SupportedCustomInstanceTypeFamilies'] = null !== $this->supportedCustomInstanceTypeFamilies ? $this->supportedCustomInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->totalPhysicalCores) {
            $res['TotalPhysicalCores'] = $this->totalPhysicalCores;
        }
        if (null !== $this->totalSockets) {
            $res['TotalSockets'] = $this->totalSockets;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportInstanceTypeFamilies'])) {
            $model->supportInstanceTypeFamilies = supportInstanceTypeFamilies::fromMap($map['SupportInstanceTypeFamilies']);
        }
        if (isset($map['SupportInstanceTypesList'])) {
            $model->supportInstanceTypesList = supportInstanceTypesList::fromMap($map['SupportInstanceTypesList']);
        }
        if (isset($map['SupportedCustomInstanceTypeFamilies'])) {
            $model->supportedCustomInstanceTypeFamilies = supportedCustomInstanceTypeFamilies::fromMap($map['SupportedCustomInstanceTypeFamilies']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TotalPhysicalCores'])) {
            $model->totalPhysicalCores = $map['TotalPhysicalCores'];
        }
        if (isset($map['TotalSockets'])) {
            $model->totalSockets = $map['TotalSockets'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
