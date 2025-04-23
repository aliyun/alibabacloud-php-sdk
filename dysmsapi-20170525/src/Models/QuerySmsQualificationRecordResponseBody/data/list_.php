<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsQualificationRecordResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditTime;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $qualificationGroupName;

    /**
     * @var string
     */
    public $stateName;

    /**
     * @var string
     */
    public $useBySelf;

    /**
     * @var int
     */
    public $workOrderId;
    protected $_name = [
        'auditRemark' => 'AuditRemark',
        'auditTime' => 'AuditTime',
        'companyName' => 'CompanyName',
        'createDate' => 'CreateDate',
        'groupId' => 'GroupId',
        'legalPersonName' => 'LegalPersonName',
        'qualificationGroupName' => 'QualificationGroupName',
        'stateName' => 'StateName',
        'useBySelf' => 'UseBySelf',
        'workOrderId' => 'WorkOrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditRemark) {
            $res['AuditRemark'] = $this->auditRemark;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }

        if (null !== $this->qualificationGroupName) {
            $res['QualificationGroupName'] = $this->qualificationGroupName;
        }

        if (null !== $this->stateName) {
            $res['StateName'] = $this->stateName;
        }

        if (null !== $this->useBySelf) {
            $res['UseBySelf'] = $this->useBySelf;
        }

        if (null !== $this->workOrderId) {
            $res['WorkOrderId'] = $this->workOrderId;
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
        if (isset($map['AuditRemark'])) {
            $model->auditRemark = $map['AuditRemark'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }

        if (isset($map['QualificationGroupName'])) {
            $model->qualificationGroupName = $map['QualificationGroupName'];
        }

        if (isset($map['StateName'])) {
            $model->stateName = $map['StateName'];
        }

        if (isset($map['UseBySelf'])) {
            $model->useBySelf = $map['UseBySelf'];
        }

        if (isset($map['WorkOrderId'])) {
            $model->workOrderId = $map['WorkOrderId'];
        }

        return $model;
    }
}
