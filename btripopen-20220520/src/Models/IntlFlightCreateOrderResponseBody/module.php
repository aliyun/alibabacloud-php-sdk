<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $asyncCreateOrderKey;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $payLatestTime;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'payLatestTime' => 'pay_latest_time',
        'payStatus' => 'pay_status',
        'status' => 'status',
        'totalPrice' => 'total_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncCreateOrderKey) {
            $res['async_create_order_key'] = $this->asyncCreateOrderKey;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->payLatestTime) {
            $res['pay_latest_time'] = $this->payLatestTime;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
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
        if (isset($map['async_create_order_key'])) {
            $model->asyncCreateOrderKey = $map['async_create_order_key'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['pay_latest_time'])) {
            $model->payLatestTime = $map['pay_latest_time'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
