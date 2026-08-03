<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\dailyPrices\price;

class dailyPrices extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var price
     */
    public $price;
    protected $_name = [
        'date' => 'Date',
        'price' => 'Price',
    ];

    public function validate()
    {
        if (null !== $this->price) {
            $this->price->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toArray($noStream) : $this->price;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        return $model;
    }
}
