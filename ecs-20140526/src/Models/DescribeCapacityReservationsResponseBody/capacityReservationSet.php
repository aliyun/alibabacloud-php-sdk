<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem;
use AlibabaCloud\Tea\Model;

class capacityReservationSet extends Model
{
    /**
     * @var capacityReservationItem[]
     */
    public $capacityReservationItem;
    protected $_name = [
        'capacityReservationItem' => 'CapacityReservationItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationItem) {
            $res['CapacityReservationItem'] = [];
            if (null !== $this->capacityReservationItem && \is_array($this->capacityReservationItem)) {
                $n = 0;
                foreach ($this->capacityReservationItem as $item) {
                    $res['CapacityReservationItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservationSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationItem'])) {
            if (!empty($map['CapacityReservationItem'])) {
                $model->capacityReservationItem = [];
                $n                              = 0;
                foreach ($map['CapacityReservationItem'] as $item) {
                    $model->capacityReservationItem[$n++] = null !== $item ? capacityReservationItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
