<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Dara\Model;

class luggageDirectInfo extends Model
{
    /**
     * @var int
     */
    public $depCityLuggageDirect;

    /**
     * @var int
     */
    public $stopCityLuggageDirect;
    protected $_name = [
        'depCityLuggageDirect' => 'dep_city_luggage_direct',
        'stopCityLuggageDirect' => 'stop_city_luggage_direct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
