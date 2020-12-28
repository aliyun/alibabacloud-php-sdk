<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\capacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\instances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var capacity
     */
    public $capacity;

    /**
     * @var string
     */
    public $autoPlacement;

    /**
     * @var operationLocks[]
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @var int
     */
    public $physicalGpus;

    /**
     * @var string
     */
    public $saleCycle;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var int
     */
    public $sockets;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @var float
     */
    public $cpuOverCommitRatio;

    /**
     * @var string[]
     */
    public $supportedInstanceTypesList;

    /**
     * @var string[]
     */
    public $supportedCustomInstanceTypeFamilies;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string[]
     */
    public $supportedInstanceTypeFamilies;

    /**
     * @var string
     */
    public $machineId;
    protected $_name = [
        'status'                              => 'Status',
        'creationTime'                        => 'CreationTime',
        'capacity'                            => 'Capacity',
        'autoPlacement'                       => 'AutoPlacement',
        'operationLocks'                      => 'OperationLocks',
        'chargeType'                          => 'ChargeType',
        'tags'                                => 'Tags',
        'actionOnMaintenance'                 => 'ActionOnMaintenance',
        'physicalGpus'                        => 'PhysicalGpus',
        'saleCycle'                           => 'SaleCycle',
        'description'                         => 'Description',
        'dedicatedHostType'                   => 'DedicatedHostType',
        'dedicatedHostId'                     => 'DedicatedHostId',
        'sockets'                             => 'Sockets',
        'cores'                               => 'Cores',
        'GPUSpec'                             => 'GPUSpec',
        'autoReleaseTime'                     => 'AutoReleaseTime',
        'cpuOverCommitRatio'                  => 'CpuOverCommitRatio',
        'supportedInstanceTypesList'          => 'SupportedInstanceTypesList',
        'supportedCustomInstanceTypeFamilies' => 'SupportedCustomInstanceTypeFamilies',
        'instances'                           => 'Instances',
        'regionId'                            => 'RegionId',
        'networkAttributes'                   => 'NetworkAttributes',
        'dedicatedHostName'                   => 'DedicatedHostName',
        'expiredTime'                         => 'ExpiredTime',
        'dedicatedHostClusterId'              => 'DedicatedHostClusterId',
        'resourceGroupId'                     => 'ResourceGroupId',
        'zoneId'                              => 'ZoneId',
        'supportedInstanceTypeFamilies'       => 'SupportedInstanceTypeFamilies',
        'machineId'                           => 'MachineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = [];
            if (null !== $this->operationLocks && \is_array($this->operationLocks)) {
                $n = 0;
                foreach ($this->operationLocks as $item) {
                    $res['OperationLocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->cpuOverCommitRatio) {
            $res['CpuOverCommitRatio'] = $this->cpuOverCommitRatio;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = $this->supportedInstanceTypesList;
        }
        if (null !== $this->supportedCustomInstanceTypeFamilies) {
            $res['SupportedCustomInstanceTypeFamilies'] = $this->supportedCustomInstanceTypeFamilies;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = $this->supportedInstanceTypeFamilies;
        }
        if (null !== $this->machineId) {
            $res['MachineId'] = $this->machineId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['OperationLocks'])) {
            if (!empty($map['OperationLocks'])) {
                $model->operationLocks = [];
                $n                     = 0;
                foreach ($map['OperationLocks'] as $item) {
                    $model->operationLocks[$n++] = null !== $item ? operationLocks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['CpuOverCommitRatio'])) {
            $model->cpuOverCommitRatio = $map['CpuOverCommitRatio'];
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            if (!empty($map['SupportedInstanceTypesList'])) {
                $model->supportedInstanceTypesList = $map['SupportedInstanceTypesList'];
            }
        }
        if (isset($map['SupportedCustomInstanceTypeFamilies'])) {
            if (!empty($map['SupportedCustomInstanceTypeFamilies'])) {
                $model->supportedCustomInstanceTypeFamilies = $map['SupportedCustomInstanceTypeFamilies'];
            }
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            if (!empty($map['SupportedInstanceTypeFamilies'])) {
                $model->supportedInstanceTypeFamilies = $map['SupportedInstanceTypeFamilies'];
            }
        }
        if (isset($map['MachineId'])) {
            $model->machineId = $map['MachineId'];
        }

        return $model;
    }
}
