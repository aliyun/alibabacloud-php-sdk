<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusterCapacity extends Model
{
    /**
     * @description The available capacity of the Elastic Compute Service (ECS) instance types in the dedicated host cluster.
     *
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @description The size of available memory. Unit: GiB
     *
     * @example 4
     *
     * @var int
     */
    public $availableMemory;

    /**
     * @description The number of available vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $availableVcpus;

    /**
     * @description The local storage capacity.
     *
     * @var localStorageCapacities
     */
    public $localStorageCapacities;

    /**
     * @description The total memory size. Unit: GiB
     *
     * @example 8
     *
     * @var int
     */
    public $totalMemory;

    /**
     * @description The total number of vCPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $totalVcpus;
    protected $_name = [
        'availableInstanceTypes' => 'AvailableInstanceTypes',
        'availableMemory'        => 'AvailableMemory',
        'availableVcpus'         => 'AvailableVcpus',
        'localStorageCapacities' => 'LocalStorageCapacities',
        'totalMemory'            => 'TotalMemory',
        'totalVcpus'             => 'TotalVcpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = null !== $this->availableInstanceTypes ? $this->availableInstanceTypes->toMap() : null;
        }
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
        }
        if (null !== $this->localStorageCapacities) {
            $res['LocalStorageCapacities'] = null !== $this->localStorageCapacities ? $this->localStorageCapacities->toMap() : null;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostClusterCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableInstanceTypes'])) {
            $model->availableInstanceTypes = availableInstanceTypes::fromMap($map['AvailableInstanceTypes']);
        }
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }
        if (isset($map['LocalStorageCapacities'])) {
            $model->localStorageCapacities = localStorageCapacities::fromMap($map['LocalStorageCapacities']);
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }

        return $model;
    }
}
