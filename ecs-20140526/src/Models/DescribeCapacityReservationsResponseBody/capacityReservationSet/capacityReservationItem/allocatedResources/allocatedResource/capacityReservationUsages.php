<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages\capacityReservationUsage;
use AlibabaCloud\Tea\Model;

class capacityReservationUsages extends Model
{
    /**
     * @var capacityReservationUsage[]
     */
    public $capacityReservationUsage;
    protected $_name = [
        'capacityReservationUsage' => 'CapacityReservationUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationUsage) {
            $res['CapacityReservationUsage'] = [];
            if (null !== $this->capacityReservationUsage && \is_array($this->capacityReservationUsage)) {
                $n = 0;
                foreach ($this->capacityReservationUsage as $item) {
                    $res['CapacityReservationUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservationUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationUsage'])) {
            if (!empty($map['CapacityReservationUsage'])) {
                $model->capacityReservationUsage = [];
                $n                               = 0;
                foreach ($map['CapacityReservationUsage'] as $item) {
                    $model->capacityReservationUsage[$n++] = null !== $item ? capacityReservationUsage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
