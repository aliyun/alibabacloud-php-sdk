<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightSearchListRequest extends Model
{
    /**
     * @example CA
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @description This parameter is required.
     *
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example BJS
     *
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $arrDate;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @description This parameter is required.
     *
     * @example HGH
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCityName;

    /**
     * @description This parameter is required.
     *
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $depDate;

    /**
     * @example CA2323
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $needMultiClassPrice;

    /**
     * @example HGH
     *
     * @var string
     */
    public $transferCityCode;

    /**
     * @example CA2323
     *
     * @var string
     */
    public $transferFlightNo;

    /**
     * @example BJS
     *
     * @var string
     */
    public $transferLeaveDate;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $tripType;
    protected $_name = [
        'airlineCode'         => 'airline_code',
        'arrCityCode'         => 'arr_city_code',
        'arrCityName'         => 'arr_city_name',
        'arrDate'             => 'arr_date',
        'cabinClass'          => 'cabin_class',
        'depCityCode'         => 'dep_city_code',
        'depCityName'         => 'dep_city_name',
        'depDate'             => 'dep_date',
        'flightNo'            => 'flight_no',
        'needMultiClassPrice' => 'need_multi_class_price',
        'transferCityCode'    => 'transfer_city_code',
        'transferFlightNo'    => 'transfer_flight_no',
        'transferLeaveDate'   => 'transfer_leave_date',
        'tripType'            => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->needMultiClassPrice) {
            $res['need_multi_class_price'] = $this->needMultiClassPrice;
        }
        if (null !== $this->transferCityCode) {
            $res['transfer_city_code'] = $this->transferCityCode;
        }
        if (null !== $this->transferFlightNo) {
            $res['transfer_flight_no'] = $this->transferFlightNo;
        }
        if (null !== $this->transferLeaveDate) {
            $res['transfer_leave_date'] = $this->transferLeaveDate;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightSearchListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['need_multi_class_price'])) {
            $model->needMultiClassPrice = $map['need_multi_class_price'];
        }
        if (isset($map['transfer_city_code'])) {
            $model->transferCityCode = $map['transfer_city_code'];
        }
        if (isset($map['transfer_flight_no'])) {
            $model->transferFlightNo = $map['transfer_flight_no'];
        }
        if (isset($map['transfer_leave_date'])) {
            $model->transferLeaveDate = $map['transfer_leave_date'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
