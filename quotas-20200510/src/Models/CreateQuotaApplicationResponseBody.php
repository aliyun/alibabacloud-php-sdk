<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationResponseBody extends Model
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
     * @description The quota value that is approved.
     *
     * @example 804
     *
     * @var float
     */
    public $approveValue;

    /**
     * @description The result of the application.
     *
     * @example Agree
     *
     * @var string
     */
    public $auditReason;

    /**
     * @description The requested value of the quota.
     *
     * @example 12
     *
     * @var int
     */
    public $desireValue;

    /**
     * @description The quota dimensions.
     *
     * @example {"regionId":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $dimension;

    /**
     * @description The time when the new quota value takes effect.
     *
     * @example 2021-01-19T09:25:56Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the new quota expires.
     *
     * @example 2021-01-20T09:25:56Z
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
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * @example ecs-spec
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the quota.
     *
     * @example acs:quotas:cn-hangzhou:*:quota/ecs/ecs.m2.medium/prepaid/classic/instancetype/cn-hangzhou-b
     *
     * @var string
     */
    public $quotaArn;

    /**
     * @description The description of the quota.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $quotaDescription;

    /**
     * @description The name of the quota.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The unit of the new quota value.
     *
     * @example AMOUNT
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The reason for the application.
     *
     * @example Scale Out
     *
     * @var string
     */
    public $reason;

    /**
     * @description The ID of the request.
     *
     * @example D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the application. Valid values:
     *
     *   Disagree: The application is rejected.
     *   Agree: The application is approved.
     *   Process: The application is being reviewed.
     *   Cancel: The application is canceled.
     *
     * @example Process
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
        'requestId'        => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaApplicationResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
