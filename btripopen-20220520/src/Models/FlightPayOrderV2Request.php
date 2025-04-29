<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightPayOrderV2Request extends Model
{
    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $totalServiceFeePrice;
    protected $_name = [
        'isvName' => 'isv_name',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'totalPrice' => 'total_price',
        'totalServiceFeePrice' => 'total_service_fee_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->totalServiceFeePrice) {
            $res['total_service_fee_price'] = $this->totalServiceFeePrice;
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

        if (isset($map['total_service_fee_price'])) {
            $model->totalServiceFeePrice = $map['total_service_fee_price'];
        }

        return $model;
    }
}
