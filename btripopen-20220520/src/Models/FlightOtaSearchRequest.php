<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightOtaSearchRequest extends Model
{
    /**
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $carrierFlightNo;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $flightNo;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'arrCityCode' => 'arr_city_code',
        'cabinClass' => 'cabin_class',
        'carrierFlightNo' => 'carrier_flight_no',
        'depCityCode' => 'dep_city_code',
        'depDate' => 'dep_date',
        'flightNo' => 'flight_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }

        if (null !== $this->carrierFlightNo) {
            $res['carrier_flight_no'] = $this->carrierFlightNo;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
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
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }

        if (isset($map['carrier_flight_no'])) {
            $model->carrierFlightNo = $map['carrier_flight_no'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        return $model;
    }
}
