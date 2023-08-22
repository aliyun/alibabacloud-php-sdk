<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class multiRefundFeeDTOS extends Model
{
    /**
     * @example 3243028
     *
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @example 10000
     *
     * @var int
     */
    public $preRefundMoney;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundChargeFee;
    protected $_name = [
        'passengerId'     => 'passenger_id',
        'passengerName'   => 'passenger_name',
        'preRefundMoney'  => 'pre_refund_money',
        'refundChargeFee' => 'refund_charge_fee',
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

    /**
     * @param array $map
     *
     * @return multiRefundFeeDTOS
     */
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
