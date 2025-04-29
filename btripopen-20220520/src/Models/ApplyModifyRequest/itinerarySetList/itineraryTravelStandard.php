<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\itinerarySetList;

use AlibabaCloud\Dara\Model;

class itineraryTravelStandard extends Model
{
    /**
     * @var int
     */
    public $hotelAvailableNightsPerDay;
    protected $_name = [
        'hotelAvailableNightsPerDay' => 'hotel_available_nights_per_day',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelAvailableNightsPerDay) {
            $res['hotel_available_nights_per_day'] = $this->hotelAvailableNightsPerDay;
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
        if (isset($map['hotel_available_nights_per_day'])) {
            $model->hotelAvailableNightsPerDay = $map['hotel_available_nights_per_day'];
        }

        return $model;
    }
}
