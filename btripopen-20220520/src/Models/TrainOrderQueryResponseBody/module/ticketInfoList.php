<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class ticketInfoList extends Model
{
    /**
     * @var bool
     */
    public $changed;

    /**
     * @var string
     */
    public $checkInTime;

    /**
     * @var string
     */
    public $checkOutTime;

    /**
     * @var string
     */
    public $coachNo;

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
    public $gmtModify;

    /**
     * @var string
     */
    public $outTicketStatus;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var string
     */
    public $seatTypeName;

    /**
     * @var float
     */
    public $serviceFee;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var float
     */
    public $ticketPrice;

    /**
     * @var int
     */
    public $ticketStatus;

    /**
     * @var string
     */
    public $trainTypeName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'changed'         => 'changed',
        'checkInTime'     => 'check_in_time',
        'checkOutTime'    => 'check_out_time',
        'coachNo'         => 'coach_no',
        'endTime'         => 'end_time',
        'gmtCreate'       => 'gmt_create',
        'gmtModify'       => 'gmt_modify',
        'outTicketStatus' => 'out_ticket_status',
        'payType'         => 'pay_type',
        'seatNo'          => 'seat_no',
        'seatTypeName'    => 'seat_type_name',
        'serviceFee'      => 'service_fee',
        'startTime'       => 'start_time',
        'ticketNo'        => 'ticket_no',
        'ticketPrice'     => 'ticket_price',
        'ticketStatus'    => 'ticket_status',
        'trainTypeName'   => 'train_type_name',
        'userId'          => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }
        if (null !== $this->coachNo) {
            $res['coach_no'] = $this->coachNo;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->outTicketStatus) {
            $res['out_ticket_status'] = $this->outTicketStatus;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->seatNo) {
            $res['seat_no'] = $this->seatNo;
        }
        if (null !== $this->seatTypeName) {
            $res['seat_type_name'] = $this->seatTypeName;
        }
        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
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
        if (null !== $this->trainTypeName) {
            $res['train_type_name'] = $this->trainTypeName;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ticketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['check_in_time'])) {
            $model->checkInTime = $map['check_in_time'];
        }
        if (isset($map['check_out_time'])) {
            $model->checkOutTime = $map['check_out_time'];
        }
        if (isset($map['coach_no'])) {
            $model->coachNo = $map['coach_no'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['out_ticket_status'])) {
            $model->outTicketStatus = $map['out_ticket_status'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['seat_no'])) {
            $model->seatNo = $map['seat_no'];
        }
        if (isset($map['seat_type_name'])) {
            $model->seatTypeName = $map['seat_type_name'];
        }
        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
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
        if (isset($map['train_type_name'])) {
            $model->trainTypeName = $map['train_type_name'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
