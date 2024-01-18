<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails\passengerMultiRefundDetails\passenger;
use AlibabaCloud\Tea\Model;

class passengerMultiRefundDetails extends Model
{
    /**
     * @example 30
     *
     * @var float
     */
    public $changeOrderRefundFee;

    /**
     * @example 30
     *
     * @var float
     */
    public $originalOrderRefundFee;

    /**
     * @var passenger
     */
    public $passenger;
    protected $_name = [
        'changeOrderRefundFee'   => 'change_order_refund_fee',
        'originalOrderRefundFee' => 'original_order_refund_fee',
        'passenger'              => 'passenger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderRefundFee) {
            $res['change_order_refund_fee'] = $this->changeOrderRefundFee;
        }
        if (null !== $this->originalOrderRefundFee) {
            $res['original_order_refund_fee'] = $this->originalOrderRefundFee;
        }
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerMultiRefundDetails
     */
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
