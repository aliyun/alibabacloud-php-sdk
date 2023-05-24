<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody\module\hotelAskingPriceDetails;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var hotelAskingPriceDetails[]
     */
    public $hotelAskingPriceDetails;
    protected $_name = [
        'hotelAskingPriceDetails' => 'hotel_asking_price_details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelAskingPriceDetails) {
            $res['hotel_asking_price_details'] = [];
            if (null !== $this->hotelAskingPriceDetails && \is_array($this->hotelAskingPriceDetails)) {
                $n = 0;
                foreach ($this->hotelAskingPriceDetails as $item) {
                    $res['hotel_asking_price_details'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['hotel_asking_price_details'])) {
            if (!empty($map['hotel_asking_price_details'])) {
                $model->hotelAskingPriceDetails = [];
                $n                              = 0;
                foreach ($map['hotel_asking_price_details'] as $item) {
                    $model->hotelAskingPriceDetails[$n++] = null !== $item ? hotelAskingPriceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
