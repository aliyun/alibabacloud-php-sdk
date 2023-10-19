<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelPriceInfos) {
            $res['hotel_price_infos'] = [];
            if (null !== $this->hotelPriceInfos && \is_array($this->hotelPriceInfos)) {
                $n = 0;
                foreach ($this->hotelPriceInfos as $item) {
                    $res['hotel_price_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_price_infos'])) {
            if (!empty($map['hotel_price_infos'])) {
                $model->hotelPriceInfos = [];
                $n                      = 0;
                foreach ($map['hotel_price_infos'] as $item) {
                    $model->hotelPriceInfos[$n++] = null !== $item ? hotelPriceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
