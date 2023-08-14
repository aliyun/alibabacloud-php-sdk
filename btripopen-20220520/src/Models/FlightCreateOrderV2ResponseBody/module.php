<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2ResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
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
     * @example 1017002195798359369
     *
     * @var int
     */
    public $orderId;

    /**
     * @example cheshiapi002kwl
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 32
     *
     * @var int
     */
    public $status;

    /**
     * @example 51000
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'asyncCreateOrderKey' => 'async_create_order_key',
        'latestPayTime'       => 'latest_pay_time',
        'orderId'             => 'order_id',
        'outOrderId'          => 'out_order_id',
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
