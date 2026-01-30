<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponseBody\data\applicantInfo;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponseBody\data\couponReceiptUidList;

class data extends Model
{
    /**
     * @var applicantInfo
     */
    public $applicantInfo;

    /**
     * @var string
     */
    public $applicationReason;

    /**
     * @var string
     */
    public $applicationSheetId;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var couponReceiptUidList[]
     */
    public $couponReceiptUidList;

    /**
     * @var string
     */
    public $remainingQuota;

    /**
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'applicantInfo' => 'ApplicantInfo',
        'applicationReason' => 'ApplicationReason',
        'applicationSheetId' => 'ApplicationSheetId',
        'approvalStatus' => 'ApprovalStatus',
        'couponReceiptUidList' => 'CouponReceiptUidList',
        'remainingQuota' => 'RemainingQuota',
        'totalAmount' => 'TotalAmount',
    ];

    public function validate()
    {
        if (null !== $this->applicantInfo) {
            $this->applicantInfo->validate();
        }
        if (\is_array($this->couponReceiptUidList)) {
            Model::validateArray($this->couponReceiptUidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicantInfo) {
            $res['ApplicantInfo'] = null !== $this->applicantInfo ? $this->applicantInfo->toArray($noStream) : $this->applicantInfo;
        }

        if (null !== $this->applicationReason) {
            $res['ApplicationReason'] = $this->applicationReason;
        }

        if (null !== $this->applicationSheetId) {
            $res['ApplicationSheetId'] = $this->applicationSheetId;
        }

        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->couponReceiptUidList) {
            if (\is_array($this->couponReceiptUidList)) {
                $res['CouponReceiptUidList'] = [];
                $n1 = 0;
                foreach ($this->couponReceiptUidList as $item1) {
                    $res['CouponReceiptUidList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remainingQuota) {
            $res['RemainingQuota'] = $this->remainingQuota;
        }

        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
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
        if (isset($map['ApplicantInfo'])) {
            $model->applicantInfo = applicantInfo::fromMap($map['ApplicantInfo']);
        }

        if (isset($map['ApplicationReason'])) {
            $model->applicationReason = $map['ApplicationReason'];
        }

        if (isset($map['ApplicationSheetId'])) {
            $model->applicationSheetId = $map['ApplicationSheetId'];
        }

        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['CouponReceiptUidList'])) {
            if (!empty($map['CouponReceiptUidList'])) {
                $model->couponReceiptUidList = [];
                $n1 = 0;
                foreach ($map['CouponReceiptUidList'] as $item1) {
                    $model->couponReceiptUidList[$n1] = couponReceiptUidList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RemainingQuota'])) {
            $model->remainingQuota = $map['RemainingQuota'];
        }

        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        return $model;
    }
}
