<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList\arrAirportCityCounty;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList\depAirportCityCounty;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList\stopCityInfoList;

class flightInfoList extends Model
{
    /**
     * @var string
     */
    public $airlineCode;

    /**
     * @var string
     */
    public $airlineName;

    /**
     * @var arrAirportCityCounty
     */
    public $arrAirportCityCounty;

    /**
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrAirportName;

    /**
     * @var string
     */
    public $arrCityAdCode;

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
    public $arrTerminal;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinLevel;

    /**
     * @var depAirportCityCounty
     */
    public $depAirportCityCounty;

    /**
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depAirportName;

    /**
     * @var string
     */
    public $depCityAdCode;

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
    public $depTerminal;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var int
     */
    public $flightMile;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @var string[]
     */
    public $stopCity;

    /**
     * @var stopCityInfoList[]
     */
    public $stopCityInfoList;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'airlineName' => 'airline_name',
        'arrAirportCityCounty' => 'arr_airport_city_county',
        'arrAirportCode' => 'arr_airport_code',
        'arrAirportName' => 'arr_airport_name',
        'arrCityAdCode' => 'arr_city_ad_code',
        'arrCityCode' => 'arr_city_code',
        'arrCityName' => 'arr_city_name',
        'arrTerminal' => 'arr_terminal',
        'arrTime' => 'arr_time',
        'cabin' => 'cabin',
        'cabinLevel' => 'cabin_level',
        'depAirportCityCounty' => 'dep_airport_city_county',
        'depAirportCode' => 'dep_airport_code',
        'depAirportName' => 'dep_airport_name',
        'depCityAdCode' => 'dep_city_ad_code',
        'depCityCode' => 'dep_city_code',
        'depCityName' => 'dep_city_name',
        'depTerminal' => 'dep_terminal',
        'depTime' => 'dep_time',
        'flightMile' => 'flight_mile',
        'flightNo' => 'flight_no',
        'journeyIndex' => 'journey_index',
        'segmentIndex' => 'segment_index',
        'stopCity' => 'stop_city',
        'stopCityInfoList' => 'stop_city_info_list',
    ];

    public function validate()
    {
        if (null !== $this->arrAirportCityCounty) {
            $this->arrAirportCityCounty->validate();
        }
        if (null !== $this->depAirportCityCounty) {
            $this->depAirportCityCounty->validate();
        }
        if (\is_array($this->stopCity)) {
            Model::validateArray($this->stopCity);
        }
        if (\is_array($this->stopCityInfoList)) {
            Model::validateArray($this->stopCityInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }

        if (null !== $this->airlineName) {
            $res['airline_name'] = $this->airlineName;
        }

        if (null !== $this->arrAirportCityCounty) {
            $res['arr_airport_city_county'] = null !== $this->arrAirportCityCounty ? $this->arrAirportCityCounty->toArray($noStream) : $this->arrAirportCityCounty;
        }

        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }

        if (null !== $this->arrAirportName) {
            $res['arr_airport_name'] = $this->arrAirportName;
        }

        if (null !== $this->arrCityAdCode) {
            $res['arr_city_ad_code'] = $this->arrCityAdCode;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }

        if (null !== $this->arrTerminal) {
            $res['arr_terminal'] = $this->arrTerminal;
        }

        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }

        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }

        if (null !== $this->cabinLevel) {
            $res['cabin_level'] = $this->cabinLevel;
        }

        if (null !== $this->depAirportCityCounty) {
            $res['dep_airport_city_county'] = null !== $this->depAirportCityCounty ? $this->depAirportCityCounty->toArray($noStream) : $this->depAirportCityCounty;
        }

        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }

        if (null !== $this->depAirportName) {
            $res['dep_airport_name'] = $this->depAirportName;
        }

        if (null !== $this->depCityAdCode) {
            $res['dep_city_ad_code'] = $this->depCityAdCode;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }

        if (null !== $this->depTerminal) {
            $res['dep_terminal'] = $this->depTerminal;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->flightMile) {
            $res['flight_mile'] = $this->flightMile;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        if (null !== $this->stopCity) {
            if (\is_array($this->stopCity)) {
                $res['stop_city'] = [];
                $n1 = 0;
                foreach ($this->stopCity as $item1) {
                    $res['stop_city'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stopCityInfoList) {
            if (\is_array($this->stopCityInfoList)) {
                $res['stop_city_info_list'] = [];
                $n1 = 0;
                foreach ($this->stopCityInfoList as $item1) {
                    $res['stop_city_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['airline_name'])) {
            $model->airlineName = $map['airline_name'];
        }

        if (isset($map['arr_airport_city_county'])) {
            $model->arrAirportCityCounty = arrAirportCityCounty::fromMap($map['arr_airport_city_county']);
        }

        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }

        if (isset($map['arr_airport_name'])) {
            $model->arrAirportName = $map['arr_airport_name'];
        }

        if (isset($map['arr_city_ad_code'])) {
            $model->arrCityAdCode = $map['arr_city_ad_code'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }

        if (isset($map['arr_terminal'])) {
            $model->arrTerminal = $map['arr_terminal'];
        }

        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }

        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }

        if (isset($map['cabin_level'])) {
            $model->cabinLevel = $map['cabin_level'];
        }

        if (isset($map['dep_airport_city_county'])) {
            $model->depAirportCityCounty = depAirportCityCounty::fromMap($map['dep_airport_city_county']);
        }

        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }

        if (isset($map['dep_airport_name'])) {
            $model->depAirportName = $map['dep_airport_name'];
        }

        if (isset($map['dep_city_ad_code'])) {
            $model->depCityAdCode = $map['dep_city_ad_code'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }

        if (isset($map['dep_terminal'])) {
            $model->depTerminal = $map['dep_terminal'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['flight_mile'])) {
            $model->flightMile = $map['flight_mile'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        if (isset($map['stop_city'])) {
            if (!empty($map['stop_city'])) {
                $model->stopCity = [];
                $n1 = 0;
                foreach ($map['stop_city'] as $item1) {
                    $model->stopCity[$n1++] = $item1;
                }
            }
        }

        if (isset($map['stop_city_info_list'])) {
            if (!empty($map['stop_city_info_list'])) {
                $model->stopCityInfoList = [];
                $n1 = 0;
                foreach ($map['stop_city_info_list'] as $item1) {
                    $model->stopCityInfoList[$n1++] = stopCityInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
