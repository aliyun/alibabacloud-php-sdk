<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class quotaApplication extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example d314d6ae-867d-484c-9009-3d421a80****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The time when the application was submitted.
     *
     * @example 2021-01-19T09:25:56Z
     *
     * @var string
     */
    public $applyTime;

    /**
     * @description The approved quota value.
     *
     * @example 10
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
     * @description The quota for which you apply.
     *
     * @example 804
     *
     * @var int
     */
    public $desireValue;

    /**
     * @description The quota dimensions.
     *
     * Format: `{"regionId":"Region"}`.
     * @example ["cn-shanghai","cn-hangzhou"]
     *
     * @var mixed[]
     */
    public $dimension;

    /**
     * @description The time when the quota took effect.
     *
     * @example 2021-01-19 15:30:00
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the quota expired.
     *
     * @example 2023-06-29 15:30:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The notification method. Valid values:
     *
     *   0: Quota Center does not send a notification.
     *   1: Quota Center sends an email notification.
     *   2: Quota Center sends an SMS notification.
     *
     * @example 0
     *
     * @var int
     */
    public $noticeType;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_security-groups
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the quota.
     *
     * @example acs:quotas:cn-hangzhou:120886317861****:quota/ecs/q_security-groups/
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
        'desireValue'      => 'DesireValue',
        'dimension'        => 'Dimension',
        'effectiveTime'    => 'EffectiveTime',
        'expireTime'       => 'ExpireTime',
        'noticeType'       => 'NoticeType',
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
     * @return quotaApplication
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
