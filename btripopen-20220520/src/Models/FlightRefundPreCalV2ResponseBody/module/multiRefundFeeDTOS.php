<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class multiRefundFeeDTOS extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var int
     */
    public $preRefundMoney;

    /**
     * @var int
     */
    public $refundChargeFee;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'passengerName' => 'passenger_name',
        'preRefundMoney' => 'pre_refund_money',
        'refundChargeFee' => 'refund_charge_fee',
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

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->preRefundMoney) {
            $res['pre_refund_money'] = $this->preRefundMoney;
        }

        if (null !== $this->refundChargeFee) {
            $res['refund_charge_fee'] = $this->refundChargeFee;
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

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['pre_refund_money'])) {
            $model->preRefundMoney = $map['pre_refund_money'];
        }

        if (isset($map['refund_charge_fee'])) {
            $model->refundChargeFee = $map['refund_charge_fee'];
        }

        return $model;
    }
}
