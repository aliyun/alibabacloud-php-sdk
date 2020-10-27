<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponse\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities\localStorageCapacity;
use AlibabaCloud\Tea\Model;

class localStorageCapacities extends Model
{
    /**
     * @var localStorageCapacity[]
     */
    public $localStorageCapacity;
    protected $_name = [
        'localStorageCapacity' => 'LocalStorageCapacity',
    ];

    public function validate()
    {
        Model::validateRequired('localStorageCapacity', $this->localStorageCapacity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = [];
            if (null !== $this->localStorageCapacity && \is_array($this->localStorageCapacity)) {
                $n = 0;
                foreach ($this->localStorageCapacity as $item) {
                    $res['LocalStorageCapacity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localStorageCapacities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalStorageCapacity'])) {
            if (!empty($map['LocalStorageCapacity'])) {
                $model->localStorageCapacity = [];
                $n                           = 0;
                foreach ($map['LocalStorageCapacity'] as $item) {
                    $model->localStorageCapacity[$n++] = null !== $item ? localStorageCapacity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
