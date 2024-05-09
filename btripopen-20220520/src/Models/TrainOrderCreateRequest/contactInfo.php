<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;

use AlibabaCloud\Tea\Model;

class contactInfo extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $passengerId;

    /**
     * @example b6a6fc1bdf1ba60e25c2e132b612c8819
     *
     * @var string
     */
    public $passengerMobile;

    /**
     * @example 949c9f34f677a0e5d249dfc94f5e62cc7
     *
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'passengerId'     => 'passenger_id',
        'passengerMobile' => 'passenger_mobile',
        'passengerName'   => 'passenger_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }
        if (null !== $this->passengerMobile) {
            $res['passenger_mobile'] = $this->passengerMobile;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }
        if (isset($map['passenger_mobile'])) {
            $model->passengerMobile = $map['passenger_mobile'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        return $model;
    }
}
