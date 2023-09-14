<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody\quotaApplications\period;
use AlibabaCloud\Tea\Model;

class quotaApplications extends Model
{
    /**
     * @example 175376458581****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example b926571d-cc09-4711-b547-58a615f0****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 2021-01-15T09:13:53Z
     *
     * @var string
     */
    public $applyTime;

    /**
     * @example 101
     *
     * @var float
     */
    public $approveValue;

    /**
     * @var string
     */
    public $auditReason;

    /**
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @example 60
     *
     * @var float
     */
    public $desireValue;

    /**
     * @example 2021-01-15T11:46:25Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @example 2021-01-17T11:46:25Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $noticeType;

    /**
     * @var period
     */
    public $period;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example ecs.n1.large
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @example acs:quotas:*:120886317861****:quota/csk/q_i5uzm3
     *
     * @var string
     */
    public $quotaArn;

    /**
     * @example CommonQuota
     *
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
     * @example GiB
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example Agree
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunUid'               => 'AliyunUid',
        'applicationId'           => 'ApplicationId',
        'applyTime'               => 'ApplyTime',
        'approveValue'            => 'ApproveValue',
        'auditReason'             => 'AuditReason',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'desireValue'             => 'DesireValue',
        'effectiveTime'           => 'EffectiveTime',
        'envLanguage'             => 'EnvLanguage',
        'expireTime'              => 'ExpireTime',
        'noticeType'              => 'NoticeType',
        'period'                  => 'Period',
        'productCode'             => 'ProductCode',
        'quotaActionCode'         => 'QuotaActionCode',
        'quotaArn'                => 'QuotaArn',
        'quotaCategory'           => 'QuotaCategory',
        'quotaDescription'        => 'QuotaDescription',
        'quotaDimension'          => 'QuotaDimension',
        'quotaName'               => 'QuotaName',
        'quotaUnit'               => 'QuotaUnit',
        'reason'                  => 'Reason',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Period'] = null !== $this->period ? $this->period->toMap() : null;
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
            $res['QuotaDimension'] = $this->quotaDimension;
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

    /**
     * @param array $map
     *
     * @return quotaApplications
     */
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
            $model->quotaDimension = $map['QuotaDimension'];
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
