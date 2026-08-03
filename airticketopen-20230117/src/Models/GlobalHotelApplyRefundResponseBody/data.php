<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelApplyRefundResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelApplyRefundResponseBody\data\totalPenaltyAmount;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelApplyRefundResponseBody\data\totalRefundAmount;

class data extends Model
{
    /**
     * @var int
     */
    public $sellRefundOrderId;

    /**
     * @var totalPenaltyAmount
     */
    public $totalPenaltyAmount;

    /**
     * @var totalRefundAmount
     */
    public $totalRefundAmount;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'sellRefundOrderId' => 'SellRefundOrderId',
        'totalPenaltyAmount' => 'TotalPenaltyAmount',
        'totalRefundAmount' => 'TotalRefundAmount',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (null !== $this->totalPenaltyAmount) {
            $this->totalPenaltyAmount->validate();
        }
        if (null !== $this->totalRefundAmount) {
            $this->totalRefundAmount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sellRefundOrderId) {
            $res['SellRefundOrderId'] = $this->sellRefundOrderId;
        }

        if (null !== $this->totalPenaltyAmount) {
            $res['TotalPenaltyAmount'] = null !== $this->totalPenaltyAmount ? $this->totalPenaltyAmount->toArray($noStream) : $this->totalPenaltyAmount;
        }

        if (null !== $this->totalRefundAmount) {
            $res['TotalRefundAmount'] = null !== $this->totalRefundAmount ? $this->totalRefundAmount->toArray($noStream) : $this->totalRefundAmount;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['SellRefundOrderId'])) {
            $model->sellRefundOrderId = $map['SellRefundOrderId'];
        }

        if (isset($map['TotalPenaltyAmount'])) {
            $model->totalPenaltyAmount = totalPenaltyAmount::fromMap($map['TotalPenaltyAmount']);
        }

        if (isset($map['TotalRefundAmount'])) {
            $model->totalRefundAmount = totalRefundAmount::fromMap($map['TotalRefundAmount']);
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
