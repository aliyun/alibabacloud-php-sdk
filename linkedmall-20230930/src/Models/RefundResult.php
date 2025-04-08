<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundResult extends Model
{
    /**
     * @var string
     */
    public $applyDisputeDesc;

    /**
     * @var ApplyReason
     */
    public $applyReason;

    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var string
     */
    public $disputeCreateTime;

    /**
     * @var string
     */
    public $disputeDesc;

    /**
     * @var string
     */
    public $disputeEndTime;

    /**
     * @var string
     */
    public $disputeId;

    /**
     * @var int
     */
    public $disputeStatus;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderLineId;

    /**
     * @var int
     */
    public $orderLogisticsStatus;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var RefundFeeData
     */
    public $refundFeeData;

    /**
     * @var string
     */
    public $refunderAddress;

    /**
     * @var string
     */
    public $refunderName;

    /**
     * @var string
     */
    public $refunderTel;

    /**
     * @var string
     */
    public $refunderZipCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $returnGoodLogisticsStatus;

    /**
     * @var string
     */
    public $sellerAgreeMsg;

    /**
     * @var string
     */
    public $sellerRefuseAgreementMessage;

    /**
     * @var string
     */
    public $sellerRefuseReason;
    protected $_name = [
        'applyDisputeDesc' => 'applyDisputeDesc',
        'applyReason' => 'applyReason',
        'bizClaimType' => 'bizClaimType',
        'disputeCreateTime' => 'disputeCreateTime',
        'disputeDesc' => 'disputeDesc',
        'disputeEndTime' => 'disputeEndTime',
        'disputeId' => 'disputeId',
        'disputeStatus' => 'disputeStatus',
        'orderId' => 'orderId',
        'orderLineId' => 'orderLineId',
        'orderLogisticsStatus' => 'orderLogisticsStatus',
        'refundFee' => 'refundFee',
        'refundFeeData' => 'refundFeeData',
        'refunderAddress' => 'refunderAddress',
        'refunderName' => 'refunderName',
        'refunderTel' => 'refunderTel',
        'refunderZipCode' => 'refunderZipCode',
        'requestId' => 'requestId',
        'returnGoodLogisticsStatus' => 'returnGoodLogisticsStatus',
        'sellerAgreeMsg' => 'sellerAgreeMsg',
        'sellerRefuseAgreementMessage' => 'sellerRefuseAgreementMessage',
        'sellerRefuseReason' => 'sellerRefuseReason',
    ];

    public function validate()
    {
        if (null !== $this->applyReason) {
            $this->applyReason->validate();
        }
        if (null !== $this->refundFeeData) {
            $this->refundFeeData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyDisputeDesc) {
            $res['applyDisputeDesc'] = $this->applyDisputeDesc;
        }

        if (null !== $this->applyReason) {
            $res['applyReason'] = null !== $this->applyReason ? $this->applyReason->toArray($noStream) : $this->applyReason;
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
            $res['refundFeeData'] = null !== $this->refundFeeData ? $this->refundFeeData->toArray($noStream) : $this->refundFeeData;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
