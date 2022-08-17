<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters;

use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusterCapacity extends Model
{
    /**
     * @var int
     */
    public $availableCapacity;

    /**
     * @var int
     */
    public $deliveryCapacity;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $usedCapacity;
    protected $_name = [
        'availableCapacity' => 'AvailableCapacity',
        'deliveryCapacity'  => 'DeliveryCapacity',
        'totalCapacity'     => 'TotalCapacity',
        'usedCapacity'      => 'UsedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableCapacity) {
            $res['AvailableCapacity'] = $this->availableCapacity;
        }
        if (null !== $this->deliveryCapacity) {
            $res['DeliveryCapacity'] = $this->deliveryCapacity;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['AvailableCapacity'])) {
            $model->availableCapacity = $map['AvailableCapacity'];
        }
        if (isset($map['DeliveryCapacity'])) {
            $model->deliveryCapacity = $map['DeliveryCapacity'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
