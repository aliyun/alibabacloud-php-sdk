<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class SubmitAutoAuditUnblockRequest extends Model
{
    /**
     * @var string
     */
    public $assetList;

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
     * @var string
     */
    public $sendCount;

    /**
     * @var string
     */
    public $useDesc;
    protected $_name = [
        'assetList' => 'AssetList',
        'auditor' => 'Auditor',
        'customerUid' => 'CustomerUid',
        'emailType' => 'EmailType',
        'hasUnsubscribe' => 'HasUnsubscribe',
        'sendCount' => 'SendCount',
        'useDesc' => 'UseDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
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

        if (null !== $this->sendCount) {
            $res['SendCount'] = $this->sendCount;
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
        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
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

        if (isset($map['SendCount'])) {
            $model->sendCount = $map['SendCount'];
        }

        if (isset($map['UseDesc'])) {
            $model->useDesc = $map['UseDesc'];
        }

        return $model;
    }
}
