<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetLicenseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class licenseInfo extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $contractNo;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expiredOn;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $licenseId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'accountId' => 'AccountId',
        'beginTime' => 'BeginTime',
        'businessType' => 'BusinessType',
        'contractNo' => 'ContractNo',
        'createTime' => 'CreateTime',
        'expiredOn' => 'ExpiredOn',
        'extraInfo' => 'ExtraInfo',
        'licenseId' => 'LicenseId',
        'modifyTime' => 'ModifyTime',
        'status' => 'Status',
        'type' => 'Type',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
