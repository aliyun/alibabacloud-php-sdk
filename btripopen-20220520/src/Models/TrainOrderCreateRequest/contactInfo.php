<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;

use AlibabaCloud\Dara\Model;

class contactInfo extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerMobile;

    /**
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'passengerMobile' => 'passenger_mobile',
        'passengerName' => 'passenger_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
