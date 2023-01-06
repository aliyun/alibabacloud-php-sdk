<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponseBody\quotaApplications\period;
use AlibabaCloud\Tea\Model;

class quotaApplications extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example b926571d-cc09-4711-b547-58a615f0****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The time when the application was submitted.
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
     * @description The result of the application.
     *
     * @var string
     */
    public $auditReason;

    /**
     * @description The remarks of the application.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The quota value that is approved.
     *
     * @example 101
     *
     * @var float
     */
    public $desireValue;

    /**
     * @description The quota dimension of the application.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $dimension;

    /**
     * @description The time when the application took effect.
     *
     * @example 2021-01-15T11:46:25Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the application expired.
     *
     * @example 2021-01-17T11:46:25Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether Quota Center sends a notification about the application result. Valid values:
     *
     *   0: Quota Center sends a notification.
     *   3: Quota Center does not send a notification.
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
     * @description The abbreviation of the cloud service name.
     *
     * @example csk
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_i5uzm3
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
     * @description The description of the quota.
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The name of the quota.
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The unit of the quota.
     *
     * @example Node
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The reason for the application.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The status of the application. Valid values:
     *
     *   Disagree: The application is rejected.
     *   Agree: The application is approved.
     *   Process: The application is pending approval.
     *   Cancel: The application is closed.
     *
     * @example Agree
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId'    => 'ApplicationId',
        'applyTime'        => 'ApplyTime',
        'approveValue'     => 'ApproveValue',
        'auditReason'      => 'AuditReason',
        'comment'          => 'Comment',
        'desireValue'      => 'DesireValue',
        'dimension'        => 'Dimension',
        'effectiveTime'    => 'EffectiveTime',
        'expireTime'       => 'ExpireTime',
        'noticeType'       => 'NoticeType',
        'period'           => 'Period',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaArn'         => 'QuotaArn',
        'quotaDescription' => 'QuotaDescription',
        'quotaName'        => 'QuotaName',
        'quotaUnit'        => 'QuotaUnit',
        'reason'           => 'Reason',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
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

    /**
     * @param array $map
     *
     * @return quotaApplications
     */
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
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
