<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList\stopCityInfoList\stopAirportCityCounty;

class stopCityInfoList extends Model
{
    /**
     * @var stopAirportCityCounty
     */
    public $stopAirportCityCounty;

    /**
     * @var string
     */
    public $stopAirportCode;
    protected $_name = [
        'stopAirportCityCounty' => 'stop_airport_city_county',
        'stopAirportCode' => 'stop_airport_code',
    ];

    public function validate()
    {
        if (null !== $this->stopAirportCityCounty) {
            $this->stopAirportCityCounty->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stopAirportCityCounty) {
            $res['stop_airport_city_county'] = null !== $this->stopAirportCityCounty ? $this->stopAirportCityCounty->toArray($noStream) : $this->stopAirportCityCounty;
        }

        if (null !== $this->stopAirportCode) {
            $res['stop_airport_code'] = $this->stopAirportCode;
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
        if (isset($map['stop_airport_city_county'])) {
            $model->stopAirportCityCounty = stopAirportCityCounty::fromMap($map['stop_airport_city_county']);
        }

        if (isset($map['stop_airport_code'])) {
            $model->stopAirportCode = $map['stop_airport_code'];
        }

        return $model;
    }
}
