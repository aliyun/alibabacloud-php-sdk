<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundAmount;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketCheckRefundResponseBody\data\refundRule;

class data extends Model
{
    /**
     * @var bool
     */
    public $canRefund;

    /**
     * @var refundAmount
     */
    public $refundAmount;

    /**
     * @var refundRule
     */
    public $refundRule;
    protected $_name = [
        'canRefund' => 'CanRefund',
        'refundAmount' => 'RefundAmount',
        'refundRule' => 'RefundRule',
    ];

    public function validate()
    {
        if (null !== $this->refundAmount) {
            $this->refundAmount->validate();
        }
        if (null !== $this->refundRule) {
            $this->refundRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canRefund) {
            $res['CanRefund'] = $this->canRefund;
        }

        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = null !== $this->refundAmount ? $this->refundAmount->toArray($noStream) : $this->refundAmount;
        }

        if (null !== $this->refundRule) {
            $res['RefundRule'] = null !== $this->refundRule ? $this->refundRule->toArray($noStream) : $this->refundRule;
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
        if (isset($map['CanRefund'])) {
            $model->canRefund = $map['CanRefund'];
        }

        if (isset($map['RefundAmount'])) {
            $model->refundAmount = refundAmount::fromMap($map['RefundAmount']);
        }

        if (isset($map['RefundRule'])) {
            $model->refundRule = refundRule::fromMap($map['RefundRule']);
        }

        return $model;
    }
}
