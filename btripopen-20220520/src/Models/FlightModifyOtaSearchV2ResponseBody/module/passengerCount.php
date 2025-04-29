<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class passengerCount extends Model
{
    /**
     * @var int
     */
    public $adultPassengerNum;

    /**
     * @var int
     */
    public $childPassengerNum;

    /**
     * @var int
     */
    public $infantPassengerNum;
    protected $_name = [
        'adultPassengerNum' => 'adult_passenger_num',
        'childPassengerNum' => 'child_passenger_num',
        'infantPassengerNum' => 'infant_passenger_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adultPassengerNum) {
            $res['adult_passenger_num'] = $this->adultPassengerNum;
        }

        if (null !== $this->childPassengerNum) {
            $res['child_passenger_num'] = $this->childPassengerNum;
        }

        if (null !== $this->infantPassengerNum) {
            $res['infant_passenger_num'] = $this->infantPassengerNum;
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
        if (isset($map['adult_passenger_num'])) {
            $model->adultPassengerNum = $map['adult_passenger_num'];
        }

        if (isset($map['child_passenger_num'])) {
            $model->childPassengerNum = $map['child_passenger_num'];
        }

        if (isset($map['infant_passenger_num'])) {
            $model->infantPassengerNum = $map['infant_passenger_num'];
        }

        return $model;
    }
}
