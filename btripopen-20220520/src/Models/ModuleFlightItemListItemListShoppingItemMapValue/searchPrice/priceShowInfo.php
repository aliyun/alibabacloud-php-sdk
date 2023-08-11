<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListItemListShoppingItemMapValue\searchPrice;

use AlibabaCloud\Tea\Model;

class priceShowInfo extends Model
{
    /**
     * @var string
     */
    public $discountInfo;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $discountNum;

    /**
     * @example false
     *
     * @var bool
     */
    public $showTicketPrice;
    protected $_name = [
        'discountInfo'    => 'discount_info',
        'discountNum'     => 'discount_num',
        'showTicketPrice' => 'show_ticket_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountInfo) {
            $res['discount_info'] = $this->discountInfo;
        }
        if (null !== $this->discountNum) {
            $res['discount_num'] = $this->discountNum;
        }
        if (null !== $this->showTicketPrice) {
            $res['show_ticket_price'] = $this->showTicketPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceShowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['discount_info'])) {
            $model->discountInfo = $map['discount_info'];
        }
        if (isset($map['discount_num'])) {
            $model->discountNum = $map['discount_num'];
        }
        if (isset($map['show_ticket_price'])) {
            $model->showTicketPrice = $map['show_ticket_price'];
        }

        return $model;
    }
}
