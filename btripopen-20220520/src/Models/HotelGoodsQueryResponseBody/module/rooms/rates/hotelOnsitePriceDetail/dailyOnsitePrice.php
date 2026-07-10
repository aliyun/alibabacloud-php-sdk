<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\hotelOnsitePriceDetail;

use AlibabaCloud\Dara\Model;

class dailyOnsitePrice extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $day;

    /**
     * @var string
     */
    public $foreignCurrency;

    /**
     * @var int
     */
    public $foreignPriceCent;

    /**
     * @var int
     */
    public $priceCent;
    protected $_name = [
        'currency' => 'currency',
        'day' => 'day',
        'foreignCurrency' => 'foreign_currency',
        'foreignPriceCent' => 'foreign_price_cent',
        'priceCent' => 'price_cent',
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

        if (null !== $this->day) {
            $res['day'] = $this->day;
        }

        if (null !== $this->foreignCurrency) {
            $res['foreign_currency'] = $this->foreignCurrency;
        }

        if (null !== $this->foreignPriceCent) {
            $res['foreign_price_cent'] = $this->foreignPriceCent;
        }

        if (null !== $this->priceCent) {
            $res['price_cent'] = $this->priceCent;
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

        if (isset($map['day'])) {
            $model->day = $map['day'];
        }

        if (isset($map['foreign_currency'])) {
            $model->foreignCurrency = $map['foreign_currency'];
        }

        if (isset($map['foreign_price_cent'])) {
            $model->foreignPriceCent = $map['foreign_price_cent'];
        }

        if (isset($map['price_cent'])) {
            $model->priceCent = $map['price_cent'];
        }

        return $model;
    }
}
