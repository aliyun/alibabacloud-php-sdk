<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponseBody;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponseBody\smsSignList\reason;
use AlibabaCloud\Tea\Model;

class smsSignList extends Model
{
    /**
     * @description The approval status of the signature. Valid values:
     *
     *   **AUDIT_STATE_INIT**: The signature is pending approval.
     *   **AUDIT_STATE_PASS**: The signature is approved.
     *   **AUDIT_STATE_NOT_PASS**: The signature is rejected. You can view the reason in the Reason response parameter.
     *   **AUDIT_STATE_CANCEL**: The approval is canceled.
     *
     * @example AUDIT_STATE_NOT_PASS
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The type of the signature scenario. The return value ends with "type". Valid values:
     *
     *   Verification code type
     *   General-purpose type
     *
     * @example Verification code type
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The time when the signature was created. Format: yyyy-MM-dd HH:mm:ss.
     *
     * @example 2020-01-08 16:44:13
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The ticket ID.
     *
     * @example 236****5
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The approval remarks.
     *
     *   If the value of AuditStatus is **AUDIT_STATE_PASS** or **AUDIT_STATE_INIT**, the value of Reason is No Approval Remarks.
     *   If the value of AuditStatus is **AUDIT_STATE_NOT_PASS**, the reason why the signature is rejected is returned.
     *
     * @var reason
     */
    public $reason;

    /**
     * @description The name of the signature.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $signName;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'businessType' => 'BusinessType',
        'createDate'   => 'CreateDate',
        'orderId'      => 'OrderId',
        'reason'       => 'Reason',
        'signName'     => 'SignName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsSignList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
