<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail\applyReasonText;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail\maxRefundFeeData;
use AlibabaCloud\Tea\Model;

class refundApplicationDetail extends Model
{
    /**
     * @var string
     */
    public $applyDisputeDesc;

    /**
     * @var applyReasonText
     */
    public $applyReasonText;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example 2022-04-02 10:16:10
     *
     * @var string
     */
    public $disputeCreateTime;

    /**
     * @var string
     */
    public $disputeDesc;

    /**
     * @example 2022-04-02 10:16:12
     *
     * @var string
     */
    public $disputeEndTime;

    /**
     * @example 141******33
     *
     * @var int
     */
    public $disputeId;

    /**
     * @var int
     */
    public $disputeStatus;

    /**
     * @var int
     */
    public $disputeType;

    /**
     * @example 46******11
     *
     * @var string
     */
    public $lmOrderId;

    /**
     * @var maxRefundFeeData
     */
    public $maxRefundFeeData;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderLogisticsStatus;

    /**
     * @example 10
     *
     * @var int
     */
    public $realRefundFee;

    /**
     * @example 10
     *
     * @var int
     */
    public $refundFee;

    /**
     * @var string
     */
    public $refunderAddress;

    /**
     * @var string
     */
    public $refunderName;

    /**
     * @example 158****1234
     *
     * @var string
     */
    public $refunderTel;

    /**
     * @var string
     */
    public $refunderZipCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnGoodCount;

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

