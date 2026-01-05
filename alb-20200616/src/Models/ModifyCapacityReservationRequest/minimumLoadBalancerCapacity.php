<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ModifyCapacityReservationRequest;

use AlibabaCloud\Dara\Model;

class minimumLoadBalancerCapacity extends Model
{
    /**
     * @var int
     */
    public $capacityUnits;
    protected $_name = [
        'capacityUnits' => 'CapacityUnits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityUnits) {
            $res['CapacityUnits'] = $this->capacityUnits;
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
        if (isset($map['CapacityUnits'])) {
            $model->capacityUnits = $map['CapacityUnits'];
        }

        return $model;
    }
}
