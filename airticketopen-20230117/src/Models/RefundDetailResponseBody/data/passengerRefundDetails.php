<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails\passenger;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails\refundFee;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toMap() : null;
        }
        if (null !== $this->refundFee) {
            $res['refund_fee'] = null !== $this->refundFee ? $this->refundFee->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerRefundDetails
     */
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
