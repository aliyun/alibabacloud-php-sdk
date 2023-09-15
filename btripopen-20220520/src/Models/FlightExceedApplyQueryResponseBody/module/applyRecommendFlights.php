<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightExceedApplyQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class applyRecommendFlights extends Model
{
    /**
     * @var string
     */
    public $arrAirportName;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var int
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassStr;

    /**
     * @var string
     */
    public $depAirportName;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $discount;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $transferAirportName;
    protected $_name = [
        'arrAirportName'      => 'arr_airport_name',
        'arrCityName'         => 'arr_city_name',
        'arrTime'             => 'arr_time',
        'cabin'               => 'cabin',
        'cabinClass'          => 'cabin_class',
        'cabinClassStr'       => 'cabin_class_str',
        'depAirportName'      => 'dep_airport_name',
        'depCityName'         => 'dep_city_name',
        'depTime'             => 'dep_time',
        'discount'            => 'discount',
        'flightNo'            => 'flight_no',
        'price'               => 'price',
        'transferAirportName' => 'transfer_airport_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrAirportName) {
            $res['arr_airport_name'] = $this->arrAirportName;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassStr) {
            $res['cabin_class_str'] = $this->cabinClassStr;
        }
        if (null !== $this->depAirportName) {
            $res['dep_airport_name'] = $this->depAirportName;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->transferAirportName) {
            $res['transfer_airport_name'] = $this->transferAirportName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyRecommendFlights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_airport_name'])) {
            $model->arrAirportName = $map['arr_airport_name'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_str'])) {
            $model->cabinClassStr = $map['cabin_class_str'];
        }
        if (isset($map['dep_airport_name'])) {
            $model->depAirportName = $map['dep_airport_name'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['transfer_airport_name'])) {
            $model->transferAirportName = $map['transfer_airport_name'];
        }

        return $model;
    }
}
