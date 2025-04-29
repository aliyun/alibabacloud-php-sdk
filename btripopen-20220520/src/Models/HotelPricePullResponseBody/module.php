<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos;

class module extends Model
{
    /**
     * @var hotelPriceInfos[]
     */
    public $hotelPriceInfos;
    protected $_name = [
        'hotelPriceInfos' => 'hotel_price_infos',
    ];

    public function validate()
    {
        if (\is_array($this->hotelPriceInfos)) {
            Model::validateArray($this->hotelPriceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelPriceInfos) {
            if (\is_array($this->hotelPriceInfos)) {
                $res['hotel_price_infos'] = [];
                $n1 = 0;
                foreach ($this->hotelPriceInfos as $item1) {
                    $res['hotel_price_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['hotel_price_infos'])) {
            if (!empty($map['hotel_price_infos'])) {
                $model->hotelPriceInfos = [];
                $n1 = 0;
                foreach ($map['hotel_price_infos'] as $item1) {
                    $model->hotelPriceInfos[$n1++] = hotelPriceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
