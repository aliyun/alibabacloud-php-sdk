<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages;
use AlibabaCloud\Tea\Model;

class allocatedResource extends Model
{
    /**
     * @description The number of available instances.
     *
     * @example 2
     *
     * @var int
     */
    public $availableAmount;

    /**
     * @description Details of instance usage.
     *
     * @var capacityReservationUsages
     */
    public $capacityReservationUsages;

    /**
     * @description The instance type of the instances.
     *
     * @example ecs.c6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The total number of instances for which the capacity of an instance type is reserved.
     *
     * @example 2
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @description The number of instances that have used the capacity reservation.
     *
     * @example 2
     *
     * @var int
     */
    public $usedAmount;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableAmount'           => 'AvailableAmount',
        'capacityReservationUsages' => 'CapacityReservationUsages',
        'instanceType'              => 'InstanceType',
        'totalAmount'               => 'TotalAmount',
        'usedAmount'                => 'UsedAmount',
        'zoneId'                    => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->capacityReservationUsages) {
            $res['CapacityReservationUsages'] = null !== $this->capacityReservationUsages ? $this->capacityReservationUsages->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return allocatedResource
     */
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
