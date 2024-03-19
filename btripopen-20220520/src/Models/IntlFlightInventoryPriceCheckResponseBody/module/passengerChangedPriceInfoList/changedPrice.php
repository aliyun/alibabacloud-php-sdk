<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckResponseBody\module\passengerChangedPriceInfoList;

use AlibabaCloud\Tea\Model;

class changedPrice extends Model
{
    /**
     * @example 9000
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @example 5000
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @example 12000
     *
     * @var int
     */
    public $taxPrice;

    /**
     * @example 90000
     *
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'buildPrice'  => 'build_price',
        'oilPrice'    => 'oil_price',
        'taxPrice'    => 'tax_price',
        'ticketPrice' => 'ticket_price',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return changedPrice
     */
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
