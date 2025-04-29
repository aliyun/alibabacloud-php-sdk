<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList;

use AlibabaCloud\Dara\Model;

class arrAirportCityCounty extends Model
{
    /**
     * @var string
     */
    public $adcode;

    /**
     * @var string
     */
    public $airportCityCode;

    /**
     * @var string
     */
    public $airportCityName;

    /**
     * @var string
     */
    public $airportCode;

    /**
     * @var string
     */
    public $airportName;

    /**
     * @var string
     */
    public $airportParentCityName;

    /**
     * @var string
     */
    public $countyCityAdcode;

    /**
     * @var string
     */
    public $countyCityName;

    /**
     * @var string
     */
    public $prefectureCityAdcode;

    /**
     * @var string
     */
    public $prefectureCityName;
    protected $_name = [
        'adcode' => 'adcode',
        'airportCityCode' => 'airport_city_code',
        'airportCityName' => 'airport_city_name',
        'airportCode' => 'airport_code',
        'airportName' => 'airport_name',
        'airportParentCityName' => 'airport_parent_city_name',
        'countyCityAdcode' => 'county_city_adcode',
        'countyCityName' => 'county_city_name',
        'prefectureCityAdcode' => 'prefecture_city_adcode',
        'prefectureCityName' => 'prefecture_city_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adcode) {
            $res['adcode'] = $this->adcode;
        }

        if (null !== $this->airportCityCode) {
            $res['airport_city_code'] = $this->airportCityCode;
        }

        if (null !== $this->airportCityName) {
            $res['airport_city_name'] = $this->airportCityName;
        }

        if (null !== $this->airportCode) {
            $res['airport_code'] = $this->airportCode;
        }

        if (null !== $this->airportName) {
            $res['airport_name'] = $this->airportName;
        }

        if (null !== $this->airportParentCityName) {
            $res['airport_parent_city_name'] = $this->airportParentCityName;
        }

        if (null !== $this->countyCityAdcode) {
            $res['county_city_adcode'] = $this->countyCityAdcode;
        }

        if (null !== $this->countyCityName) {
            $res['county_city_name'] = $this->countyCityName;
        }

        if (null !== $this->prefectureCityAdcode) {
            $res['prefecture_city_adcode'] = $this->prefectureCityAdcode;
        }

        if (null !== $this->prefectureCityName) {
            $res['prefecture_city_name'] = $this->prefectureCityName;
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
        if (isset($map['adcode'])) {
            $model->adcode = $map['adcode'];
        }

        if (isset($map['airport_city_code'])) {
            $model->airportCityCode = $map['airport_city_code'];
        }

        if (isset($map['airport_city_name'])) {
            $model->airportCityName = $map['airport_city_name'];
        }

        if (isset($map['airport_code'])) {
            $model->airportCode = $map['airport_code'];
        }

        if (isset($map['airport_name'])) {
            $model->airportName = $map['airport_name'];
        }

        if (isset($map['airport_parent_city_name'])) {
            $model->airportParentCityName = $map['airport_parent_city_name'];
        }

        if (isset($map['county_city_adcode'])) {
            $model->countyCityAdcode = $map['county_city_adcode'];
        }

        if (isset($map['county_city_name'])) {
            $model->countyCityName = $map['county_city_name'];
        }

        if (isset($map['prefecture_city_adcode'])) {
            $model->prefectureCityAdcode = $map['prefecture_city_adcode'];
        }

        if (isset($map['prefecture_city_name'])) {
            $model->prefectureCityName = $map['prefecture_city_name'];
        }

        return $model;
    }
}
