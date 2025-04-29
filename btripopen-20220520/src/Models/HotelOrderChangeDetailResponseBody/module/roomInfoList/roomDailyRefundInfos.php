<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody\module\roomInfoList;

use AlibabaCloud\Dara\Model;

class roomDailyRefundInfos extends Model
{
    /**
     * @var string
     */
    public $checkInDate;

    /**
     * @var int
     */
    public $penaltyPrice;

    /**
     * @var int
     */
    public $price;

    /**
     * @var int
     */
    public $refundPrice;
    protected $_name = [
        'checkInDate' => 'check_in_date',
        'penaltyPrice' => 'penalty_price',
        'price' => 'price',
        'refundPrice' => 'refund_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInDate) {
            $res['check_in_date'] = $this->checkInDate;
        }

        if (null !== $this->penaltyPrice) {
            $res['penalty_price'] = $this->penaltyPrice;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
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
        if (isset($map['check_in_date'])) {
            $model->checkInDate = $map['check_in_date'];
        }

        if (isset($map['penalty_price'])) {
            $model->penaltyPrice = $map['penalty_price'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }

        return $model;
    }
}
