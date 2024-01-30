<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightChangeTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $arrAirport;

    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example V
     *
     * @var string
     */
    public $changeCabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $changeCabinLevel;

    /**
     * @example 100
     *
     * @var float
     */
    public $changeFee;

    /**
     * @example MU7767
     *
     * @var string
     */
    public $changeFlightNo;

    /**
     * @example 33576
     *
     * @var int
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $changeReason;

    /**
     * @example 0
     *
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $depAirport;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $discount;

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
     * @example 00-123123
     *
     * @var string
     */
    public $originTicketNo;

    /**
     * @var string
     */
    public $outApplyId;

    /**
     * @var string
     */
    public $stopCity;

    /**
     * @example 000-123123
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $ticketStatus;

    /**
     * @var int
     */
    public $ticketStatusCode;

    /**
     * @example 100
     *
     * @var float
     */
    public $upgradeFee;
    protected $_name = [
        'applyId'          => 'apply_id',
        'arrAirport'       => 'arr_airport',
        'arrCity'          => 'arr_city',
        'arrTime'          => 'arr_time',
        'changeCabin'      => 'change_cabin',
        'changeCabinLevel' => 'change_cabin_level',
        'changeFee'        => 'change_fee',
        'changeFlightNo'   => 'change_flight_no',
        'changeOrderId'    => 'change_order_id',
        'changeReason'     => 'change_reason',
        'changeType'       => 'change_type',
        'depAirport'       => 'dep_airport',
        'depCity'          => 'dep_city',
        'depTime'          => 'dep_time',
        'discount'         => 'discount',
        'gmtCreate'        => 'gmt_create',
        'gmtModify'        => 'gmt_modify',
        'originTicketNo'   => 'origin_ticket_no',
        'outApplyId'       => 'out_apply_id',
        'stopCity'         => 'stop_city',
        'ticketNo'         => 'ticket_no',
        'ticketStatus'     => 'ticket_status',
        'ticketStatusCode' => 'ticket_status_code',
        'upgradeFee'       => 'upgrade_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->arrAirport) {
            $res['arr_airport'] = $this->arrAirport;
        }
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->changeCabin) {
            $res['change_cabin'] = $this->changeCabin;
        }
        if (null !== $this->changeCabinLevel) {
            $res['change_cabin_level'] = $this->changeCabinLevel;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }
        if (null !== $this->changeFlightNo) {
            $res['change_flight_no'] = $this->changeFlightNo;
        }
        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
        }
        if (null !== $this->changeReason) {
            $res['change_reason'] = $this->changeReason;
        }
        if (null !== $this->changeType) {
            $res['change_type'] = $this->changeType;
        }
        if (null !== $this->depAirport) {
            $res['dep_airport'] = $this->depAirport;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->originTicketNo) {
            $res['origin_ticket_no'] = $this->originTicketNo;
        }
        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }
        if (null !== $this->stopCity) {
            $res['stop_city'] = $this->stopCity;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
        }
        if (null !== $this->ticketStatusCode) {
            $res['ticket_status_code'] = $this->ticketStatusCode;
        }
        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightChangeTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['arr_airport'])) {
            $model->arrAirport = $map['arr_airport'];
        }
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['change_cabin'])) {
            $model->changeCabin = $map['change_cabin'];
        }
        if (isset($map['change_cabin_level'])) {
            $model->changeCabinLevel = $map['change_cabin_level'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }
        if (isset($map['change_flight_no'])) {
            $model->changeFlightNo = $map['change_flight_no'];
        }
        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }
        if (isset($map['change_reason'])) {
            $model->changeReason = $map['change_reason'];
        }
        if (isset($map['change_type'])) {
            $model->changeType = $map['change_type'];
        }
        if (isset($map['dep_airport'])) {
            $model->depAirport = $map['dep_airport'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['origin_ticket_no'])) {
            $model->originTicketNo = $map['origin_ticket_no'];
        }
        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }
        if (isset($map['stop_city'])) {
            $model->stopCity = $map['stop_city'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }
        if (isset($map['ticket_status_code'])) {
            $model->ticketStatusCode = $map['ticket_status_code'];
        }
        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        return $model;
    }
}
