<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\airlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\arrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\cabinInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\depAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList;

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
     * @var string
     */
    public $arrDate;

    /**
     * @var int
     */
    public $buildPrice;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var cabinInfoList[]
     */
    public $cabinInfoList;

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
    public $depDate;

    /**
     * @var int
     */
    public $discount;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var flightRuleList[]
     */
    public $flightRuleList;

    /**
     * @var string
     */
    public $flightRuleListStr;

    /**
     * @var string
     */
    public $flightSize;

    /**
     * @var string
     */
    public $flightType;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var bool
     */
    public $isProtocol;

    /**
     * @var bool
     */
    public $isShare;

    /**
     * @var bool
     */
    public $isStop;

    /**
     * @var bool
     */
    public $isTransfer;

    /**
     * @var string
     */
    public $mealDesc;

    /**
     * @var int
     */
    public $oilPrice;

    /**
     * @var string
     */
    public $otaItemId;

    /**
     * @var int
     */
    public $price;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $productTypeDesc;

    /**
     * @var string
     */
    public $promotionPrice;

    /**
     * @var string
     */
    public $remainedSeatCount;

    /**
     * @var string
     */
    public $secretParams;

    /**
     * @var string
     */
    public $segmentNumber;

    /**
     * @var string
     */
    public $stopArrTime;

    /**
     * @var string
     */
    public $stopCity;

    /**
     * @var string
     */
    public $stopDepTime;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'airlineInfo' => 'airline_info',
        'arrAirportInfo' => 'arr_airport_info',
        'arrDate' => 'arr_date',
        'buildPrice' => 'build_price',
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'cabinInfoList' => 'cabin_info_list',
        'carrierAirline' => 'carrier_airline',
        'carrierNo' => 'carrier_no',
        'depAirportInfo' => 'dep_airport_info',
        'depCityCode' => 'dep_city_code',
        'depDate' => 'dep_date',
        'discount' => 'discount',
        'flightNo' => 'flight_no',
        'flightRuleList' => 'flight_rule_list',
        'flightRuleListStr' => 'flight_rule_list_str',
        'flightSize' => 'flight_size',
        'flightType' => 'flight_type',
        'invoiceType' => 'invoice_type',
        'isProtocol' => 'is_protocol',
        'isShare' => 'is_share',
        'isStop' => 'is_stop',
        'isTransfer' => 'is_transfer',
        'mealDesc' => 'meal_desc',
        'oilPrice' => 'oil_price',
        'otaItemId' => 'ota_item_id',
        'price' => 'price',
        'productType' => 'product_type',
        'productTypeDesc' => 'product_type_desc',
        'promotionPrice' => 'promotion_price',
        'remainedSeatCount' => 'remained_seat_count',
        'secretParams' => 'secret_params',
        'segmentNumber' => 'segment_number',
        'stopArrTime' => 'stop_arr_time',
        'stopCity' => 'stop_city',
        'stopDepTime' => 'stop_dep_time',
        'ticketPrice' => 'ticket_price',
        'totalPrice' => 'total_price',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (null !== $this->airlineInfo) {
            $this->airlineInfo->validate();
        }
        if (null !== $this->arrAirportInfo) {
            $this->arrAirportInfo->validate();
        }
        if (\is_array($this->cabinInfoList)) {
            Model::validateArray($this->cabinInfoList);
        }
        if (null !== $this->depAirportInfo) {
            $this->depAirportInfo->validate();
        }
        if (\is_array($this->flightRuleList)) {
            Model::validateArray($this->flightRuleList);
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

        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
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

        if (null !== $this->cabinInfoList) {
            if (\is_array($this->cabinInfoList)) {
                $res['cabin_info_list'] = [];
                $n1 = 0;
                foreach ($this->cabinInfoList as $item1) {
                    $res['cabin_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->flightRuleList)) {
                $res['flight_rule_list'] = [];
                $n1 = 0;
                foreach ($this->flightRuleList as $item1) {
                    $res['flight_rule_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
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

        if (isset($map['cabin_info_list'])) {
            if (!empty($map['cabin_info_list'])) {
                $model->cabinInfoList = [];
                $n1 = 0;
                foreach ($map['cabin_info_list'] as $item1) {
                    $model->cabinInfoList[$n1] = cabinInfoList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['flight_rule_list'] as $item1) {
                    $model->flightRuleList[$n1] = flightRuleList::fromMap($item1);
                    ++$n1;
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
