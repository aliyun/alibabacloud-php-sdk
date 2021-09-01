<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail\applyReasonText;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail\maxRefundFeeData;
use AlibabaCloud\Tea\Model;

class refundApplicationDetail extends Model
{
    /**
     * @var int
     */
    public $disputeType;

    /**
     * @var string
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $refunderName;

    /**
     * @var string
     */
    public $sellerAgreeMsg;

    /**
     * @var int
     */
    public $returnGoodLogisticsStatus;

    /**
     * @var string
     */
    public $disputeDesc;

    /**
     * @var string
     */
    public $refunderAddress;

    /**
     * @var int
     */
    public $returnGoodCount;

    /**
     * @var int
     */
    public $disputeId;

    /**
     * @var string
     */
    public $disputeEndTime;

    /**
     * @var int
     */
    public $orderLogisticsStatus;

    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var int
     */
    public $realRefundFee;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var string
     */
    public $sellerRefuseAgreementMessage;

    /**
     * @var string
     */
    public $disputeCreateTime;

    /**
     * @var string
     */
    public $refunderTel;

    /**
     * @var string
     */
    public $sellerRefuseReason;

    /**
     * @var string
     */
    public $subLmOrderId;

    /**
     * @var string
     */
    public $applyDisputeDesc;

    /**
     * @var int
     */
    public $disputeStatus;

    /**
     * @var string
     */
    public $refunderZipCode;

    /**
     * @var maxRefundFeeData
     */
    public $maxRefundFeeData;

