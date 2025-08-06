<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ListLicenseInfosRequest extends Model
{
    /**
     * @var int
     */
    public $accountId;

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
    public $endBeginTime;

    /**
     * @var string
     */
    public $endExpiredOn;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $licenseId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $startBeginTime;

    /**
     * @var string
     */
    public $startExpiredOn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'AccountId',
        'businessType' => 'BusinessType',
        'contractNo' => 'ContractNo',
        'customerId' => 'CustomerId',
        'endBeginTime' => 'EndBeginTime',
        'endExpiredOn' => 'EndExpiredOn',
        'extraInfo' => 'ExtraInfo',
        'licenseId' => 'LicenseId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'startBeginTime' => 'StartBeginTime',
        'startExpiredOn' => 'StartExpiredOn',
        'status' => 'Status',
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

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->endBeginTime) {
            $res['EndBeginTime'] = $this->endBeginTime;
        }

        if (null !== $this->endExpiredOn) {
            $res['EndExpiredOn'] = $this->endExpiredOn;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->startBeginTime) {
            $res['StartBeginTime'] = $this->startBeginTime;
        }

        if (null !== $this->startExpiredOn) {
            $res['StartExpiredOn'] = $this->startExpiredOn;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['EndBeginTime'])) {
            $model->endBeginTime = $map['EndBeginTime'];
        }

        if (isset($map['EndExpiredOn'])) {
            $model->endExpiredOn = $map['EndExpiredOn'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['StartBeginTime'])) {
            $model->startBeginTime = $map['StartBeginTime'];
        }

        if (isset($map['StartExpiredOn'])) {
            $model->startExpiredOn = $map['StartExpiredOn'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
