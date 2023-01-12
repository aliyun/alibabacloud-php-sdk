<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifyRefundWithDesignatedTbUidShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $disputeId;

    /**
     * @var int
     */
    public $goodsStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $proofsShrink;

    /**
     * @var int
     */
    public $reasonId;

    /**
     * @var int
     */
    public $refundCode;

    /**
     * @var int
     */
    public $refundCount;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var string
     */
    public $subLmOrderId;

    /**
     * @var string
     */
    public $tbAccountType;

    /**
     * @var int
     */
    public $tbUserId;

    /**
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'bizId'            => 'BizId',
        'disputeId'        => 'DisputeId',
        'goodsStatus'      => 'GoodsStatus',
        'message'          => 'Message',
        'proofsShrink'     => 'Proofs',
        'reasonId'         => 'ReasonId',
        'refundCode'       => 'RefundCode',
        'refundCount'      => 'RefundCount',
        'refundFee'        => 'RefundFee',
        'subLmOrderId'     => 'SubLmOrderId',
        'tbAccountType'    => 'TbAccountType',
        'tbUserId'         => 'TbUserId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->goodsStatus) {
            $res['GoodsStatus'] = $this->goodsStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->proofsShrink) {
            $res['Proofs'] = $this->proofsShrink;
        }
        if (null !== $this->reasonId) {
            $res['ReasonId'] = $this->reasonId;
        }
        if (null !== $this->refundCode) {
            $res['RefundCode'] = $this->refundCode;
        }
        if (null !== $this->refundCount) {
            $res['RefundCount'] = $this->refundCount;
        }
        if (null !== $this->refundFee) {
            $res['RefundFee'] = $this->refundFee;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->tbAccountType) {
            $res['TbAccountType'] = $this->tbAccountType;
        }
        if (null !== $this->tbUserId) {
            $res['TbUserId'] = $this->tbUserId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRefundWithDesignatedTbUidShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['GoodsStatus'])) {
            $model->goodsStatus = $map['GoodsStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Proofs'])) {
            $model->proofsShrink = $map['Proofs'];
        }
        if (isset($map['ReasonId'])) {
            $model->reasonId = $map['ReasonId'];
        }
        if (isset($map['RefundCode'])) {
            $model->refundCode = $map['RefundCode'];
        }
        if (isset($map['RefundCount'])) {
            $model->refundCount = $map['RefundCount'];
        }
        if (isset($map['RefundFee'])) {
            $model->refundFee = $map['RefundFee'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['TbAccountType'])) {
            $model->tbAccountType = $map['TbAccountType'];
        }
        if (isset($map['TbUserId'])) {
            $model->tbUserId = $map['TbUserId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}
