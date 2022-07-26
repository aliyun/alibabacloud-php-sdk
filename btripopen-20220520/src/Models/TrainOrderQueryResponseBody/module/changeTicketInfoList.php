<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class changeTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $changeCoachNo;

    /**
     * @var float
     */
    public $changeGapFee;

    /**
     * @var float
     */
    public $changeHandlingFee;

    /**
     * @var string
     */
    public $changeSeatNo;

    /**
     * @var string
     */
    public $changeSeatTypeName;

    /**
     * @var float
     */
    public $changeServiceFee;

    /**
     * @var string
     */
    public $changeTrainTypeName;

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
    public $originTicketNo;

    /**
     * @var string
     */
    public $outTicketStatus;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'changeCoachNo'       => 'change_coach_no',
        'changeGapFee'        => 'change_gap_fee',
        'changeHandlingFee'   => 'change_handling_fee',
        'changeSeatNo'        => 'change_seat_no',
        'changeSeatTypeName'  => 'change_seat_type_name',
        'changeServiceFee'    => 'change_service_fee',
        'changeTrainTypeName' => 'change_train_type_name',
        'checkInTime'         => 'check_in_time',
        'checkOutTime'        => 'check_out_time',
        'endTime'             => 'end_time',
        'gmtCreate'           => 'gmt_create',
        'gmtModify'           => 'gmt_modify',
        'originTicketNo'      => 'origin_ticket_no',
        'outTicketStatus'     => 'out_ticket_status',
        'startTime'           => 'start_time',
        'ticketNo'            => 'ticket_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeCoachNo) {
            $res['change_coach_no'] = $this->changeCoachNo;
        }
        if (null !== $this->changeGapFee) {
            $res['change_gap_fee'] = $this->changeGapFee;
        }
        if (null !== $this->changeHandlingFee) {
            $res['change_handling_fee'] = $this->changeHandlingFee;
        }
        if (null !== $this->changeSeatNo) {
            $res['change_seat_no'] = $this->changeSeatNo;
        }
        if (null !== $this->changeSeatTypeName) {
            $res['change_seat_type_name'] = $this->changeSeatTypeName;
        }
        if (null !== $this->changeServiceFee) {
            $res['change_service_fee'] = $this->changeServiceFee;
        }
        if (null !== $this->changeTrainTypeName) {
            $res['change_train_type_name'] = $this->changeTrainTypeName;
        }
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
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
        if (null !== $this->originTicketNo) {
            $res['origin_ticket_no'] = $this->originTicketNo;
        }
        if (null !== $this->outTicketStatus) {
            $res['out_ticket_status'] = $this->outTicketStatus;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_coach_no'])) {
            $model->changeCoachNo = $map['change_coach_no'];
        }
        if (isset($map['change_gap_fee'])) {
            $model->changeGapFee = $map['change_gap_fee'];
        }
        if (isset($map['change_handling_fee'])) {
            $model->changeHandlingFee = $map['change_handling_fee'];
        }
        if (isset($map['change_seat_no'])) {
            $model->changeSeatNo = $map['change_seat_no'];
        }
        if (isset($map['change_seat_type_name'])) {
            $model->changeSeatTypeName = $map['change_seat_type_name'];
        }
        if (isset($map['change_service_fee'])) {
            $model->changeServiceFee = $map['change_service_fee'];
        }
        if (isset($map['change_train_type_name'])) {
            $model->changeTrainTypeName = $map['change_train_type_name'];
        }
        if (isset($map['check_in_time'])) {
            $model->checkInTime = $map['check_in_time'];
        }
        if (isset($map['check_out_time'])) {
            $model->checkOutTime = $map['check_out_time'];
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
        if (isset($map['origin_ticket_no'])) {
            $model->originTicketNo = $map['origin_ticket_no'];
        }
        if (isset($map['out_ticket_status'])) {
            $model->outTicketStatus = $map['out_ticket_status'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
