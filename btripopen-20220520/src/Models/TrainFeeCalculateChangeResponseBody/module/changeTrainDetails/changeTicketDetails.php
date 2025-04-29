<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeResponseBody\module\changeTrainDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeResponseBody\module\changeTrainDetails\changeTicketDetails\passengerInfo;

class changeTicketDetails extends Model
{
    /**
     * @var int
     */
    public $changeFee;

    /**
     * @var int
     */
    public $changeRate;

    /**
     * @var int
     */
    public $changeRefundFee;

    /**
     * @var int
     */
    public $changeRefundRate;

    /**
     * @var passengerInfo
     */
    public $passengerInfo;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'changeFee' => 'change_fee',
        'changeRate' => 'change_rate',
        'changeRefundFee' => 'change_refund_fee',
        'changeRefundRate' => 'change_refund_rate',
        'passengerInfo' => 'passenger_info',
        'seatType' => 'seat_type',
        'ticketPrice' => 'ticket_price',
    ];

    public function validate()
    {
        if (null !== $this->passengerInfo) {
            $this->passengerInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }

        if (null !== $this->changeRate) {
            $res['change_rate'] = $this->changeRate;
        }

        if (null !== $this->changeRefundFee) {
            $res['change_refund_fee'] = $this->changeRefundFee;
        }

        if (null !== $this->changeRefundRate) {
            $res['change_refund_rate'] = $this->changeRefundRate;
        }

        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = null !== $this->passengerInfo ? $this->passengerInfo->toArray($noStream) : $this->passengerInfo;
        }

        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
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
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }

        if (isset($map['change_rate'])) {
            $model->changeRate = $map['change_rate'];
        }

        if (isset($map['change_refund_fee'])) {
            $model->changeRefundFee = $map['change_refund_fee'];
        }

        if (isset($map['change_refund_rate'])) {
            $model->changeRefundRate = $map['change_refund_rate'];
        }

        if (isset($map['passenger_info'])) {
            $model->passengerInfo = passengerInfo::fromMap($map['passenger_info']);
        }

        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        return $model;
    }
}
