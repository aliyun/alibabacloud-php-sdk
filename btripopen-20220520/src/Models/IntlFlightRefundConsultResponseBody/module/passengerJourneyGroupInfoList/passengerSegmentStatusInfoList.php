<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundConsultResponseBody\module\passengerJourneyGroupInfoList;

use AlibabaCloud\Dara\Model;

class passengerSegmentStatusInfoList extends Model
{
    /**
     * @var bool
     */
    public $canRefund;

    /**
     * @var int
     */
    public $passengerId;

    /**
     * @var string
     */
    public $segmentKey;

    /**
     * @var string
     */
    public $unRefundReason;

    /**
     * @var string
     */
    public $unRefundReasonCode;
    protected $_name = [
        'canRefund' => 'can_refund',
        'passengerId' => 'passenger_id',
        'segmentKey' => 'segment_key',
        'unRefundReason' => 'un_refund_reason',
        'unRefundReasonCode' => 'un_refund_reason_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canRefund) {
            $res['can_refund'] = $this->canRefund;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
        }

        if (null !== $this->unRefundReason) {
            $res['un_refund_reason'] = $this->unRefundReason;
        }

        if (null !== $this->unRefundReasonCode) {
            $res['un_refund_reason_code'] = $this->unRefundReasonCode;
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

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        if (isset($map['un_refund_reason'])) {
            $model->unRefundReason = $map['un_refund_reason'];
        }

        if (isset($map['un_refund_reason_code'])) {
            $model->unRefundReasonCode = $map['un_refund_reason_code'];
        }

        return $model;
    }
}
