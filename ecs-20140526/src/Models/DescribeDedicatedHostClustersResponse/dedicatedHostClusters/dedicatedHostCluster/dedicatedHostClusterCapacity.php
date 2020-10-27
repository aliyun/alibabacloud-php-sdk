<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusterCapacity extends Model
{
    /**
     * @var int
     */
    public $totalVcpus;

    /**
     * @var int
     */
    public $availableVcpus;

    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $availableMemory;

    /**
     * @var localStorageCapacities
     */
    public $localStorageCapacities;
    protected $_name = [
        'totalVcpus'             => 'TotalVcpus',
        'availableVcpus'         => 'AvailableVcpus',
        'totalMemory'            => 'TotalMemory',
        'availableMemory'        => 'AvailableMemory',
        'localStorageCapacities' => 'LocalStorageCapacities',
    ];

    public function validate()
    {
        Model::validateRequired('totalVcpus', $this->totalVcpus, true);
        Model::validateRequired('availableVcpus', $this->availableVcpus, true);
        Model::validateRequired('totalMemory', $this->totalMemory, true);
        Model::validateRequired('availableMemory', $this->availableMemory, true);
        Model::validateRequired('localStorageCapacities', $this->localStorageCapacities, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->localStorageCapacities) {
            $res['LocalStorageCapacities'] = null !== $this->localStorageCapacities ? $this->localStorageCapacities->toMap() : null;
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
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['LocalStorageCapacities'])) {
            $model->localStorageCapacities = localStorageCapacities::fromMap($map['LocalStorageCapacities']);
        }

        return $model;
    }
}
