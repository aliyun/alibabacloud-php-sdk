<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IntlFlightOrderPayRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extParams;

    /**
     * @example TRAVEL
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1002145190081005400
     *
     * @var string
     */
    public $orderId;

    /**
     * @example F11372878673688133632
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 15500
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'extParams'  => 'ext_params',
        'isvName'    => 'isv_name',
        'orderId'    => 'order_id',
        'outOrderId' => 'out_order_id',
        'totalPrice' => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extParams) {
            $res['ext_params'] = $this->extParams;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntlFlightOrderPayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ext_params'])) {
            $model->extParams = $map['ext_params'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
