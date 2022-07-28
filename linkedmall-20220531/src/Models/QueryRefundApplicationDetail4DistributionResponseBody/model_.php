<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponseBody\model\applyReason;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponseBody\model\refundFeeData;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $applyDisputeDesc;

    /**
     * @var applyReason
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
     * @var string
     */
    public $distributionOrderId;

    /**
     * @var int
     */
    public $orderLogisticsStatus;

    /**
     * @var int
     */
    public $realRefundFee;

    /**
     * @var int
     */
    public $refundFee;

    /**
     * @var refundFeeData
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
     * @var string
     */
    public $subDistributionOrderId;
    protected $_name = [
        'applyDisputeDesc'             => 'ApplyDisputeDesc',
        'applyReason'                  => 'ApplyReason',
        'bizClaimType'                 => 'BizClaimType',
        'disputeCreateTime'            => 'DisputeCreateTime',
        'disputeDesc'                  => 'DisputeDesc',
        'disputeEndTime'               => 'DisputeEndTime',
        'disputeId'                    => 'DisputeId',
        'disputeStatus'                => 'DisputeStatus',
        'disputeType'                  => 'DisputeType',
        'distributionOrderId'          => 'DistributionOrderId',
        'orderLogisticsStatus'         => 'OrderLogisticsStatus',
        'realRefundFee'                => 'RealRefundFee',
        'refundFee'                    => 'RefundFee',
        'refundFeeData'                => 'RefundFeeData',
        'refunderAddress'              => 'RefunderAddress',
        'refunderName'                 => 'RefunderName',
        'refunderTel'                  => 'RefunderTel',
        'refunderZipCode'              => 'RefunderZipCode',
        'returnGoodCount'              => 'ReturnGoodCount',
        'returnGoodLogisticsStatus'    => 'ReturnGoodLogisticsStatus',
        'sellerAgreeMsg'               => 'SellerAgreeMsg',
        'sellerRefuseAgreementMessage' => 'SellerRefuseAgreementMessage',
        'sellerRefuseReason'           => 'SellerRefuseReason',
        'subDistributionOrderId'       => 'SubDistributionOrderId',
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
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = null !== $this->applyReason ? $this->applyReason->toMap() : null;
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
        if (null !== $this->distributionOrderId) {
            $res['DistributionOrderId'] = $this->distributionOrderId;
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
        if (null !== $this->refundFeeData) {
            $res['RefundFeeData'] = null !== $this->refundFeeData ? $this->refundFeeData->toMap() : null;
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
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyDisputeDesc'])) {
            $model->applyDisputeDesc = $map['ApplyDisputeDesc'];
        }
        if (isset($map['ApplyReason'])) {
            $model->applyReason = applyReason::fromMap($map['ApplyReason']);
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
        if (isset($map['DistributionOrderId'])) {
            $model->distributionOrderId = $map['DistributionOrderId'];
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
        if (isset($map['RefundFeeData'])) {
            $model->refundFeeData = refundFeeData::fromMap($map['RefundFeeData']);
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
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }

        return $model;
    }
}
