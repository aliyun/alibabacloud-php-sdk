<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails\passengerMultiRefundDetails\passenger;

class passengerMultiRefundDetails extends Model
{
    /**
     * @var float
     */
    public $changeOrderRefundFee;

    /**
     * @var float
     */
    public $originalOrderRefundFee;

    /**
     * @var passenger
     */
    public $passenger;
    protected $_name = [
        'changeOrderRefundFee' => 'change_order_refund_fee',
        'originalOrderRefundFee' => 'original_order_refund_fee',
        'passenger' => 'passenger',
    ];

    public function validate()
    {
        if (null !== $this->passenger) {
            $this->passenger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrderRefundFee) {
            $res['change_order_refund_fee'] = $this->changeOrderRefundFee;
        }

        if (null !== $this->originalOrderRefundFee) {
            $res['original_order_refund_fee'] = $this->originalOrderRefundFee;
        }

        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toArray($noStream) : $this->passenger;
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
        if (isset($map['change_order_refund_fee'])) {
            $model->changeOrderRefundFee = $map['change_order_refund_fee'];
        }

        if (isset($map['original_order_refund_fee'])) {
            $model->originalOrderRefundFee = $map['original_order_refund_fee'];
        }

        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
        }

        return $model;
    }
}
