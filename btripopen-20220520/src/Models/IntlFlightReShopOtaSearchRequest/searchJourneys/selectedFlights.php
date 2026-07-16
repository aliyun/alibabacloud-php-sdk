<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchRequest\searchJourneys;

use AlibabaCloud\Dara\Model;

class selectedFlights extends Model
{
    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $flightTime;

    /**
     * @var string
     */
    public $marketFlightNo;
    protected $_name = [
        'arrCityCode' => 'arr_city_code',
        'depCityCode' => 'dep_city_code',
        'flightTime' => 'flight_time',
        'marketFlightNo' => 'market_flight_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->flightTime) {
            $res['flight_time'] = $this->flightTime;
        }

        if (null !== $this->marketFlightNo) {
            $res['market_flight_no'] = $this->marketFlightNo;
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
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['flight_time'])) {
            $model->flightTime = $map['flight_time'];
        }

        if (isset($map['market_flight_no'])) {
            $model->marketFlightNo = $map['market_flight_no'];
        }

        return $model;
    }
}
