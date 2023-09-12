<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundRenderResult extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example true
     *
     * @var bool
     */
    public $mainOrderRefund;

    /**
     * @var DistributionMaxRefundFee
     */
    public $maxRefundFeeData;

    /**
     * @example 6692****5458
     *
     * @var string
     */
    public $orderLineId;

    /**
     * @var RefundReason[]
     */
    public $refundReasonList;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizClaimType'     => 'bizClaimType',
        'mainOrderRefund'  => 'mainOrderRefund',
        'maxRefundFeeData' => 'maxRefundFeeData',
        'orderLineId'      => 'orderLineId',
        'refundReasonList' => 'refundReasonList',
        'requestId'        => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizClaimType) {
            $res['bizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->mainOrderRefund) {
            $res['mainOrderRefund'] = $this->mainOrderRefund;
        }
        if (null !== $this->maxRefundFeeData) {
            $res['maxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toMap() : null;
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }
        if (null !== $this->refundReasonList) {
            $res['refundReasonList'] = [];
            if (null !== $this->refundReasonList && \is_array($this->refundReasonList)) {
                $n = 0;
                foreach ($this->refundReasonList as $item) {
                    $res['refundReasonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundRenderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizClaimType'])) {
            $model->bizClaimType = $map['bizClaimType'];
        }
        if (isset($map['mainOrderRefund'])) {
            $model->mainOrderRefund = $map['mainOrderRefund'];
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
                $n                       = 0;
                foreach ($map['refundReasonList'] as $item) {
                    $model->refundReasonList[$n++] = null !== $item ? RefundReason::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
