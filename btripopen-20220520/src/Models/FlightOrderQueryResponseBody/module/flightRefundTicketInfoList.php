<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class flightRefundTicketInfoList extends Model
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
     * @var float
     */
    public $companyRefundTicketFee;

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
     * @var string
     */
    public $flightNo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var string
     */
    public $outApplyId;

    /**
     * @var float
     */
    public $personalRefundTicketFee;

    /**
     * @var int
     */
    public $refundOrderId;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var float
     */
    public $refundTicketFee;

    /**
     * @var int
     */
    public $refundType;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'applyId' => 'apply_id',
        'arrAirport' => 'arr_airport',
        'arrAirportCode' => 'arr_airport_code',
        'arrCity' => 'arr_city',
        'arrCityCode' => 'arr_city_code',
        'companyRefundTicketFee' => 'company_refund_ticket_fee',
        'depAirport' => 'dep_airport',
        'depAirportCode' => 'dep_airport_code',
        'depCity' => 'dep_city',
        'depCityCode' => 'dep_city_code',
        'flightNo' => 'flight_no',
        'gmtCreate' => 'gmt_create',
        'gmtModify' => 'gmt_modify',
        'journeyIndex' => 'journey_index',
        'outApplyId' => 'out_apply_id',
        'personalRefundTicketFee' => 'personal_refund_ticket_fee',
        'refundOrderId' => 'refund_order_id',
        'refundReason' => 'refund_reason',
        'refundTicketFee' => 'refund_ticket_fee',
        'refundType' => 'refund_type',
        'segmentIndex' => 'segment_index',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

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

        if (null !== $this->companyRefundTicketFee) {
            $res['company_refund_ticket_fee'] = $this->companyRefundTicketFee;
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

        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }

        if (null !== $this->personalRefundTicketFee) {
            $res['personal_refund_ticket_fee'] = $this->personalRefundTicketFee;
        }

        if (null !== $this->refundOrderId) {
            $res['refund_order_id'] = $this->refundOrderId;
        }

        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }

        if (null !== $this->refundTicketFee) {
            $res['refund_ticket_fee'] = $this->refundTicketFee;
        }

        if (null !== $this->refundType) {
            $res['refund_type'] = $this->refundType;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

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

        if (isset($map['company_refund_ticket_fee'])) {
            $model->companyRefundTicketFee = $map['company_refund_ticket_fee'];
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

        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }

        if (isset($map['personal_refund_ticket_fee'])) {
            $model->personalRefundTicketFee = $map['personal_refund_ticket_fee'];
        }

        if (isset($map['refund_order_id'])) {
            $model->refundOrderId = $map['refund_order_id'];
        }

        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }

        if (isset($map['refund_ticket_fee'])) {
            $model->refundTicketFee = $map['refund_ticket_fee'];
        }

        if (isset($map['refund_type'])) {
            $model->refundType = $map['refund_type'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
