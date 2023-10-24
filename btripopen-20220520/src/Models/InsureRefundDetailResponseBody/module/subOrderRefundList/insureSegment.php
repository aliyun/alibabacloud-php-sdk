<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\subOrderRefundList;

use AlibabaCloud\Tea\Model;

class insureSegment extends Model
{
    /**
     * @example WHA
     *
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example YTY
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example 2023-05-27 23:00:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example NGB
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example 2023-05-27 20:30:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @example CZ3501
     *
     * @var string
     */
    public $flightNo;
    protected $_name = [
        'arrAirportCode' => 'arr_airport_code',
        'arrCity'        => 'arr_city',
        'arrCityCode'    => 'arr_city_code',
        'arrTime'        => 'arr_time',
        'depAirportCode' => 'dep_airport_code',
        'depCity'        => 'dep_city',
        'depCityCode'    => 'dep_city_code',
        'depTime'        => 'dep_time',
        'flightNo'       => 'flight_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insureSegment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        return $model;
    }
}