    /**
     * @example 44******62
     *
     * @var string
     */
    public $subLmOrderId;
    protected $_name = [
        'applyDisputeDesc'             => 'ApplyDisputeDesc',
        'applyReasonText'              => 'ApplyReasonText',
        'bizClaimType'                 => 'BizClaimType',
        'disputeCreateTime'            => 'DisputeCreateTime',
        'disputeDesc'                  => 'DisputeDesc',
        'disputeEndTime'               => 'DisputeEndTime',
        'disputeId'                    => 'DisputeId',
        'disputeStatus'                => 'DisputeStatus',
        'disputeType'                  => 'DisputeType',
        'lmOrderId'                    => 'LmOrderId',
        'maxRefundFeeData'             => 'MaxRefundFeeData',
        'orderLogisticsStatus'         => 'OrderLogisticsStatus',
        'realRefundFee'                => 'RealRefundFee',
        'refundFee'                    => 'RefundFee',
        'refunderAddress'              => 'RefunderAddress',
        'refunderName'                 => 'RefunderName',
        'refunderTel'                  => 'RefunderTel',
        'refunderZipCode'              => 'RefunderZipCode',
        'returnGoodCount'              => 'ReturnGoodCount',
        'returnGoodLogisticsStatus'    => 'ReturnGoodLogisticsStatus',
        'sellerAgreeMsg'               => 'SellerAgreeMsg',
        'sellerRefuseAgreementMessage' => 'SellerRefuseAgreementMessage',
        'sellerRefuseReason'           => 'SellerRefuseReason',
        'subLmOrderId'                 => 'SubLmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDisputeDesc) {
            $res['ApplyDisputeDesc'] = $this->applyDisputeDesc;
        }
        if (null !== $this->applyReasonText) {
            $res['ApplyReasonText'] = null !== $this->applyReasonText ? $this->applyReasonText->toMap() : null;
        }
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->disputeCreateTime) {
            $res['DisputeCreateTime'] = $this->disputeCreateTime;
        }
        if (null !== $this->disputeDesc) {
            $res['DisputeDesc'] = $this->disputeDesc;
        }
        if (null !== $this->disputeEndTime) {
            $res['DisputeEndTime'] = $this->disputeEndTime;
        }
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->disputeStatus) {
            $res['DisputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->disputeType) {
            $res['DisputeType'] = $this->disputeType;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->maxRefundFeeData) {
            $res['MaxRefundFeeData'] = null !== $this->maxRefundFeeData ? $this->maxRefundFeeData->toMap() : null;
        }
        if (null !== $this->orderLogisticsStatus) {
            $res['OrderLogisticsStatus'] = $this->orderLogisticsStatus;
        }
        if (null !== $this->realRefundFee) {
            $res['RealRefundFee'] = $this->realRefundFee;
        }
        if (null !== $this->refundFee) {
            $res['RefundFee'] = $this->refundFee;
        }
        if (null !== $this->refunderAddress) {
            $res['RefunderAddress'] = $this->refunderAddress;
        }
        if (null !== $this->refunderName) {
            $res['RefunderName'] = $this->refunderName;
        }
        if (null !== $this->refunderTel) {
            $res['RefunderTel'] = $this->refunderTel;
        }
        if (null !== $this->refunderZipCode) {
            $res['RefunderZipCode'] = $this->refunderZipCode;
        }
        if (null !== $this->returnGoodCount) {
            $res['ReturnGoodCount'] = $this->returnGoodCount;
        }
        if (null !== $this->returnGoodLogisticsStatus) {
            $res['ReturnGoodLogisticsStatus'] = $this->returnGoodLogisticsStatus;
        }
        if (null !== $this->sellerAgreeMsg) {
            $res['SellerAgreeMsg'] = $this->sellerAgreeMsg;
        }
        if (null !== $this->sellerRefuseAgreementMessage) {
            $res['SellerRefuseAgreementMessage'] = $this->sellerRefuseAgreementMessage;
        }
        if (null !== $this->sellerRefuseReason) {
            $res['SellerRefuseReason'] = $this->sellerRefuseReason;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
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
        if (isset($map['ApplyDisputeDesc'])) {
            $model->applyDisputeDesc = $map['ApplyDisputeDesc'];
        }
        if (isset($map['ApplyReasonText'])) {
            $model->applyReasonText = applyReasonText::fromMap($map['ApplyReasonText']);
        }
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['DisputeCreateTime'])) {
            $model->disputeCreateTime = $map['DisputeCreateTime'];
        }
        if (isset($map['DisputeDesc'])) {
            $model->disputeDesc = $map['DisputeDesc'];
        }
        if (isset($map['DisputeEndTime'])) {
            $model->disputeEndTime = $map['DisputeEndTime'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['DisputeStatus'])) {
            $model->disputeStatus = $map['DisputeStatus'];
        }
        if (isset($map['DisputeType'])) {
            $model->disputeType = $map['DisputeType'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['MaxRefundFeeData'])) {
            $model->maxRefundFeeData = maxRefundFeeData::fromMap($map['MaxRefundFeeData']);
        }
        if (isset($map['OrderLogisticsStatus'])) {
            $model->orderLogisticsStatus = $map['OrderLogisticsStatus'];
        }
        if (isset($map['RealRefundFee'])) {
            $model->realRefundFee = $map['RealRefundFee'];
        }
        if (isset($map['RefundFee'])) {
            $model->refundFee = $map['RefundFee'];
        }
        if (isset($map['RefunderAddress'])) {
            $model->refunderAddress = $map['RefunderAddress'];
        }
        if (isset($map['RefunderName'])) {
            $model->refunderName = $map['RefunderName'];
        }
        if (isset($map['RefunderTel'])) {
            $model->refunderTel = $map['RefunderTel'];
        }
        if (isset($map['RefunderZipCode'])) {
            $model->refunderZipCode = $map['RefunderZipCode'];
        }
        if (isset($map['ReturnGoodCount'])) {
            $model->returnGoodCount = $map['ReturnGoodCount'];
        }
        if (isset($map['ReturnGoodLogisticsStatus'])) {
            $model->returnGoodLogisticsStatus = $map['ReturnGoodLogisticsStatus'];
        }
        if (isset($map['SellerAgreeMsg'])) {
            $model->sellerAgreeMsg = $map['SellerAgreeMsg'];
        }
        if (isset($map['SellerRefuseAgreementMessage'])) {
            $model->sellerRefuseAgreementMessage = $map['SellerRefuseAgreementMessage'];
        }
        if (isset($map['SellerRefuseReason'])) {
            $model->sellerRefuseReason = $map['SellerRefuseReason'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }

        return $model;
    }
}