    /**
     * @var applyReasonText
     */
    public $applyReasonText;
    protected $_name = [
        'disputeType'                  => 'DisputeType',
        'lmOrderId'                    => 'LmOrderId',
        'refunderName'                 => 'RefunderName',
        'sellerAgreeMsg'               => 'SellerAgreeMsg',
        'returnGoodLogisticsStatus'    => 'ReturnGoodLogisticsStatus',
        'disputeDesc'                  => 'DisputeDesc',
        'refunderAddress'              => 'RefunderAddress',
        'returnGoodCount'              => 'ReturnGoodCount',
        'disputeId'                    => 'DisputeId',
        'disputeEndTime'               => 'DisputeEndTime',
        'orderLogisticsStatus'         => 'OrderLogisticsStatus',
        'bizClaimType'                 => 'BizClaimType',
        'realRefundFee'                => 'RealRefundFee',
        'refundFee'                    => 'RefundFee',
        'sellerRefuseAgreementMessage' => 'SellerRefuseAgreementMessage',
        'disputeCreateTime'            => 'DisputeCreateTime',
        'refunderTel'                  => 'RefunderTel',
        'sellerRefuseReason'           => 'SellerRefuseReason',
        'subLmOrderId'                 => 'SubLmOrderId',
        'applyDisputeDesc'             => 'ApplyDisputeDesc',
        'disputeStatus'                => 'DisputeStatus',
        'refunderZipCode'              => 'RefunderZipCode',
        'maxRefundFeeData'             => 'MaxRefundFeeData',
        'applyReasonText'              => 'ApplyReasonText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disputeType) {
            $res['DisputeType'] = $this->disputeType;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->refunderName) {
            $res['RefunderName'] = $this->refunderName;
        }
        if (null !== $this->sellerAgreeMsg) {
            $res['SellerAgreeMsg'] = $this->sellerAgreeMsg;
        }
        if (null !== $this->returnGoodLogisticsStatus) {
            $res['ReturnGoodLogisticsStatus'] = $this->returnGoodLogisticsStatus;
        }
        if (null !== $this->disputeDesc) {
            $res['DisputeDesc'] = $this->disputeDesc;
        }
        if (null !== $this->refunderAddress) {
            $res['RefunderAddress'] = $this->refunderAddress;
        }
        if (null !== $this->returnGoodCount) {
            $res['ReturnGoodCount'] = $this->returnGoodCount;
        }
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->disputeEndTime) {
            $res['DisputeEndTime'] = $this->disputeEndTime;
        }
        if (null !== $this->orderLogisticsStatus) {
            $res['OrderLogisticsStatus'] = $this->orderLogisticsStatus;
        }
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->realRefundFee) {
            $res['RealRefundFee'] = $this->realRefundFee;
        }
        if (null !== $this->refundFee) {
            $res['RefundFee'] = $this->refundFee;
        }
        if (null !== $this->sellerRefuseAgreementMessage) {
            $res['SellerRefuseAgreementMessage'] = $this->sellerRefuseAgreementMessage;
        }
        if (null !== $this->disputeCreateTime) {
            $res['DisputeCreateTime'] = $this->disputeCreateTime;
        }
        if (null !== $this->refunderTel) {
            $res['RefunderTel'] = $this->refunderTel;
        }
        if (null !== $this->sellerRefuseReason) {
            $res['SellerRefuseReason'] = $this->sellerRefuseReason;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->applyDisputeDesc) {
            $res['ApplyDisputeDesc'] = $this->applyDisputeDesc;
        }
        if (null !== $this->disputeStatus) {
            $res['DisputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->refunderZipCode) {
            $res['RefunderZipCode'] = $this->refunderZipCode;
        }
        if (null !== $this->maxRefundFeeData) {
            $res['MaxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toMap() : null;
        }
        if (null !== $this->applyReasonText) {
            $res['ApplyReasonText'] = null !== $this->applyReasonText ? $this->applyReasonText->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundApplicationDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisputeType'])) {
            $model->disputeType = $map['DisputeType'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['RefunderName'])) {
            $model->refunderName = $map['RefunderName'];
        }
        if (isset($map['SellerAgreeMsg'])) {
            $model->sellerAgreeMsg = $map['SellerAgreeMsg'];
        }
        if (isset($map['ReturnGoodLogisticsStatus'])) {
            $model->returnGoodLogisticsStatus = $map['ReturnGoodLogisticsStatus'];
        }
        if (isset($map['DisputeDesc'])) {
            $model->disputeDesc = $map['DisputeDesc'];
        }
        if (isset($map['RefunderAddress'])) {
            $model->refunderAddress = $map['RefunderAddress'];
        }
        if (isset($map['ReturnGoodCount'])) {
            $model->returnGoodCount = $map['ReturnGoodCount'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['DisputeEndTime'])) {
            $model->disputeEndTime = $map['DisputeEndTime'];
        }
        if (isset($map['OrderLogisticsStatus'])) {
            $model->orderLogisticsStatus = $map['OrderLogisticsStatus'];
        }
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['RealRefundFee'])) {
            $model->realRefundFee = $map['RealRefundFee'];
        }
        if (isset($map['RefundFee'])) {
            $model->refundFee = $map['RefundFee'];
        }
        if (isset($map['SellerRefuseAgreementMessage'])) {
            $model->sellerRefuseAgreementMessage = $map['SellerRefuseAgreementMessage'];
        }
        if (isset($map['DisputeCreateTime'])) {
            $model->disputeCreateTime = $map['DisputeCreateTime'];
        }
        if (isset($map['RefunderTel'])) {
            $model->refunderTel = $map['RefunderTel'];
        }
        if (isset($map['SellerRefuseReason'])) {
            $model->sellerRefuseReason = $map['SellerRefuseReason'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['ApplyDisputeDesc'])) {
            $model->applyDisputeDesc = $map['ApplyDisputeDesc'];
        }
        if (isset($map['DisputeStatus'])) {
            $model->disputeStatus = $map['DisputeStatus'];
        }
        if (isset($map['RefunderZipCode'])) {
            $model->refunderZipCode = $map['RefunderZipCode'];
        }
        if (isset($map['MaxRefundFeeData'])) {
            $model->maxRefundFeeData = maxRefundFeeData::fromMap($map['MaxRefundFeeData']);
        }
        if (isset($map['ApplyReasonText'])) {
            $model->applyReasonText = applyReasonText::fromMap($map['ApplyReasonText']);
        }

        return $model;
    }
}
