<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\localStorageCapacities\localStorageCapacity;

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
        if (\is_array($this->localStorageCapacity)) {
            Model::validateArray($this->localStorageCapacity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localStorageCapacity) {
            if (\is_array($this->localStorageCapacity)) {
                $res['LocalStorageCapacity'] = [];
                $n1                          = 0;
                foreach ($this->localStorageCapacity as $item1) {
                    $res['LocalStorageCapacity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalStorageCapacity'])) {
            if (!empty($map['LocalStorageCapacity'])) {
                $model->localStorageCapacity = [];
                $n1                          = 0;
                foreach ($map['LocalStorageCapacity'] as $item1) {
                    $model->localStorageCapacity[$n1++] = localStorageCapacity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
