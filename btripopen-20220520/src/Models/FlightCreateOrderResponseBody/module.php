<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 3287177727711
     *
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example 123
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $lastPayTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $paymentPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'alipayTradeNo' => 'alipay_trade_no',
        'btripOrderId'  => 'btrip_order_id',
        'disOrderId'    => 'dis_order_id',
        'lastPayTime'   => 'last_pay_time',
        'orderStatus'   => 'order_status',
        'payStatus'     => 'pay_status',
        'paymentPrice'  => 'payment_price',
        'totalPrice'    => 'total_price',
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
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->paymentPrice) {
            $res['payment_price'] = $this->paymentPrice;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['payment_price'])) {
            $model->paymentPrice = $map['payment_price'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
