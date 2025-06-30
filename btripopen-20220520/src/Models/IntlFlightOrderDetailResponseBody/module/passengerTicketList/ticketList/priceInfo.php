<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerTicketList\ticketList;

use AlibabaCloud\Dara\Model;

class priceInfo extends Model
{
    /**
     * @var int
     */
    public $sellPrice;

    /**
     * @var int
     */
    public $tax;

    /**
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'sellPrice' => 'sell_price',
        'tax' => 'tax',
        'ticketPrice' => 'ticket_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }

        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
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
        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }

        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        return $model;
    }
}
