<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class refundFeeList extends Model
{
    /**
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var int
     */
    public $refundPrice;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alipayTradeNo' => 'alipay_trade_no',
        'refundFee' => 'refund_fee',
        'refundPrice' => 'refund_price',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }

        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }

        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }

        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }

        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
