<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponseBody\smsSignList\reason;

class smsSignList extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $authorizationLetterId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var reason
     */
    public $reason;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var bool
     */
    public $authorizationLetterAuditPass;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'authorizationLetterId' => 'AuthorizationLetterId',
        'businessType' => 'BusinessType',
        'createDate' => 'CreateDate',
        'orderId' => 'OrderId',
        'reason' => 'Reason',
        'signName' => 'SignName',
        'authorizationLetterAuditPass' => 'authorizationLetterAuditPass',
    ];

    public function validate()
    {
        if (null !== $this->reason) {
            $this->reason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->authorizationLetterId) {
            $res['AuthorizationLetterId'] = $this->authorizationLetterId;
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
            $res['Reason'] = null !== $this->reason ? $this->reason->toArray($noStream) : $this->reason;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->authorizationLetterAuditPass) {
            $res['authorizationLetterAuditPass'] = $this->authorizationLetterAuditPass;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['AuthorizationLetterId'])) {
            $model->authorizationLetterId = $map['AuthorizationLetterId'];
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

        if (isset($map['authorizationLetterAuditPass'])) {
            $model->authorizationLetterAuditPass = $map['authorizationLetterAuditPass'];
        }

        return $model;
    }
}
