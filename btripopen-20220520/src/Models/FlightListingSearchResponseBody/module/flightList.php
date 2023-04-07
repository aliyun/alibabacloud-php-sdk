<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\flightRuleList;
use AlibabaCloud\Tea\Model;

class flightList extends Model
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
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $arrDate;

    /**
     * @example 12456
     *
     * @var int
     */
    public $basicCabinPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $buildPrice;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabin;

    /**
     * @example 2
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @example FM
     *
     * @var string
     */
    public $carrierAirline;

    /**
     * @example FM9152
     *
     * @var string
     */
    public $carrierNo;

    /**
     * @var depAirportInfo
     */
    public $depAirportInfo;

    /**
     * @example BJS
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $depDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $discount;

    /**
     * @example CA1234
     *
     * @var string
     */
    public $flightNo;

    /**
     * @var flightRuleList[]
     */
    public $flightRuleList;

    /**
     * @example demo
     *
     * @var string
     */
    public $flightRuleListStr;

    /**
     * @var string
     */
    public $flightSize;

    /**
     * @example demo
     *
     * @var string
     */
    public $flightType;

    /**
     * @example 1
     *
     * @var int
     */
    public $invoiceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example false
     *
     * @var bool
     */
    public $isShare;

    /**
     * @example false
     *
     * @var bool
     */
    public $isStop;

    /**
     * @example false
     *
     * @var bool
     */
    public $isTransfer;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @example 100
     *
     * @var int
     */
    public $oilPrice;

    /**
     * @example 4ec61b13fc9746f99c072a16bfc265af_0
     *
     * @var string
     */
    public $otaItemId;

    /**
     * @example 100
     *
     * @var int
     */
    public $price;

    /**
     * @example 1
     *
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $productTypeDesc;

    /**
     * @example 100
     *
     * @var string
     */
    public $promotionPrice;

    /**
     * @example 1
     *
     * @var string
     */
    public $remainedSeatCount;

    /**
     * @example 1000_1_0
     *
     * @var string
     */
    public $secretParams;

    /**
     * @example 1
     *
     * @var string
     */
    public $segmentNumber;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $stopArrTime;

    /**
     * @example HGH
     *
     * @var string
     */
    public $stopCity;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $stopDepTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalPrice;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'airlineInfo'       => 'airline_info',
        'arrAirportInfo'    => 'arr_airport_info',
        'arrDate'           => 'arr_date',
        'basicCabinPrice'   => 'basic_cabin_price',
        'buildPrice'        => 'build_price',
        'cabin'             => 'cabin',
        'cabinClass'        => 'cabin_class',
        'carrierAirline'    => 'carrier_airline',
        'carrierNo'         => 'carrier_no',
        'depAirportInfo'    => 'dep_airport_info',
        'depCityCode'       => 'dep_city_code',
        'depDate'           => 'dep_date',
        'discount'          => 'discount',
        'flightNo'          => 'flight_no',
        'flightRuleList'    => 'flight_rule_list',
        'flightRuleListStr' => 'flight_rule_list_str',
        'flightSize'        => 'flight_size',
        'flightType'        => 'flight_type',
        'invoiceType'       => 'invoice_type',
        'isProtocol'        => 'is_protocol',
        'isShare'           => 'is_share',
        'isStop'            => 'is_stop',
        'isTransfer'        => 'is_transfer',
        'mealDesc'          => 'meal_desc',
        'oilPrice'          => 'oil_price',
        'otaItemId'         => 'ota_item_id',
        'price'             => 'price',
        'productType'       => 'product_type',
        'productTypeDesc'   => 'product_type_desc',
        'promotionPrice'    => 'promotion_price',
        'remainedSeatCount' => 'remained_seat_count',
        'secretParams'      => 'secret_params',
        'segmentNumber'     => 'segment_number',
        'stopArrTime'       => 'stop_arr_time',
        'stopCity'          => 'stop_city',
        'stopDepTime'       => 'stop_dep_time',
        'ticketPrice'       => 'ticket_price',
        'totalPrice'        => 'total_price',
        'tripType'          => 'trip_type',
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
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->basicCabinPrice) {
            $res['basic_cabin_price'] = $this->basicCabinPrice;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
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
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->flightRuleList) {
            $res['flight_rule_list'] = [];
            if (null !== $this->flightRuleList && \is_array($this->flightRuleList)) {
                $n = 0;
                foreach ($this->flightRuleList as $item) {
                    $res['flight_rule_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRuleListStr) {
            $res['flight_rule_list_str'] = $this->flightRuleListStr;
        }
        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->isShare) {
            $res['is_share'] = $this->isShare;
        }
        if (null !== $this->isStop) {
            $res['is_stop'] = $this->isStop;
        }
        if (null !== $this->isTransfer) {
            $res['is_transfer'] = $this->isTransfer;
        }
        if (null !== $this->mealDesc) {
            $res['meal_desc'] = $this->mealDesc;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->productType) {
            $res['product_type'] = $this->productType;
        }
        if (null !== $this->productTypeDesc) {
            $res['product_type_desc'] = $this->productTypeDesc;
        }
        if (null !== $this->promotionPrice) {
            $res['promotion_price'] = $this->promotionPrice;
        }
        if (null !== $this->remainedSeatCount) {
            $res['remained_seat_count'] = $this->remainedSeatCount;
        }
        if (null !== $this->secretParams) {
            $res['secret_params'] = $this->secretParams;
        }
        if (null !== $this->segmentNumber) {
            $res['segment_number'] = $this->segmentNumber;
        }
        if (null !== $this->stopArrTime) {
            $res['stop_arr_time'] = $this->stopArrTime;
        }
        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
        }
        if (null !== $this->stopDepTime) {
            $res['stop_dep_time'] = $this->stopDepTime;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightList
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
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['basic_cabin_price'])) {
            $model->basicCabinPrice = $map['basic_cabin_price'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
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
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['flight_rule_list'])) {
            if (!empty($map['flight_rule_list'])) {
                $model->flightRuleList = [];
                $n                     = 0;
                foreach ($map['flight_rule_list'] as $item) {
                    $model->flightRuleList[$n++] = null !== $item ? flightRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_rule_list_str'])) {
            $model->flightRuleListStr = $map['flight_rule_list_str'];
        }
        if (isset($map['flight_size'])) {
            $model->flightSize = $map['flight_size'];
        }
        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }
        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['is_share'])) {
            $model->isShare = $map['is_share'];
        }
        if (isset($map['is_stop'])) {
            $model->isStop = $map['is_stop'];
        }
        if (isset($map['is_transfer'])) {
            $model->isTransfer = $map['is_transfer'];
        }
        if (isset($map['meal_desc'])) {
            $model->mealDesc = $map['meal_desc'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['product_type'])) {
            $model->productType = $map['product_type'];
        }
        if (isset($map['product_type_desc'])) {
            $model->productTypeDesc = $map['product_type_desc'];
        }
        if (isset($map['promotion_price'])) {
            $model->promotionPrice = $map['promotion_price'];
        }
        if (isset($map['remained_seat_count'])) {
            $model->remainedSeatCount = $map['remained_seat_count'];
        }
        if (isset($map['secret_params'])) {
            $model->secretParams = $map['secret_params'];
        }
        if (isset($map['segment_number'])) {
            $model->segmentNumber = $map['segment_number'];
        }
        if (isset($map['stop_arr_time'])) {
            $model->stopArrTime = $map['stop_arr_time'];
        }
        if (isset($map['stop_city'])) {
            $model->stopCity = $map['stop_city'];
        }
        if (isset($map['stop_dep_time'])) {
            $model->stopDepTime = $map['stop_dep_time'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
