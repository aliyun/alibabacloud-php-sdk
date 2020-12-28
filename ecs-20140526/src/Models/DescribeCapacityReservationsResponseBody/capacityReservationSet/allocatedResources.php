<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet;

use AlibabaCloud\Tea\Model;

class allocatedResources extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $usedAmount;

    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'zoneId'       => 'zoneId',
        'usedAmount'   => 'UsedAmount',
        'totalAmount'  => 'TotalAmount',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocatedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
