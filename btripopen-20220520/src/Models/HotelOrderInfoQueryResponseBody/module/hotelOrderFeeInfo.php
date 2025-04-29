<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class hotelOrderFeeInfo extends Model
{
    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var int
     */
    public $otherFee;

    /**
     * @var int
     */
    public $payAmount;

    /**
     * @var int
     */
    public $promotionAmount;

    /**
     * @var int
     */
    public $totalRoomAmount;
    protected $_name = [
        'orderAmount' => 'order_amount',
        'otherFee' => 'other_fee',
        'payAmount' => 'pay_amount',
        'promotionAmount' => 'promotion_amount',
        'totalRoomAmount' => 'total_room_amount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderAmount) {
            $res['order_amount'] = $this->orderAmount;
        }

        if (null !== $this->otherFee) {
            $res['other_fee'] = $this->otherFee;
        }

        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }

        if (null !== $this->promotionAmount) {
            $res['promotion_amount'] = $this->promotionAmount;
        }

        if (null !== $this->totalRoomAmount) {
            $res['total_room_amount'] = $this->totalRoomAmount;
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
        if (isset($map['order_amount'])) {
            $model->orderAmount = $map['order_amount'];
        }

        if (isset($map['other_fee'])) {
            $model->otherFee = $map['other_fee'];
        }

        if (isset($map['pay_amount'])) {
            $model->payAmount = $map['pay_amount'];
        }

        if (isset($map['promotion_amount'])) {
            $model->promotionAmount = $map['promotion_amount'];
        }

        if (isset($map['total_room_amount'])) {
            $model->totalRoomAmount = $map['total_room_amount'];
        }

        return $model;
    }
}
