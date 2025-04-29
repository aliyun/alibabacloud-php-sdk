<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList;

use AlibabaCloud\Dara\Model;

class changedPrice extends Model
{
    /**
     * @var int
     */
    public $buildPrice;

    /**
     * @var int
     */
    public $oilPrice;

    /**
     * @var int
     */
    public $taxPrice;

    /**
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'buildPrice' => 'build_price',
        'oilPrice' => 'oil_price',
        'taxPrice' => 'tax_price',
        'ticketPrice' => 'ticket_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }

        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }

        if (null !== $this->taxPrice) {
            $res['tax_price'] = $this->taxPrice;
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
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }

        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }

        if (isset($map['tax_price'])) {
            $model->taxPrice = $map['tax_price'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        return $model;
    }
}
