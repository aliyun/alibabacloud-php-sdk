<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster\dedicatedHostClusterCapacity\availableInstanceTypes\availableInstanceType;
use AlibabaCloud\Tea\Model;

class availableInstanceTypes extends Model
{
    /**
     * @var availableInstanceType[]
     */
    public $availableInstanceType;
    protected $_name = [
        'availableInstanceType' => 'AvailableInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableInstanceType) {
            $res['AvailableInstanceType'] = [];
            if (null !== $this->availableInstanceType && \is_array($this->availableInstanceType)) {
                $n = 0;
                foreach ($this->availableInstanceType as $item) {
                    $res['AvailableInstanceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableInstanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableInstanceType'])) {
            if (!empty($map['AvailableInstanceType'])) {
                $model->availableInstanceType = [];
                $n                            = 0;
                foreach ($map['AvailableInstanceType'] as $item) {
                    $model->availableInstanceType[$n++] = null !== $item ? availableInstanceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
