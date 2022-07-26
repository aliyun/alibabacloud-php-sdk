<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class priceInfoList extends Model
{
    /**
     * @var int
     */
    public $categoryCode;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $changeFlightNo;

    /**
     * @var string
     */
    public $discount;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $originalTicketNo;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'categoryCode'     => 'category_code',
        'categoryType'     => 'category_type',
        'changeFlightNo'   => 'change_flight_no',
        'discount'         => 'discount',
        'endTime'          => 'end_time',
        'gmtCreate'        => 'gmt_create',
        'originalTicketNo' => 'original_ticket_no',
        'passengerName'    => 'passenger_name',
        'payType'          => 'pay_type',
        'price'            => 'price',
        'startTime'        => 'start_time',
        'ticketNo'         => 'ticket_no',
        'tradeId'          => 'trade_id',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }
        if (null !== $this->categoryType) {
            $res['category_type'] = $this->categoryType;
        }
        if (null !== $this->changeFlightNo) {
            $res['change_flight_no'] = $this->changeFlightNo;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->originalTicketNo) {
            $res['original_ticket_no'] = $this->originalTicketNo;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->tradeId) {
            $res['trade_id'] = $this->tradeId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category_code'])) {
            $model->categoryCode = $map['category_code'];
        }
        if (isset($map['category_type'])) {
            $model->categoryType = $map['category_type'];
        }
        if (isset($map['change_flight_no'])) {
            $model->changeFlightNo = $map['change_flight_no'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['original_ticket_no'])) {
            $model->originalTicketNo = $map['original_ticket_no'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['trade_id'])) {
            $model->tradeId = $map['trade_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
