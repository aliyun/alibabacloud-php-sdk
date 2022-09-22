<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusterCapacity extends Model
{
    /**
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @var int
     */
    public $availableMemory;

    /**
     * @var int
     */
    public $availableVcpus;

    /**
     * @var localStorageCapacities
     */
    public $localStorageCapacities;

    /**
     * @var int
     */
    public $totalMemory;

    /**
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
