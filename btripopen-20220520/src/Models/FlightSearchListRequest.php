<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightSearchListRequest extends Model
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
    public $arrCityName;

    /**
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var bool
     */
    public $needMultiClassPrice;

    /**
     * @var string
     */
    public $transferCityCode;

    /**
     * @var string
     */
    public $transferFlightNo;

    /**
     * @var string
     */
    public $transferLeaveDate;

    /**
     * @var string
     */
    public $tripType;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'arrCityCode' => 'arr_city_code',
        'arrCityName' => 'arr_city_name',
        'arrDate' => 'arr_date',
        'cabinClass' => 'cabin_class',
        'depCityCode' => 'dep_city_code',
        'depCityName' => 'dep_city_name',
        'depDate' => 'dep_date',
        'flightNo' => 'flight_no',
        'needMultiClassPrice' => 'need_multi_class_price',
        'transferCityCode' => 'transfer_city_code',
        'transferFlightNo' => 'transfer_flight_no',
        'transferLeaveDate' => 'transfer_leave_date',
        'tripType' => 'trip_type',
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
