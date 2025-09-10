<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody\quotaApplications\period;

class quotaApplications extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

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
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $envLanguage;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var period
     */
    public $period;

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
     * @var string[]
     */
    public $quotaDimension;

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
        'aliyunUid' => 'AliyunUid',
        'applicationId' => 'ApplicationId',
        'applyTime' => 'ApplyTime',
        'approveValue' => 'ApproveValue',
        'auditReason' => 'AuditReason',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'desireValue' => 'DesireValue',
        'effectiveTime' => 'EffectiveTime',
        'envLanguage' => 'EnvLanguage',
        'expireTime' => 'ExpireTime',
        'noticeType' => 'NoticeType',
        'period' => 'Period',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaArn' => 'QuotaArn',
        'quotaCategory' => 'QuotaCategory',
        'quotaDescription' => 'QuotaDescription',
        'quotaDimension' => 'QuotaDimension',
        'quotaName' => 'QuotaName',
        'quotaUnit' => 'QuotaUnit',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->period) {
            $this->period->validate();
        }
        if (\is_array($this->quotaDimension)) {
            Model::validateArray($this->quotaDimension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

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

        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
        }

        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->envLanguage) {
            $res['EnvLanguage'] = $this->envLanguage;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
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

        if (null !== $this->quotaDimension) {
            if (\is_array($this->quotaDimension)) {
                $res['QuotaDimension'] = [];
                foreach ($this->quotaDimension as $key1 => $value1) {
                    $res['QuotaDimension'][$key1] = $value1;
                }
            }
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

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

        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
        }

        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['EnvLanguage'])) {
            $model->envLanguage = $map['EnvLanguage'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
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

        if (isset($map['QuotaDimension'])) {
            if (!empty($map['QuotaDimension'])) {
                $model->quotaDimension = [];
                foreach ($map['QuotaDimension'] as $key1 => $value1) {
                    $model->quotaDimension[$key1] = $value1;
                }
            }
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
