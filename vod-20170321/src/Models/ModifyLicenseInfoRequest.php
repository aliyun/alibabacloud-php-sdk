<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ModifyLicenseInfoRequest extends Model
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
     * @var int
     */
    public $customerId;

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
    public $operator;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'AccountId',
        'beginTime' => 'BeginTime',
        'businessType' => 'BusinessType',
        'contractNo' => 'ContractNo',
        'customerId' => 'CustomerId',
        'expiredOn' => 'ExpiredOn',
        'extraInfo' => 'ExtraInfo',
        'licenseId' => 'LicenseId',
        'operator' => 'Operator',
        'type' => 'Type',
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

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
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

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
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

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
