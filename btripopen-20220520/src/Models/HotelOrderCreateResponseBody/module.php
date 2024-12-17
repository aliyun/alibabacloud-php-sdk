<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @var string
     */
    public $paymentNo;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'btripOrderId' => 'btrip_order_id',
        'paymentNo'    => 'payment_no',
        'totalPrice'   => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->paymentNo) {
            $res['payment_no'] = $this->paymentNo;
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
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['payment_no'])) {
            $model->paymentNo = $map['payment_no'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}
