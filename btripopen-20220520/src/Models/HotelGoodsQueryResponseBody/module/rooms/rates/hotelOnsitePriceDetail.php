<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\hotelOnsitePriceDetail\avgOnsitePrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\hotelOnsitePriceDetail\dailyOnsitePrice;

class hotelOnsitePriceDetail extends Model
{
    /**
     * @var avgOnsitePrice
     */
    public $avgOnsitePrice;

    /**
     * @var dailyOnsitePrice[]
     */
    public $dailyOnsitePrice;
    protected $_name = [
        'avgOnsitePrice' => 'avg_onsite_price',
        'dailyOnsitePrice' => 'daily_onsite_price',
    ];

    public function validate()
    {
        if (null !== $this->avgOnsitePrice) {
            $this->avgOnsitePrice->validate();
        }
        if (\is_array($this->dailyOnsitePrice)) {
            Model::validateArray($this->dailyOnsitePrice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgOnsitePrice) {
            $res['avg_onsite_price'] = null !== $this->avgOnsitePrice ? $this->avgOnsitePrice->toArray($noStream) : $this->avgOnsitePrice;
        }

        if (null !== $this->dailyOnsitePrice) {
            if (\is_array($this->dailyOnsitePrice)) {
                $res['daily_onsite_price'] = [];
                $n1 = 0;
                foreach ($this->dailyOnsitePrice as $item1) {
                    $res['daily_onsite_price'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['avg_onsite_price'])) {
            $model->avgOnsitePrice = avgOnsitePrice::fromMap($map['avg_onsite_price']);
        }

        if (isset($map['daily_onsite_price'])) {
            if (!empty($map['daily_onsite_price'])) {
                $model->dailyOnsitePrice = [];
                $n1 = 0;
                foreach ($map['daily_onsite_price'] as $item1) {
                    $model->dailyOnsitePrice[$n1] = dailyOnsitePrice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
