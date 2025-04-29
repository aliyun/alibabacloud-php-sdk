<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\segmentPriceList;

use AlibabaCloud\Dara\Model;

class searchPrice extends Model
{
    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var int
     */
    public $sellPrice;

    /**
     * @var int
     */
    public $tax;
    protected $_name = [
        'ticketPrice' => 'ticket_price',
        'sellPrice' => 'sell_price',
        'tax' => 'tax',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }

        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }

        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
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
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }

        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }

        return $model;
    }
}
