<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponseBody\initApplyRefundData\maxRefundFeeData;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitApplyRefundResponseBody\initApplyRefundData\refundReasonList;
use AlibabaCloud\Tea\Model;

class initApplyRefundData extends Model
{
    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var bool
     */
    public $mainOrderRefund;

    /**
     * @var maxRefundFeeData
     */
    public $maxRefundFeeData;

    /**
     * @var refundReasonList
     */
    public $refundReasonList;
    protected $_name = [
        'bizClaimType'     => 'BizClaimType',
        'mainOrderRefund'  => 'MainOrderRefund',
        'maxRefundFeeData' => 'MaxRefundFeeData',
        'refundReasonList' => 'RefundReasonList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->mainOrderRefund) {
            $res['MainOrderRefund'] = $this->mainOrderRefund;
        }
        if (null !== $this->maxRefundFeeData) {
            $res['MaxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toMap() : null;
        }
        if (null !== $this->refundReasonList) {
            $res['RefundReasonList'] = null !== $this->refundReasonList ? $this->refundReasonList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initApplyRefundData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['MainOrderRefund'])) {
            $model->mainOrderRefund = $map['MainOrderRefund'];
        }
        if (isset($map['MaxRefundFeeData'])) {
            $model->maxRefundFeeData = maxRefundFeeData::fromMap($map['MaxRefundFeeData']);
        }
        if (isset($map['RefundReasonList'])) {
            $model->refundReasonList = refundReasonList::fromMap($map['RefundReasonList']);
        }

        return $model;
    }
}
