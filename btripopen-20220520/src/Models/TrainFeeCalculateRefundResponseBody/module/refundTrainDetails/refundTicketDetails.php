<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails\refundTicketDetails\passengerInfo;
use AlibabaCloud\Tea\Model;

class refundTicketDetails extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canRefund;

    /**
     * @var passengerInfo
     */
    public $passengerInfo;

    /**
     * @example 90
     *
     * @var int
     */
    public $refundCostFee;

    /**
     * @example 10
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @example 90
     *
     * @var int
     */
    public $refundRate;

    /**
     * @example 100
     *
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'canRefund'     => 'can_refund',
        'passengerInfo' => 'passenger_info',
        'refundCostFee' => 'refund_cost_fee',
        'refundPrice'   => 'refund_price',
        'refundRate'    => 'refund_rate',
        'ticketPrice'   => 'ticket_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canRefund) {
            $res['can_refund'] = $this->canRefund;
        }
        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = null !== $this->passengerInfo ? $this->passengerInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return refundTicketDetails
     */
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
