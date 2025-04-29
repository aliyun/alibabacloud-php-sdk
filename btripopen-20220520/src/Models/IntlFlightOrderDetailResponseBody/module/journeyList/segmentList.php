<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\flightOtherInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\luggageDirectInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\marketingAirlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\operatingAirlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\segmentVisaRemark;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList\stopCityList;

class segmentList extends Model
{
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
     * @var bool
     */
    public $codeShare;

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
     * @var flightOtherInfo
     */
    public $flightOtherInfo;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var luggageDirectInfo
     */
    public $luggageDirectInfo;

    /**
     * @var string
     */
    public $marketingAirline;

    /**
     * @var marketingAirlineInfo
     */
    public $marketingAirlineInfo;

    /**
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @var string
     */
    public $operatingAirline;

    /**
     * @var operatingAirlineInfo
     */
    public $operatingAirlineInfo;

    /**
     * @var string
     */
    public $operatingFlightNo;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @var string
     */
    public $segmentKey;

    /**
     * @var segmentVisaRemark
     */
    public $segmentVisaRemark;

    /**
     * @var stopCityList[]
     */
    public $stopCityList;

    /**
     * @var int
     */
    public $stopQuantity;
    protected $_name = [
        'arrAirportCode' => 'arr_airport_code',
        'arrAirportName' => 'arr_airport_name',
        'arrCityCode' => 'arr_city_code',
        'arrCityName' => 'arr_city_name',
        'arrTerminal' => 'arr_terminal',
        'arrTime' => 'arr_time',
        'codeShare' => 'code_share',
        'depAirportCode' => 'dep_airport_code',
        'depAirportName' => 'dep_airport_name',
        'depCityCode' => 'dep_city_code',
        'depCityName' => 'dep_city_name',
        'depTerminal' => 'dep_terminal',
        'depTime' => 'dep_time',
        'flightOtherInfo' => 'flight_other_info',
        'journeyIndex' => 'journey_index',
        'luggageDirectInfo' => 'luggage_direct_info',
        'marketingAirline' => 'marketing_airline',
        'marketingAirlineInfo' => 'marketing_airline_info',
        'marketingFlightNo' => 'marketing_flight_no',
        'operatingAirline' => 'operating_airline',
        'operatingAirlineInfo' => 'operating_airline_info',
        'operatingFlightNo' => 'operating_flight_no',
        'segmentIndex' => 'segment_index',
        'segmentKey' => 'segment_key',
        'segmentVisaRemark' => 'segment_visa_remark',
        'stopCityList' => 'stop_city_list',
        'stopQuantity' => 'stop_quantity',
    ];

    public function validate()
    {
        if (null !== $this->flightOtherInfo) {
            $this->flightOtherInfo->validate();
        }
        if (null !== $this->luggageDirectInfo) {
            $this->luggageDirectInfo->validate();
        }
        if (null !== $this->marketingAirlineInfo) {
            $this->marketingAirlineInfo->validate();
        }
        if (null !== $this->operatingAirlineInfo) {
            $this->operatingAirlineInfo->validate();
        }
        if (null !== $this->segmentVisaRemark) {
            $this->segmentVisaRemark->validate();
        }
        if (\is_array($this->stopCityList)) {
            Model::validateArray($this->stopCityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }

        if (null !== $this->arrAirportName) {
            $res['arr_airport_name'] = $this->arrAirportName;
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

        if (null !== $this->codeShare) {
            $res['code_share'] = $this->codeShare;
        }

        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }

        if (null !== $this->depAirportName) {
            $res['dep_airport_name'] = $this->depAirportName;
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

        if (null !== $this->flightOtherInfo) {
            $res['flight_other_info'] = null !== $this->flightOtherInfo ? $this->flightOtherInfo->toArray($noStream) : $this->flightOtherInfo;
        }

        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->luggageDirectInfo) {
            $res['luggage_direct_info'] = null !== $this->luggageDirectInfo ? $this->luggageDirectInfo->toArray($noStream) : $this->luggageDirectInfo;
        }

        if (null !== $this->marketingAirline) {
            $res['marketing_airline'] = $this->marketingAirline;
        }

        if (null !== $this->marketingAirlineInfo) {
            $res['marketing_airline_info'] = null !== $this->marketingAirlineInfo ? $this->marketingAirlineInfo->toArray($noStream) : $this->marketingAirlineInfo;
        }

        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }

        if (null !== $this->operatingAirline) {
            $res['operating_airline'] = $this->operatingAirline;
        }

        if (null !== $this->operatingAirlineInfo) {
            $res['operating_airline_info'] = null !== $this->operatingAirlineInfo ? $this->operatingAirlineInfo->toArray($noStream) : $this->operatingAirlineInfo;
        }

        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
        }

        if (null !== $this->segmentVisaRemark) {
            $res['segment_visa_remark'] = null !== $this->segmentVisaRemark ? $this->segmentVisaRemark->toArray($noStream) : $this->segmentVisaRemark;
        }

        if (null !== $this->stopCityList) {
            if (\is_array($this->stopCityList)) {
                $res['stop_city_list'] = [];
                $n1 = 0;
                foreach ($this->stopCityList as $item1) {
                    $res['stop_city_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->stopQuantity) {
            $res['stop_quantity'] = $this->stopQuantity;
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
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }

        if (isset($map['arr_airport_name'])) {
            $model->arrAirportName = $map['arr_airport_name'];
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

        if (isset($map['code_share'])) {
            $model->codeShare = $map['code_share'];
        }

        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }

        if (isset($map['dep_airport_name'])) {
            $model->depAirportName = $map['dep_airport_name'];
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

        if (isset($map['flight_other_info'])) {
            $model->flightOtherInfo = flightOtherInfo::fromMap($map['flight_other_info']);
        }

        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['luggage_direct_info'])) {
            $model->luggageDirectInfo = luggageDirectInfo::fromMap($map['luggage_direct_info']);
        }

        if (isset($map['marketing_airline'])) {
            $model->marketingAirline = $map['marketing_airline'];
        }

        if (isset($map['marketing_airline_info'])) {
            $model->marketingAirlineInfo = marketingAirlineInfo::fromMap($map['marketing_airline_info']);
        }

        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }

        if (isset($map['operating_airline'])) {
            $model->operatingAirline = $map['operating_airline'];
        }

        if (isset($map['operating_airline_info'])) {
            $model->operatingAirlineInfo = operatingAirlineInfo::fromMap($map['operating_airline_info']);
        }

        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        if (isset($map['segment_visa_remark'])) {
            $model->segmentVisaRemark = segmentVisaRemark::fromMap($map['segment_visa_remark']);
        }

        if (isset($map['stop_city_list'])) {
            if (!empty($map['stop_city_list'])) {
                $model->stopCityList = [];
                $n1 = 0;
                foreach ($map['stop_city_list'] as $item1) {
                    $model->stopCityList[$n1++] = stopCityList::fromMap($item1);
                }
            }
        }

        if (isset($map['stop_quantity'])) {
            $model->stopQuantity = $map['stop_quantity'];
        }

        return $model;
    }
}
