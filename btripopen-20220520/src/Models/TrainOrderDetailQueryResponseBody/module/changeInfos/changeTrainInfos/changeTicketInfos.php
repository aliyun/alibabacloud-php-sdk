<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos\changeTrainInfos;

use AlibabaCloud\Dara\Model;

class changeTicketInfos extends Model
{
    /**
     * @var int
     */
    public $changeCost;

    /**
     * @var int
     */
    public $changeDiff;

    /**
     * @var int
     */
    public $changeGapHandingFee;

    /**
     * @var int
     */
    public $changeMinTicketAmountHandingFee;

    /**
     * @var string
     */
    public $coachNo;

    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var int
     */
    public $realTicketPrice;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $ticketEntrance;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'changeCost' => 'change_cost',
        'changeDiff' => 'change_diff',
        'changeGapHandingFee' => 'change_gap_handing_fee',
        'changeMinTicketAmountHandingFee' => 'change_min_ticket_amount_handing_fee',
        'coachNo' => 'coach_no',
        'failCode' => 'fail_code',
        'failReason' => 'fail_reason',
        'passengerId' => 'passenger_id',
        'realTicketPrice' => 'real_ticket_price',
        'seatNo' => 'seat_no',
        'seatType' => 'seat_type',
        'ticketEntrance' => 'ticket_entrance',
        'ticketPrice' => 'ticket_price',
        'ticketStatus' => 'ticket_status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeCost) {
            $res['change_cost'] = $this->changeCost;
        }

        if (null !== $this->changeDiff) {
            $res['change_diff'] = $this->changeDiff;
        }

        if (null !== $this->changeGapHandingFee) {
            $res['change_gap_handing_fee'] = $this->changeGapHandingFee;
        }

        if (null !== $this->changeMinTicketAmountHandingFee) {
            $res['change_min_ticket_amount_handing_fee'] = $this->changeMinTicketAmountHandingFee;
        }

        if (null !== $this->coachNo) {
            $res['coach_no'] = $this->coachNo;
        }

        if (null !== $this->failCode) {
            $res['fail_code'] = $this->failCode;
        }

        if (null !== $this->failReason) {
            $res['fail_reason'] = $this->failReason;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->realTicketPrice) {
            $res['real_ticket_price'] = $this->realTicketPrice;
        }

        if (null !== $this->seatNo) {
            $res['seat_no'] = $this->seatNo;
        }

        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }

        if (null !== $this->ticketEntrance) {
            $res['ticket_entrance'] = $this->ticketEntrance;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }

        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
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
        if (isset($map['change_cost'])) {
            $model->changeCost = $map['change_cost'];
        }

        if (isset($map['change_diff'])) {
            $model->changeDiff = $map['change_diff'];
        }

        if (isset($map['change_gap_handing_fee'])) {
            $model->changeGapHandingFee = $map['change_gap_handing_fee'];
        }

        if (isset($map['change_min_ticket_amount_handing_fee'])) {
            $model->changeMinTicketAmountHandingFee = $map['change_min_ticket_amount_handing_fee'];
        }

        if (isset($map['coach_no'])) {
            $model->coachNo = $map['coach_no'];
        }

        if (isset($map['fail_code'])) {
            $model->failCode = $map['fail_code'];
        }

        if (isset($map['fail_reason'])) {
            $model->failReason = $map['fail_reason'];
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['real_ticket_price'])) {
            $model->realTicketPrice = $map['real_ticket_price'];
        }

        if (isset($map['seat_no'])) {
            $model->seatNo = $map['seat_no'];
        }

        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }

        if (isset($map['ticket_entrance'])) {
            $model->ticketEntrance = $map['ticket_entrance'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }

        return $model;
    }
}
