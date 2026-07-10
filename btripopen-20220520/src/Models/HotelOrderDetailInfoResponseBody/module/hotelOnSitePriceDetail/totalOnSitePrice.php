<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\hotelOnSitePriceDetail;

use AlibabaCloud\Dara\Model;

class totalOnSitePrice extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $foreignCurrency;

    /**
     * @var int
     */
    public $foreignPrice;

    /**
     * @var int
     */
    public $price;
    protected $_name = [
        'currency' => 'currency',
        'foreignCurrency' => 'foreign_currency',
        'foreignPrice' => 'foreign_price',
        'price' => 'price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->foreignCurrency) {
            $res['foreign_currency'] = $this->foreignCurrency;
        }

        if (null !== $this->foreignPrice) {
            $res['foreign_price'] = $this->foreignPrice;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['foreign_currency'])) {
            $model->foreignCurrency = $map['foreign_currency'];
        }

        if (isset($map['foreign_price'])) {
            $model->foreignPrice = $map['foreign_price'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        return $model;
    }
}
