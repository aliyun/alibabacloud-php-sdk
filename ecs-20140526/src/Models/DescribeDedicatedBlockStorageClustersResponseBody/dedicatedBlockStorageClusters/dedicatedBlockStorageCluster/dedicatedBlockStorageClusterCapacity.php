<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters\dedicatedBlockStorageCluster;

use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusterCapacity extends Model
{
    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $availableCapacity;
    protected $_name = [
        'totalCapacity'     => 'TotalCapacity',
        'availableCapacity' => 'AvailableCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->availableCapacity) {
            $res['AvailableCapacity'] = $this->availableCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedBlockStorageClusterCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['AvailableCapacity'])) {
            $model->availableCapacity = $map['AvailableCapacity'];
        }

        return $model;
    }
}
