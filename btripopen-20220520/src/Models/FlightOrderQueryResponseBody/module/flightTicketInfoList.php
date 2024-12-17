<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $arrAirport;

    /**
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @example 100
     *
     * @var float
     */
    public $buildPrice;

    /**
     * @example false
     *
     * @var bool
     */
    public $changed;

    /**
     * @var string
     */
    public $depAirport;

    /**
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @example 10
     *
     * @var int
     */
    public $discount;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @example 100
     *
     * @var float
     */
    public $oilPrice;

    /**
     * @example 1
     *
     * @var int
     */
    public $payType;

    /**
     * @var float
     */
    public $personalPrice;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @example 100
     *
     * @var float
     */
    public $settlePrice;

    /**
     * @example 000-123
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @example 100
     *
     * @var float
     */
    public $ticketPrice;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $ticketStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $ticketStatusCode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'arrAirport'       => 'arr_airport',
        'arrAirportCode'   => 'arr_airport_code',
        'arrCity'          => 'arr_city',
        'arrCityCode'      => 'arr_city_code',
        'buildPrice'       => 'build_price',
        'changed'          => 'changed',
        'depAirport'       => 'dep_airport',
        'depAirportCode'   => 'dep_airport_code',
        'depCity'          => 'dep_city',
        'depCityCode'      => 'dep_city_code',
        'discount'         => 'discount',
        'flightNo'         => 'flight_no',
        'gmtCreate'        => 'gmt_create',
        'gmtModify'        => 'gmt_modify',
        'journeyIndex'     => 'journey_index',
        'oilPrice'         => 'oil_price',
        'payType'          => 'pay_type',
        'personalPrice'    => 'personal_price',
        'segmentIndex'     => 'segment_index',
        'settlePrice'      => 'settle_price',
        'ticketNo'         => 'ticket_no',
        'ticketPrice'      => 'ticket_price',
        'ticketStatus'     => 'ticket_status',
        'ticketStatusCode' => 'ticket_status_code',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrAirport) {
            $res['arr_airport'] = $this->arrAirport;
        }
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }
        if (null !== $this->depAirport) {
            $res['dep_airport'] = $this->depAirport;
        }
        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->personalPrice) {
            $res['personal_price'] = $this->personalPrice;
        }
        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }
        if (null !== $this->settlePrice) {
            $res['settle_price'] = $this->settlePrice;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
        }
        if (null !== $this->ticketStatusCode) {
            $res['ticket_status_code'] = $this->ticketStatusCode;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_airport'])) {
            $model->arrAirport = $map['arr_airport'];
        }
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['dep_airport'])) {
            $model->depAirport = $map['dep_airport'];
        }
        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['personal_price'])) {
            $model->personalPrice = $map['personal_price'];
        }
        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }
        if (isset($map['settle_price'])) {
            $model->settlePrice = $map['settle_price'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }
        if (isset($map['ticket_status_code'])) {
            $model->ticketStatusCode = $map['ticket_status_code'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
