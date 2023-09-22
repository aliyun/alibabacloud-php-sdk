<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundResult extends Model
{
    /**
     * @example 多拍不想要
     *
     * @var string
     */
    public $applyDisputeDesc;

    /**
     * @var ApplyReason
     */
    public $applyReason;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example 2023-09-02T00:00:00.000Z
     *
     * @var string
     */
    public $disputeCreateTime;

    /**
     * @example 多拍不想要
     *
     * @var string
     */
    public $disputeDesc;

    /**
     * @example 2023-09-02T12:00:00.000Z
     *
     * @var string
     */
    public $disputeEndTime;

    /**
     * @example 6693****4352
     *
     * @var string
     */
    public $disputeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $disputeStatus;

    /**
     * @example 6692****5457
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 6692****5458
     *
     * @var string
     */
    public $orderLineId;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderLogisticsStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $refundFee;

    /**
     * @var RefundFeeData
     */
    public $refundFeeData;

    /**
     * @example 阿里云云谷
     *
     * @var string
     */
    public $refunderAddress;

    /**
     * @example 赵先生
     *
     * @var string
     */
    public $refunderName;

    /**
     * @example 182****1334
     *
     * @var string
     */
    public $refunderTel;

    /**
     * @example 331001
     *
     * @var string
     */
    public $refunderZipCode;

    /**
     * @example 841471F6-5D61-1331-8C38-2****B55
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $returnGoodLogisticsStatus;

    /**
     * @example 同意退款
     *
     * @var string
     */
    public $sellerAgreeMsg;

    /**
     * @example 不同意退款
     *
     * @var string
     */
    public $sellerRefuseAgreementMessage;

    /**
     * @example 商品没问题，买家举证无效
     *
     * @var string
     */
    public $sellerRefuseReason;
    protected $_name = [
        'applyDisputeDesc'             => 'applyDisputeDesc',
        'applyReason'                  => 'applyReason',
        'bizClaimType'                 => 'bizClaimType',
        'disputeCreateTime'            => 'disputeCreateTime',
        'disputeDesc'                  => 'disputeDesc',
        'disputeEndTime'               => 'disputeEndTime',
        'disputeId'                    => 'disputeId',
        'disputeStatus'                => 'disputeStatus',
        'orderId'                      => 'orderId',
        'orderLineId'                  => 'orderLineId',
        'orderLogisticsStatus'         => 'orderLogisticsStatus',
        'refundFee'                    => 'refundFee',
        'refundFeeData'                => 'refundFeeData',
        'refunderAddress'              => 'refunderAddress',
        'refunderName'                 => 'refunderName',
        'refunderTel'                  => 'refunderTel',
        'refunderZipCode'              => 'refunderZipCode',
        'requestId'                    => 'requestId',
        'returnGoodLogisticsStatus'    => 'returnGoodLogisticsStatus',
        'sellerAgreeMsg'               => 'sellerAgreeMsg',
        'sellerRefuseAgreementMessage' => 'sellerRefuseAgreementMessage',
        'sellerRefuseReason'           => 'sellerRefuseReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDisputeDesc) {
            $res['applyDisputeDesc'] = $this->applyDisputeDesc;
        }
        if (null !== $this->applyReason) {
            $res['applyReason'] = null !== $this->applyReason ? $this->applyReason->toMap() : null;
        }
        if (null !== $this->bizClaimType) {
            $res['bizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->disputeCreateTime) {
            $res['disputeCreateTime'] = $this->disputeCreateTime;
        }
        if (null !== $this->disputeDesc) {
            $res['disputeDesc'] = $this->disputeDesc;
        }
        if (null !== $this->disputeEndTime) {
            $res['disputeEndTime'] = $this->disputeEndTime;
        }
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
        }
        if (null !== $this->disputeStatus) {
            $res['disputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }
        if (null !== $this->orderLogisticsStatus) {
            $res['orderLogisticsStatus'] = $this->orderLogisticsStatus;
        }
        if (null !== $this->refundFee) {
            $res['refundFee'] = $this->refundFee;
        }
        if (null !== $this->refundFeeData) {
            $res['refundFeeData'] = null !== $this->refundFeeData ? $this->refundFeeData->toMap() : null;
        }
        if (null !== $this->refunderAddress) {
            $res['refunderAddress'] = $this->refunderAddress;
        }
        if (null !== $this->refunderName) {
            $res['refunderName'] = $this->refunderName;
        }
        if (null !== $this->refunderTel) {
            $res['refunderTel'] = $this->refunderTel;
        }
        if (null !== $this->refunderZipCode) {
            $res['refunderZipCode'] = $this->refunderZipCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->returnGoodLogisticsStatus) {
            $res['returnGoodLogisticsStatus'] = $this->returnGoodLogisticsStatus;
        }
        if (null !== $this->sellerAgreeMsg) {
            $res['sellerAgreeMsg'] = $this->sellerAgreeMsg;
        }
        if (null !== $this->sellerRefuseAgreementMessage) {
            $res['sellerRefuseAgreementMessage'] = $this->sellerRefuseAgreementMessage;
        }
        if (null !== $this->sellerRefuseReason) {
            $res['sellerRefuseReason'] = $this->sellerRefuseReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyDisputeDesc'])) {
            $model->applyDisputeDesc = $map['applyDisputeDesc'];
        }
        if (isset($map['applyReason'])) {
            $model->applyReason = ApplyReason::fromMap($map['applyReason']);
        }
        if (isset($map['bizClaimType'])) {
            $model->bizClaimType = $map['bizClaimType'];
        }
        if (isset($map['disputeCreateTime'])) {
            $model->disputeCreateTime = $map['disputeCreateTime'];
        }
        if (isset($map['disputeDesc'])) {
            $model->disputeDesc = $map['disputeDesc'];
        }
        if (isset($map['disputeEndTime'])) {
            $model->disputeEndTime = $map['disputeEndTime'];
        }
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }
        if (isset($map['disputeStatus'])) {
            $model->disputeStatus = $map['disputeStatus'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }
        if (isset($map['orderLogisticsStatus'])) {
            $model->orderLogisticsStatus = $map['orderLogisticsStatus'];
        }
        if (isset($map['refundFee'])) {
            $model->refundFee = $map['refundFee'];
        }
        if (isset($map['refundFeeData'])) {
            $model->refundFeeData = RefundFeeData::fromMap($map['refundFeeData']);
        }
        if (isset($map['refunderAddress'])) {
            $model->refunderAddress = $map['refunderAddress'];
        }
        if (isset($map['refunderName'])) {
            $model->refunderName = $map['refunderName'];
        }
        if (isset($map['refunderTel'])) {
            $model->refunderTel = $map['refunderTel'];
        }
        if (isset($map['refunderZipCode'])) {
            $model->refunderZipCode = $map['refunderZipCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['returnGoodLogisticsStatus'])) {
            $model->returnGoodLogisticsStatus = $map['returnGoodLogisticsStatus'];
        }
        if (isset($map['sellerAgreeMsg'])) {
            $model->sellerAgreeMsg = $map['sellerAgreeMsg'];
        }
        if (isset($map['sellerRefuseAgreementMessage'])) {
            $model->sellerRefuseAgreementMessage = $map['sellerRefuseAgreementMessage'];
        }
        if (isset($map['sellerRefuseReason'])) {
            $model->sellerRefuseReason = $map['sellerRefuseReason'];
        }

        return $model;
    }
}
