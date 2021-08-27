<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageCluster;
use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusters extends Model
{
    /**
     * @var dedicatedBlockStorageCluster[]
     */
    public $dedicatedBlockStorageCluster;
    protected $_name = [
        'dedicatedBlockStorageCluster' => 'DedicatedBlockStorageCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedBlockStorageCluster) {
            $res['DedicatedBlockStorageCluster'] = [];
            if (null !== $this->dedicatedBlockStorageCluster && \is_array($this->dedicatedBlockStorageCluster)) {
                $n = 0;
                foreach ($this->dedicatedBlockStorageCluster as $item) {
                    $res['DedicatedBlockStorageCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedBlockStorageClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedBlockStorageCluster'])) {
            if (!empty($map['DedicatedBlockStorageCluster'])) {
                $model->dedicatedBlockStorageCluster = [];
                $n                                   = 0;
                foreach ($map['DedicatedBlockStorageCluster'] as $item) {
                    $model->dedicatedBlockStorageCluster[$n++] = null !== $item ? dedicatedBlockStorageCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
