<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\lowestCabinPrice;

class flightInfoList extends Model
{
    /**
     * @var airlineInfo
     */
    public $airlineInfo;

    /**
     * @var arrAirportInfo
     */
    public $arrAirportInfo;

    /**
     * @var cabinList[]
     */
    public $cabinList;

    /**
     * @var string
     */
    public $carrierAirline;

    /**
     * @var string
     */
    public $carrierNo;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var bool
     */
    public $isShare;

    /**
     * @var string
     */
    public $lowestCabin;

    /**
     * @var string
     */
    public $lowestCabinClass;

    /**
     * @var string
     */
    public $lowestCabinDesc;

    /**
     * @var string
     */
    public $lowestCabinNum;

    /**
     * @var lowestCabinPrice[]
     */
    public $lowestCabinPrice;

    /**
     * @var string
     */
    public $modifyFlightArrTime;

    /**
     * @var string
     */
    public $modifyFlightDepDate;

    /**
     * @var string
     */
    public $modifyFlightDepTime;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'airlineInfo' => 'airline_info',
        'arrAirportInfo' => 'arr_airport_info',
        'cabinList' => 'cabin_list',
        'carrierAirline' => 'carrier_airline',
        'carrierNo' => 'carrier_no',
        'depAirportInfo' => 'dep_airport_info',
        'depCityCode' => 'dep_city_code',
        'flightNo' => 'flight_no',
        'isShare' => 'is_share',
        'lowestCabin' => 'lowest_cabin',
        'lowestCabinClass' => 'lowest_cabin_class',
        'lowestCabinDesc' => 'lowest_cabin_desc',
        'lowestCabinNum' => 'lowest_cabin_num',
        'lowestCabinPrice' => 'lowest_cabin_price',
        'modifyFlightArrTime' => 'modify_flight_arr_time',
        'modifyFlightDepDate' => 'modify_flight_dep_date',
        'modifyFlightDepTime' => 'modify_flight_dep_time',
        'sessionId' => 'session_id',
    ];

    public function validate()
    {
        if (null !== $this->airlineInfo) {
            $this->airlineInfo->validate();
        }
        if (null !== $this->arrAirportInfo) {
            $this->arrAirportInfo->validate();
        }
        if (\is_array($this->cabinList)) {
            Model::validateArray($this->cabinList);
        }
        if (null !== $this->depAirportInfo) {
            $this->depAirportInfo->validate();
        }
        if (\is_array($this->lowestCabinPrice)) {
            Model::validateArray($this->lowestCabinPrice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airlineInfo) {
            $res['airline_info'] = null !== $this->airlineInfo ? $this->airlineInfo->toArray($noStream) : $this->airlineInfo;
        }

        if (null !== $this->arrAirportInfo) {
            $res['arr_airport_info'] = null !== $this->arrAirportInfo ? $this->arrAirportInfo->toArray($noStream) : $this->arrAirportInfo;
        }

        if (null !== $this->cabinList) {
            if (\is_array($this->cabinList)) {
                $res['cabin_list'] = [];
                $n1 = 0;
                foreach ($this->cabinList as $item1) {
                    $res['cabin_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->carrierAirline) {
            $res['carrier_airline'] = $this->carrierAirline;
        }

        if (null !== $this->carrierNo) {
            $res['carrier_no'] = $this->carrierNo;
        }

        if (null !== $this->depAirportInfo) {
            $res['dep_airport_info'] = null !== $this->depAirportInfo ? $this->depAirportInfo->toArray($noStream) : $this->depAirportInfo;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->isShare) {
            $res['is_share'] = $this->isShare;
        }

        if (null !== $this->lowestCabin) {
            $res['lowest_cabin'] = $this->lowestCabin;
        }

        if (null !== $this->lowestCabinClass) {
            $res['lowest_cabin_class'] = $this->lowestCabinClass;
        }

        if (null !== $this->lowestCabinDesc) {
            $res['lowest_cabin_desc'] = $this->lowestCabinDesc;
        }

        if (null !== $this->lowestCabinNum) {
            $res['lowest_cabin_num'] = $this->lowestCabinNum;
        }

        if (null !== $this->lowestCabinPrice) {
            if (\is_array($this->lowestCabinPrice)) {
                $res['lowest_cabin_price'] = [];
                $n1 = 0;
                foreach ($this->lowestCabinPrice as $item1) {
                    $res['lowest_cabin_price'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modifyFlightArrTime) {
            $res['modify_flight_arr_time'] = $this->modifyFlightArrTime;
        }

        if (null !== $this->modifyFlightDepDate) {
            $res['modify_flight_dep_date'] = $this->modifyFlightDepDate;
        }

        if (null !== $this->modifyFlightDepTime) {
            $res['modify_flight_dep_time'] = $this->modifyFlightDepTime;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
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
        if (isset($map['airline_info'])) {
            $model->airlineInfo = airlineInfo::fromMap($map['airline_info']);
        }

        if (isset($map['arr_airport_info'])) {
            $model->arrAirportInfo = arrAirportInfo::fromMap($map['arr_airport_info']);
        }

        if (isset($map['cabin_list'])) {
            if (!empty($map['cabin_list'])) {
                $model->cabinList = [];
                $n1 = 0;
                foreach ($map['cabin_list'] as $item1) {
                    $model->cabinList[$n1++] = cabinList::fromMap($item1);
                }
            }
        }

        if (isset($map['carrier_airline'])) {
            $model->carrierAirline = $map['carrier_airline'];
        }

        if (isset($map['carrier_no'])) {
            $model->carrierNo = $map['carrier_no'];
        }

        if (isset($map['dep_airport_info'])) {
            $model->depAirportInfo = depAirportInfo::fromMap($map['dep_airport_info']);
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['is_share'])) {
            $model->isShare = $map['is_share'];
        }

        if (isset($map['lowest_cabin'])) {
            $model->lowestCabin = $map['lowest_cabin'];
        }

        if (isset($map['lowest_cabin_class'])) {
            $model->lowestCabinClass = $map['lowest_cabin_class'];
        }

        if (isset($map['lowest_cabin_desc'])) {
            $model->lowestCabinDesc = $map['lowest_cabin_desc'];
        }

        if (isset($map['lowest_cabin_num'])) {
            $model->lowestCabinNum = $map['lowest_cabin_num'];
        }

        if (isset($map['lowest_cabin_price'])) {
            if (!empty($map['lowest_cabin_price'])) {
                $model->lowestCabinPrice = [];
                $n1 = 0;
                foreach ($map['lowest_cabin_price'] as $item1) {
                    $model->lowestCabinPrice[$n1++] = lowestCabinPrice::fromMap($item1);
                }
            }
        }

        if (isset($map['modify_flight_arr_time'])) {
            $model->modifyFlightArrTime = $map['modify_flight_arr_time'];
        }

        if (isset($map['modify_flight_dep_date'])) {
            $model->modifyFlightDepDate = $map['modify_flight_dep_date'];
        }

        if (isset($map['modify_flight_dep_time'])) {
            $model->modifyFlightDepTime = $map['modify_flight_dep_time'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        return $model;
    }
}
