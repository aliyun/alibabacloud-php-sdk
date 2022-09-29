<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSchedulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $repeatCycle;

    /**
     * @var int
     */
    public $repeatCycleUnit;

    /**
     * @var int
     */
    public $repeatTimes;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'     => 'CreatedTime',
        'endTime'         => 'EndTime',
        'executeTime'     => 'ExecuteTime',
        'groupId'         => 'GroupId',
        'id'              => 'Id',
        'name'            => 'Name',
        'repeatCycle'     => 'RepeatCycle',
        'repeatCycleUnit' => 'RepeatCycleUnit',
        'repeatTimes'     => 'RepeatTimes',
        'signName'        => 'SignName',
        'signatureId'     => 'SignatureId',
        'status'          => 'Status',
        'templateCode'    => 'TemplateCode',
        'templateId'      => 'TemplateId',
        'updatedTime'     => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->repeatCycle) {
            $res['RepeatCycle'] = $this->repeatCycle;
        }
        if (null !== $this->repeatCycleUnit) {
            $res['RepeatCycleUnit'] = $this->repeatCycleUnit;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RepeatCycle'])) {
            $model->repeatCycle = $map['RepeatCycle'];
        }
        if (isset($map['RepeatCycleUnit'])) {
            $model->repeatCycleUnit = $map['RepeatCycleUnit'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
