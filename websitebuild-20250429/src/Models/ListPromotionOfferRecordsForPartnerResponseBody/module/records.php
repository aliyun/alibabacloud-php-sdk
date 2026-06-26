<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionOfferRecordsForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $activityCode;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $employeeCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $issuanceTime;

    /**
     * @var string
     */
    public $offerSnapshot;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'activityCode' => 'ActivityCode',
        'activityName' => 'ActivityName',
        'employeeCode' => 'EmployeeCode',
        'failReason' => 'FailReason',
        'issuanceTime' => 'IssuanceTime',
        'offerSnapshot' => 'OfferSnapshot',
        'recordId' => 'RecordId',
        'remark' => 'Remark',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->employeeCode) {
            $res['EmployeeCode'] = $this->employeeCode;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->issuanceTime) {
            $res['IssuanceTime'] = $this->issuanceTime;
        }

        if (null !== $this->offerSnapshot) {
            $res['OfferSnapshot'] = $this->offerSnapshot;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['EmployeeCode'])) {
            $model->employeeCode = $map['EmployeeCode'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['IssuanceTime'])) {
            $model->issuanceTime = $map['IssuanceTime'];
        }

        if (isset($map['OfferSnapshot'])) {
            $model->offerSnapshot = $map['OfferSnapshot'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
