<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itineraryList;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelAvailableNightsPerDay) {
            $res['hotel_available_nights_per_day'] = $this->hotelAvailableNightsPerDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itineraryTravelStandard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotel_available_nights_per_day'])) {
            $model->hotelAvailableNightsPerDay = $map['hotel_available_nights_per_day'];
        }

        return $model;
    }
}
