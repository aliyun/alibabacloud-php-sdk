<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages;

class allocatedResource extends Model
{
    /**
     * @var int
     */
    public $availableAmount;

    /**
     * @var capacityReservationUsages
     */
    public $capacityReservationUsages;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $usedAmount;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'capacityReservationUsages' => 'CapacityReservationUsages',
        'instanceType' => 'InstanceType',
        'totalAmount' => 'TotalAmount',
        'usedAmount' => 'UsedAmount',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        if (null !== $this->capacityReservationUsages) {
            $this->capacityReservationUsages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }

        if (null !== $this->capacityReservationUsages) {
            $res['CapacityReservationUsages'] = null !== $this->capacityReservationUsages ? $this->capacityReservationUsages->toArray($noStream) : $this->capacityReservationUsages;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }

        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }

        if (isset($map['CapacityReservationUsages'])) {
            $model->capacityReservationUsages = capacityReservationUsages::fromMap($map['CapacityReservationUsages']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
