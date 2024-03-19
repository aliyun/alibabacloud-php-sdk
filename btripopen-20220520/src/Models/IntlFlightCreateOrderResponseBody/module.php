<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example deb6372db8194f1c94c23bc4fadc508d
     *
     * @var string
     */
    public $asyncCreateOrderKey;

    /**
     * @example 2023-08-10 17:42:32
     *
     * @var string
     */
    public $latestPayTime;

    /**
     * @example 1003038197806523003
     *
     * @var int
     */
    public $orderId;

    /**
     * @example F11378244642107293696
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 0
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example -1
     *
     * @var int
     */
    public $status;

    /**
     * @example 22300
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'latestPayTime'       => 'latest_pay_time',
        'orderId'             => 'order_id',
        'outOrderId'          => 'out_order_id',
        'payStatus'           => 'pay_status',
        'status'              => 'status',
        'totalPrice'          => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncCreateOrderKey) {
            $res['async_create_order_key'] = $this->asyncCreateOrderKey;
        }
        if (null !== $this->latestPayTime) {
            $res['latest_pay_time'] = $this->latestPayTime;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
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

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_create_order_key'])) {
            $model->asyncCreateOrderKey = $map['async_create_order_key'];
        }
        if (isset($map['latest_pay_time'])) {
            $model->latestPayTime = $map['latest_pay_time'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
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
