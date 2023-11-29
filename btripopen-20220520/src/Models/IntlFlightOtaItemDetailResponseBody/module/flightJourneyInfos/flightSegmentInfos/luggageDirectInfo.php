<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Tea\Model;

class luggageDirectInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $depCityLuggageDirect;

    /**
     * @example 0
     *
     * @var int
     */
    public $stopCityLuggageDirect;
    protected $_name = [
        'depCityLuggageDirect'  => 'dep_city_luggage_direct',
        'stopCityLuggageDirect' => 'stop_city_luggage_direct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depCityLuggageDirect) {
            $res['dep_city_luggage_direct'] = $this->depCityLuggageDirect;
        }
        if (null !== $this->stopCityLuggageDirect) {
            $res['stop_city_luggage_direct'] = $this->stopCityLuggageDirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return luggageDirectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dep_city_luggage_direct'])) {
            $model->depCityLuggageDirect = $map['dep_city_luggage_direct'];
        }
        if (isset($map['stop_city_luggage_direct'])) {
            $model->stopCityLuggageDirect = $map['stop_city_luggage_direct'];
        }

        return $model;
    }
}
