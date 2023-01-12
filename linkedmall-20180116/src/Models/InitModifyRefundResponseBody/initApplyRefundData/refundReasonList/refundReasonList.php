<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponseBody\initApplyRefundData\refundReasonList;

use AlibabaCloud\Tea\Model;

class refundReasonList extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $proofRequired;

    /**
     * @example 500003
     *
     * @var int
     */
    public $reasonTextId;

    /**
     * @var string
     */
    public $reasonTips;

    /**
     * @example true
     *
     * @var bool
     */
    public $refundDescRequired;
    protected $_name = [
        'proofRequired'      => 'ProofRequired',
        'reasonTextId'       => 'ReasonTextId',
        'reasonTips'         => 'ReasonTips',
        'refundDescRequired' => 'RefundDescRequired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proofRequired) {
            $res['ProofRequired'] = $this->proofRequired;
        }
        if (null !== $this->reasonTextId) {
            $res['ReasonTextId'] = $this->reasonTextId;
        }
        if (null !== $this->reasonTips) {
            $res['ReasonTips'] = $this->reasonTips;
        }
        if (null !== $this->refundDescRequired) {
            $res['RefundDescRequired'] = $this->refundDescRequired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundReasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProofRequired'])) {
            $model->proofRequired = $map['ProofRequired'];
        }
        if (isset($map['ReasonTextId'])) {
            $model->reasonTextId = $map['ReasonTextId'];
        }
        if (isset($map['ReasonTips'])) {
            $model->reasonTips = $map['ReasonTips'];
        }
        if (isset($map['RefundDescRequired'])) {
            $model->refundDescRequired = $map['RefundDescRequired'];
        }

        return $model;
    }
}
