<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class quotaApplication extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $desireValue;

    /**
     * @var string
     */
    public $quotaActionCode;

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
    public $reason;

    /**
     * @var string
     */
    public $auditReason;

    /**
     * @var string
     */
    public $quotaDescription;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaArn;

    /**
     * @var string
     */
    public $applyTime;
    protected $_name = [
        'status'           => 'Status',
        'desireValue'      => 'DesireValue',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaName'        => 'QuotaName',
        'applicationId'    => 'ApplicationId',
        'reason'           => 'Reason',
        'auditReason'      => 'AuditReason',
        'quotaDescription' => 'QuotaDescription',
        'productCode'      => 'ProductCode',
        'quotaArn'         => 'QuotaArn',
        'applyTime'        => 'ApplyTime',
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
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->auditReason) {
            $res['AuditReason'] = $this->auditReason;
        }
        if (null !== $this->quotaDescription) {
            $res['QuotaDescription'] = $this->quotaDescription;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaArn) {
            $res['QuotaArn'] = $this->quotaArn;
        }
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['AuditReason'])) {
            $model->auditReason = $map['AuditReason'];
        }
        if (isset($map['QuotaDescription'])) {
            $model->quotaDescription = $map['QuotaDescription'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaArn'])) {
            $model->quotaArn = $map['QuotaArn'];
        }
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        return $model;
    }
}
