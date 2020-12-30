<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class quotaApplications extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $quotaUnit;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var mixed[]
     */
    public $dimension;

    /**
     * @var string
     */
    public $quotaDescription;

    /**
     * @var string
     */
    public $quotaArn;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var float
     */
    public $approveValue;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $auditReason;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'           => 'Status',
        'comment'          => 'Comment',
        'expireTime'       => 'ExpireTime',
        'quotaUnit'        => 'QuotaUnit',
        'desireValue'      => 'DesireValue',
        'noticeType'       => 'NoticeType',
        'quotaActionCode'  => 'QuotaActionCode',
        'dimension'        => 'Dimension',
        'quotaDescription' => 'QuotaDescription',
        'quotaArn'         => 'QuotaArn',
        'effectiveTime'    => 'EffectiveTime',
        'approveValue'     => 'ApproveValue',
        'quotaName'        => 'QuotaName',
        'applicationId'    => 'ApplicationId',
        'auditReason'      => 'AuditReason',
        'reason'           => 'Reason',
        'applyTime'        => 'ApplyTime',
        'productCode'      => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }
        if (null !== $this->quotaArn) {
            $res['QuotaArn'] = $this->quotaArn;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->approveValue) {
            $res['ApproveValue'] = $this->approveValue;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->auditReason) {
            $res['AuditReason'] = $this->auditReason;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }
        if (isset($map['QuotaArn'])) {
            $model->quotaArn = $map['QuotaArn'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ApproveValue'])) {
            $model->approveValue = $map['ApproveValue'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['AuditReason'])) {
            $model->auditReason = $map['AuditReason'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
