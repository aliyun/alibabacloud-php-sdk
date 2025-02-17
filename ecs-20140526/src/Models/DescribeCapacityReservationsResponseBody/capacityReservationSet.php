<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem;

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
        if (\is_array($this->capacityReservationItem)) {
            Model::validateArray($this->capacityReservationItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationItem) {
            if (\is_array($this->capacityReservationItem)) {
                $res['CapacityReservationItem'] = [];
                $n1                             = 0;
                foreach ($this->capacityReservationItem as $item1) {
                    $res['CapacityReservationItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CapacityReservationItem'])) {
            if (!empty($map['CapacityReservationItem'])) {
                $model->capacityReservationItem = [];
                $n1                             = 0;
                foreach ($map['CapacityReservationItem'] as $item1) {
                    $model->capacityReservationItem[$n1++] = capacityReservationItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
