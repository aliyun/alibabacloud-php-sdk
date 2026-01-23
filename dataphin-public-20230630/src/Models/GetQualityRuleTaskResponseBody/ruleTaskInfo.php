<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityRuleTaskResponseBody;

use AlibabaCloud\Dara\Model;

class ruleTaskInfo extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $bizDateFormat;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $validateObjectName;

    /**
     * @var string
     */
    public $validateObjectType;

    /**
     * @var string
     */
    public $validatePartition;

    /**
     * @var bool
     */
    public $validateSuccess;

    /**
     * @var int
     */
    public $watchId;

    /**
     * @var int
     */
    public $watchTaskId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'bizDateFormat' => 'BizDateFormat',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'ruleId' => 'RuleId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'validateObjectName' => 'ValidateObjectName',
        'validateObjectType' => 'ValidateObjectType',
        'validatePartition' => 'ValidatePartition',
        'validateSuccess' => 'ValidateSuccess',
        'watchId' => 'WatchId',
        'watchTaskId' => 'WatchTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->bizDateFormat) {
            $res['BizDateFormat'] = $this->bizDateFormat;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->validateObjectName) {
            $res['ValidateObjectName'] = $this->validateObjectName;
        }

        if (null !== $this->validateObjectType) {
            $res['ValidateObjectType'] = $this->validateObjectType;
        }

        if (null !== $this->validatePartition) {
            $res['ValidatePartition'] = $this->validatePartition;
        }

        if (null !== $this->validateSuccess) {
            $res['ValidateSuccess'] = $this->validateSuccess;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
        }

        if (null !== $this->watchTaskId) {
            $res['WatchTaskId'] = $this->watchTaskId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['BizDateFormat'])) {
            $model->bizDateFormat = $map['BizDateFormat'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['ValidateObjectName'])) {
            $model->validateObjectName = $map['ValidateObjectName'];
        }

        if (isset($map['ValidateObjectType'])) {
            $model->validateObjectType = $map['ValidateObjectType'];
        }

        if (isset($map['ValidatePartition'])) {
            $model->validatePartition = $map['ValidatePartition'];
        }

        if (isset($map['ValidateSuccess'])) {
            $model->validateSuccess = $map['ValidateSuccess'];
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        if (isset($map['WatchTaskId'])) {
            $model->watchTaskId = $map['WatchTaskId'];
        }

        return $model;
    }
}
