<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class ecsCapacityReservationAttr extends Model
{
    /**
     * @var string
     */
    public $capacityReservationPreference;

    /**
     * @var string
     */
    public $capacityReservationId;
    protected $_name = [
        'capacityReservationPreference' => 'CapacityReservationPreference',
        'capacityReservationId'         => 'CapacityReservationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationPreference) {
            $res['CapacityReservationPreference'] = $this->capacityReservationPreference;
        }
        if (null !== $this->capacityReservationId) {
            $res['CapacityReservationId'] = $this->capacityReservationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsCapacityReservationAttr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationPreference'])) {
            $model->capacityReservationPreference = $map['CapacityReservationPreference'];
        }
        if (isset($map['CapacityReservationId'])) {
            $model->capacityReservationId = $map['CapacityReservationId'];
        }

        return $model;
    }
}
