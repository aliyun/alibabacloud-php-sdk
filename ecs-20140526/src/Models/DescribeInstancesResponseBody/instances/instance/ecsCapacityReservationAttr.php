<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class ecsCapacityReservationAttr extends Model
{
    /**
     * @var string
     */
    public $capacityReservationId;
    /**
     * @var string
     */
    public $capacityReservationPreference;
    protected $_name = [
        'capacityReservationId'         => 'CapacityReservationId',
        'capacityReservationPreference' => 'CapacityReservationPreference',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationId) {
            $res['CapacityReservationId'] = $this->capacityReservationId;
        }

        if (null !== $this->capacityReservationPreference) {
            $res['CapacityReservationPreference'] = $this->capacityReservationPreference;
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
        if (isset($map['CapacityReservationId'])) {
            $model->capacityReservationId = $map['CapacityReservationId'];
        }

        if (isset($map['CapacityReservationPreference'])) {
            $model->capacityReservationPreference = $map['CapacityReservationPreference'];
        }

        return $model;
    }
}
