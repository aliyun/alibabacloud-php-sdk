<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryForOperationResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $auditMemo;

    /**
     * @var int
     */
    public $auditTime;

    /**
     * @var string
     */
    public $auditor;

    /**
     * @var string
     */
    public $customerUid;

    /**
     * @var string
     */
    public $emailType;

    /**
     * @var bool
     */
    public $hasUnsubscribe;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $sendCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $useDesc;
    protected $_name = [
        'applyTime' => 'ApplyTime',
        'assetType' => 'AssetType',
        'auditMemo' => 'AuditMemo',
        'auditTime' => 'AuditTime',
        'auditor' => 'Auditor',
        'customerUid' => 'CustomerUid',
        'emailType' => 'EmailType',
        'hasUnsubscribe' => 'HasUnsubscribe',
        'id' => 'Id',
        'ip' => 'Ip',
        'sendCount' => 'SendCount',
        'status' => 'Status',
        'useDesc' => 'UseDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->auditMemo) {
            $res['AuditMemo'] = $this->auditMemo;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->auditor) {
            $res['Auditor'] = $this->auditor;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->emailType) {
            $res['EmailType'] = $this->emailType;
        }

        if (null !== $this->hasUnsubscribe) {
            $res['HasUnsubscribe'] = $this->hasUnsubscribe;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->sendCount) {
            $res['SendCount'] = $this->sendCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->useDesc) {
            $res['UseDesc'] = $this->useDesc;
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
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AuditMemo'])) {
            $model->auditMemo = $map['AuditMemo'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['Auditor'])) {
            $model->auditor = $map['Auditor'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['EmailType'])) {
            $model->emailType = $map['EmailType'];
        }

        if (isset($map['HasUnsubscribe'])) {
            $model->hasUnsubscribe = $map['HasUnsubscribe'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['SendCount'])) {
            $model->sendCount = $map['SendCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UseDesc'])) {
            $model->useDesc = $map['UseDesc'];
        }

        return $model;
    }
}
