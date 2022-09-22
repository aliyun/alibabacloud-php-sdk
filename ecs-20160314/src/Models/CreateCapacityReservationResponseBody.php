<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class CreateCapacityReservationResponseBody extends Model
{
    /**
     * @var string
     */
    public $capacityReservationId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'capacityReservationId' => 'CapacityReservationId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationId) {
            $res['CapacityReservationId'] = $this->capacityReservationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCapacityReservationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationId'])) {
            $model->capacityReservationId = $map['CapacityReservationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
