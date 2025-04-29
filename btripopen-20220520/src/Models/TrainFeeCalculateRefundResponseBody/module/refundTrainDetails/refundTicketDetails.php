<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails\refundTicketDetails\passengerInfo;

class refundTicketDetails extends Model
{
    /**
     * @var bool
     */
    public $canRefund;

    /**
     * @var passengerInfo
     */
    public $passengerInfo;

    /**
     * @var int
     */
    public $refundCostFee;

    /**
     * @var int
     */
    public $refundPrice;

    /**
     * @var int
     */
    public $refundRate;

    /**
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'canRefund' => 'can_refund',
        'passengerInfo' => 'passenger_info',
        'refundCostFee' => 'refund_cost_fee',
        'refundPrice' => 'refund_price',
        'refundRate' => 'refund_rate',
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
        if (null !== $this->canRefund) {
            $res['can_refund'] = $this->canRefund;
        }

        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = null !== $this->passengerInfo ? $this->passengerInfo->toArray($noStream) : $this->passengerInfo;
        }

        if (null !== $this->refundCostFee) {
            $res['refund_cost_fee'] = $this->refundCostFee;
        }

        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }

        if (null !== $this->refundRate) {
            $res['refund_rate'] = $this->refundRate;
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
        if (isset($map['can_refund'])) {
            $model->canRefund = $map['can_refund'];
        }

        if (isset($map['passenger_info'])) {
            $model->passengerInfo = passengerInfo::fromMap($map['passenger_info']);
        }

        if (isset($map['refund_cost_fee'])) {
            $model->refundCostFee = $map['refund_cost_fee'];
        }

        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }

        if (isset($map['refund_rate'])) {
            $model->refundRate = $map['refund_rate'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        return $model;
    }
}
