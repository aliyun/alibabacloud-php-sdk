<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\lowestCabinPrice;
use AlibabaCloud\Tea\Model;

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
     * @example CA1704
     *
     * @var string
     */
    public $carrierAirline;

    /**
     * @example CA1704
     *
     * @var string
     */
    public $carrierNo;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example CA1351
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $isShare;

    /**
     * @example Y
     *
     * @var string
     */
    public $lowestCabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $lowestCabinClass;

    /**
     * @var string
     */
    public $lowestCabinDesc;

    /**
     * @example 0
     *
     * @var string
     */
    public $lowestCabinNum;

    /**
     * @var lowestCabinPrice[]
     */
    public $lowestCabinPrice;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $modifyFlightArrTime;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $modifyFlightDepDate;

    /**
     * @example 2000-00-00 00:00:00
     *
     * @var string
     */
    public $modifyFlightDepTime;

    /**
     * @example d1fb9e0a794f45e1b762d36ff1d17zz
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'airlineInfo'         => 'airline_info',
        'arrAirportInfo'      => 'arr_airport_info',
        'cabinList'           => 'cabin_list',
        'carrierAirline'      => 'carrier_airline',
        'carrierNo'           => 'carrier_no',
        'depAirportInfo'      => 'dep_airport_info',
        'depCityCode'         => 'dep_city_code',
        'flightNo'            => 'flight_no',
        'isShare'             => 'is_share',
        'lowestCabin'         => 'lowest_cabin',
        'lowestCabinClass'    => 'lowest_cabin_class',
        'lowestCabinDesc'     => 'lowest_cabin_desc',
        'lowestCabinNum'      => 'lowest_cabin_num',
        'lowestCabinPrice'    => 'lowest_cabin_price',
        'modifyFlightArrTime' => 'modify_flight_arr_time',
        'modifyFlightDepDate' => 'modify_flight_dep_date',
        'modifyFlightDepTime' => 'modify_flight_dep_time',
        'sessionId'           => 'session_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineInfo) {
            $res['airline_info'] = null !== $this->airlineInfo ? $this->airlineInfo->toMap() : null;
        }
        if (null !== $this->arrAirportInfo) {
            $res['arr_airport_info'] = null !== $this->arrAirportInfo ? $this->arrAirportInfo->toMap() : null;
        }
        if (null !== $this->cabinList) {
            $res['cabin_list'] = [];
            if (null !== $this->cabinList && \is_array($this->cabinList)) {
                $n = 0;
                foreach ($this->cabinList as $item) {
                    $res['cabin_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['dep_airport_info'] = null !== $this->depAirportInfo ? $this->depAirportInfo->toMap() : null;
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
            $res['lowest_cabin_price'] = [];
            if (null !== $this->lowestCabinPrice && \is_array($this->lowestCabinPrice)) {
                $n = 0;
                foreach ($this->lowestCabinPrice as $item) {
                    $res['lowest_cabin_price'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return flightInfoList
     */
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
                $n                = 0;
                foreach ($map['cabin_list'] as $item) {
                    $model->cabinList[$n++] = null !== $item ? cabinList::fromMap($item) : $item;
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
                $n                       = 0;
                foreach ($map['lowest_cabin_price'] as $item) {
                    $model->lowestCabinPrice[$n++] = null !== $item ? lowestCabinPrice::fromMap($item) : $item;
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
