<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders\recommendResource\capacityReservations;
use AlibabaCloud\Tea\Model;

class recommendResource extends Model
{
    /**
     * @var capacityReservations[]
     */
    public $capacityReservations;
    protected $_name = [
        'capacityReservations' => 'CapacityReservations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservations) {
            $res['CapacityReservations'] = [];
            if (null !== $this->capacityReservations && \is_array($this->capacityReservations)) {
                $n = 0;
                foreach ($this->capacityReservations as $item) {
                    $res['CapacityReservations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservations'])) {
            if (!empty($map['CapacityReservations'])) {
                $model->capacityReservations = [];
                $n                           = 0;
                foreach ($map['CapacityReservations'] as $item) {
                    $model->capacityReservations[$n++] = null !== $item ? capacityReservations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
