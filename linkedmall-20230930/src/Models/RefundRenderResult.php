<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundRenderResult extends Model
{
    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var DistributionMaxRefundFee
     */
    public $maxRefundFeeData;

    /**
     * @var string
     */
    public $orderLineId;

    /**
     * @var RefundReason[]
     */
    public $refundReasonList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizClaimType' => 'bizClaimType',
        'maxRefundFeeData' => 'maxRefundFeeData',
        'orderLineId' => 'orderLineId',
        'refundReasonList' => 'refundReasonList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->maxRefundFeeData) {
            $this->maxRefundFeeData->validate();
        }
        if (\is_array($this->refundReasonList)) {
            Model::validateArray($this->refundReasonList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizClaimType) {
            $res['bizClaimType'] = $this->bizClaimType;
        }

        if (null !== $this->maxRefundFeeData) {
            $res['maxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toArray($noStream) : $this->maxRefundFeeData;
        }

        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }

        if (null !== $this->refundReasonList) {
            if (\is_array($this->refundReasonList)) {
                $res['refundReasonList'] = [];
                $n1 = 0;
                foreach ($this->refundReasonList as $item1) {
                    $res['refundReasonList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['bizClaimType'])) {
            $model->bizClaimType = $map['bizClaimType'];
        }

        if (isset($map['maxRefundFeeData'])) {
            $model->maxRefundFeeData = DistributionMaxRefundFee::fromMap($map['maxRefundFeeData']);
        }

        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }

        if (isset($map['refundReasonList'])) {
            if (!empty($map['refundReasonList'])) {
                $model->refundReasonList = [];
                $n1 = 0;
                foreach ($map['refundReasonList'] as $item1) {
                    $model->refundReasonList[$n1++] = RefundReason::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
