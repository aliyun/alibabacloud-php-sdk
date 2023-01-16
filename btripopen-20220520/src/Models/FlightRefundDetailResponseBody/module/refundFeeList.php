<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailResponseBody\module;

use AlibabaCloud\Tea\Model;

class refundFeeList extends Model
{
    /**
     * @example 293982882881999
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundFee;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alipayTradeNo' => 'alipay_trade_no',
        'refundFee'     => 'refund_fee',
        'refundPrice'   => 'refund_price',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return refundFeeList
     */
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
