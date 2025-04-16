<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages\capacityReservationUsage;

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
        if (\is_array($this->capacityReservationUsage)) {
            Model::validateArray($this->capacityReservationUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationUsage) {
            if (\is_array($this->capacityReservationUsage)) {
                $res['CapacityReservationUsage'] = [];
                $n1 = 0;
                foreach ($this->capacityReservationUsage as $item1) {
                    $res['CapacityReservationUsage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CapacityReservationUsage'])) {
            if (!empty($map['CapacityReservationUsage'])) {
                $model->capacityReservationUsage = [];
                $n1 = 0;
                foreach ($map['CapacityReservationUsage'] as $item1) {
                    $model->capacityReservationUsage[$n1++] = capacityReservationUsage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
