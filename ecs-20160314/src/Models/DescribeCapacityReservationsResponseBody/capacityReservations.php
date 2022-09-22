<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCapacityReservationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCapacityReservationsResponseBody\capacityReservations\capacityReservation;
use AlibabaCloud\Tea\Model;

class capacityReservations extends Model
{
    /**
     * @var capacityReservation[]
     */
    public $capacityReservation;
    protected $_name = [
        'capacityReservation' => 'CapacityReservation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservation) {
            $res['CapacityReservation'] = [];
            if (null !== $this->capacityReservation && \is_array($this->capacityReservation)) {
                $n = 0;
                foreach ($this->capacityReservation as $item) {
                    $res['CapacityReservation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservation'])) {
            if (!empty($map['CapacityReservation'])) {
                $model->capacityReservation = [];
                $n                          = 0;
                foreach ($map['CapacityReservation'] as $item) {
                    $model->capacityReservation[$n++] = null !== $item ? capacityReservation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
