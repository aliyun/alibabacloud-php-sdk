<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostClusterCapacity\localStorageCapacities;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusterCapacity extends Model
{
    /**
     * @var localStorageCapacities[]
     */
    public $localStorageCapacities;

    /**
     * @var int
     */
    public $availableMemory;

    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $totalVcpus;

    /**
     * @var int
     */
    public $availableVcpus;
    protected $_name = [
        'localStorageCapacities' => 'LocalStorageCapacities',
        'availableMemory'        => 'AvailableMemory',
        'totalMemory'            => 'TotalMemory',
        'totalVcpus'             => 'TotalVcpus',
        'availableVcpus'         => 'AvailableVcpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localStorageCapacities) {
            $res['LocalStorageCapacities'] = [];
            if (null !== $this->localStorageCapacities && \is_array($this->localStorageCapacities)) {
                $n = 0;
                foreach ($this->localStorageCapacities as $item) {
                    $res['LocalStorageCapacities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
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
        if (isset($map['LocalStorageCapacities'])) {
            if (!empty($map['LocalStorageCapacities'])) {
                $model->localStorageCapacities = [];
                $n                             = 0;
                foreach ($map['LocalStorageCapacities'] as $item) {
                    $model->localStorageCapacities[$n++] = null !== $item ? localStorageCapacities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }

        return $model;
    }
}
