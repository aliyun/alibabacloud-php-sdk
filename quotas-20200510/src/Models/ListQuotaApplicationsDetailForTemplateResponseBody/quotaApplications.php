<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody\quotaApplications\period;
use AlibabaCloud\Tea\Model;

class quotaApplications extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 175376458581****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @description The ID of the quota increase application.
     *
     * @example b926571d-cc09-4711-b547-58a615f0****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The time when the quota increase application was submitted. The value is displayed in UTC.
     *
     * @example 2021-01-15T09:13:53Z
     *
     * @var string
     */
    public $applyTime;

    /**
     * @description The quota value that is approved.
     *
     * @example 101
     *
     * @var float
     */
    public $approveValue;

    /**
     * @description The approval result of the quota increase application.
     *
     * @example Agree
     *
     * @var string
     */
    public $auditReason;

    /**
     * @description The ID of the quota application batch.
     *
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @description The requested value of the quota.
     *
     * @example 60
     *
     * @var float
     */
    public $desireValue;

    /**
     * @description The start time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2021-01-15T11:46:25Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The language of the quota alert notification. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $envLanguage;

    /**
     * @description The end time of the validity period of the quota. The value is displayed in UTC.
     *
     * @example 2021-01-17T11:46:25Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether Quota Center sends a notification about the application result. Valid values:
     *
     *   0: no
     *   3: yes
     *
     * @example 3
     *
     * @var int
     */
    public $noticeType;

    /**
     * @description The calculation cycle of the quota.
     *
     * @var period
     */
    public $period;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The quota ID.
     *
     * @example ecs.n1.large
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the quota.
     *
     * @example acs:quotas:*:120886317861****:quota/csk/q_i5uzm3
     *
     * @var string
     */
    public $quotaArn;

    /**
     * @description The quota type. Valid values:
     *
     *   CommonQuota (default): general quota
     *   WhiteListLabel: privilege
     *   FlowControl: API rate limit
     *
     * @example CommonQuota
     *
     * @var string
     */
    public $quotaCategory;

    /**
     * @description The description of the quota.
     *
     * @example The maximum number of nodes in a cluster
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The quota dimensions.
     *
     * @var string[]
     */
    public $quotaDimension;

    /**
     * @description The quota name.
     *
     * @example Maximum Number of Nodes
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The unit of the quota.
     *
     * @example GiB
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The reason for the quota increase application.
     *
     * @example Business expansion
     *
     * @var string
     */
    public $reason;

    /**
     * @description The approval status of the quota increase application. Valid values:
     *
     *   Disagree: The application is rejected.
     *   Agree: The application is approved.
     *   Process: The application is pending approval.
     *   Cancel: The application is canceled.
     *
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
