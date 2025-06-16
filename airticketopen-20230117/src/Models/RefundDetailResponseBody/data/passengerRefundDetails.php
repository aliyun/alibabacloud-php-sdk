<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails\passenger;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails\refundFee;

class passengerRefundDetails extends Model
{
    /**
     * @var passenger
     */
    public $passenger;

    /**
     * @var refundFee
     */
    public $refundFee;
    protected $_name = [
        'passenger' => 'passenger',
        'refundFee' => 'refund_fee',
    ];

    public function validate()
    {
        if (null !== $this->passenger) {
            $this->passenger->validate();
        }
        if (null !== $this->refundFee) {
            $this->refundFee->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toArray($noStream) : $this->passenger;
        }

        if (null !== $this->refundFee) {
            $res['refund_fee'] = null !== $this->refundFee ? $this->refundFee->toArray($noStream) : $this->refundFee;
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
        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
        }

        if (isset($map['refund_fee'])) {
            $model->refundFee = refundFee::fromMap($map['refund_fee']);
        }

        return $model;
    }
}
