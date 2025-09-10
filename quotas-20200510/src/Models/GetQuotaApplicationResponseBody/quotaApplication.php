<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class quotaApplication extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var float
     */
    public $approveValue;

    /**
     * @var string
     */
    public $auditReason;

    /**
     * @var int
     */
    public $desireValue;

    /**
     * @var mixed[]
     */
    public $dimension;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $quotaArn;

    /**
     * @var string
     */
    public $quotaCategory;

    /**
     * @var string
     */
    public $quotaDescription;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaUnit;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applyTime' => 'ApplyTime',
        'approveValue' => 'ApproveValue',
        'auditReason' => 'AuditReason',
        'desireValue' => 'DesireValue',
        'dimension' => 'Dimension',
        'effectiveTime' => 'EffectiveTime',
        'expireTime' => 'ExpireTime',
        'noticeType' => 'NoticeType',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaArn' => 'QuotaArn',
        'quotaCategory' => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaName' => 'QuotaName',
        'quotaUnit' => 'QuotaUnit',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->approveValue) {
            $res['ApproveValue'] = $this->approveValue;
        }

        if (null !== $this->auditReason) {
            $res['AuditReason'] = $this->auditReason;
        }

        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }

        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['Dimension'] = [];
                foreach ($this->dimension as $key1 => $value1) {
                    $res['Dimension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        if (null !== $this->quotaArn) {
            $res['QuotaArn'] = $this->quotaArn;
        }

        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }

        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['ApproveValue'])) {
            $model->approveValue = $map['ApproveValue'];
        }

        if (isset($map['AuditReason'])) {
            $model->auditReason = $map['AuditReason'];
        }

        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }

        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = [];
                foreach ($map['Dimension'] as $key1 => $value1) {
                    $model->dimension[$key1] = $value1;
                }
            }
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        if (isset($map['QuotaArn'])) {
            $model->quotaArn = $map['QuotaArn'];
        }

        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }

        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
