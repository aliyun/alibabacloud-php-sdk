<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters\dedicatedHostCluster;
use AlibabaCloud\Tea\Model;

class dedicatedHostClusters extends Model
{
    /**
     * @var dedicatedHostCluster[]
     */
    public $dedicatedHostCluster;
    protected $_name = [
        'dedicatedHostCluster' => 'DedicatedHostCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostCluster) {
            $res['DedicatedHostCluster'] = [];
            if (null !== $this->dedicatedHostCluster && \is_array($this->dedicatedHostCluster)) {
                $n = 0;
                foreach ($this->dedicatedHostCluster as $item) {
                    $res['DedicatedHostCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostCluster'])) {
            if (!empty($map['DedicatedHostCluster'])) {
                $model->dedicatedHostCluster = [];
                $n                           = 0;
                foreach ($map['DedicatedHostCluster'] as $item) {
                    $model->dedicatedHostCluster[$n++] = null !== $item ? dedicatedHostCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
