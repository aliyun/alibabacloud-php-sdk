<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody\module\hotelAskingPriceDetails;

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
        if (\is_array($this->hotelAskingPriceDetails)) {
            Model::validateArray($this->hotelAskingPriceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelAskingPriceDetails) {
            if (\is_array($this->hotelAskingPriceDetails)) {
                $res['hotel_asking_price_details'] = [];
                $n1 = 0;
                foreach ($this->hotelAskingPriceDetails as $item1) {
                    $res['hotel_asking_price_details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['hotel_asking_price_details'])) {
            if (!empty($map['hotel_asking_price_details'])) {
                $model->hotelAskingPriceDetails = [];
                $n1 = 0;
                foreach ($map['hotel_asking_price_details'] as $item1) {
                    $model->hotelAskingPriceDetails[$n1++] = hotelAskingPriceDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
