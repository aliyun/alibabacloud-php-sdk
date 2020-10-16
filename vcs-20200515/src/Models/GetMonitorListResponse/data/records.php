<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorListResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $algorithmVendor;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $modifiedDate;

    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $ruleExpression;

    /**
     * @var string
     */
    public $notifierType;

    /**
     * @var string
     */
    public $notifierExtra;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $imageMatch;
    protected $_name = [
        'taskId'          => 'TaskId',
        'status'          => 'Status',
        'monitorType'     => 'MonitorType',
        'ruleName'        => 'RuleName',
        'algorithmVendor' => 'AlgorithmVendor',
        'createDate'      => 'CreateDate',
        'modifiedDate'    => 'ModifiedDate',
        'deviceList'      => 'DeviceList',
        'attributes'      => 'Attributes',
        'ruleExpression'  => 'RuleExpression',
        'notifierType'    => 'NotifierType',
        'notifierExtra'   => 'NotifierExtra',
        'description'     => 'Description',
        'expression'      => 'Expression',
        'imageMatch'      => 'ImageMatch',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('monitorType', $this->monitorType, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('algorithmVendor', $this->algorithmVendor, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('modifiedDate', $this->modifiedDate, true);
        Model::validateRequired('deviceList', $this->deviceList, true);
        Model::validateRequired('attributes', $this->attributes, true);
        Model::validateRequired('ruleExpression', $this->ruleExpression, true);
        Model::validateRequired('notifierType', $this->notifierType, true);
        Model::validateRequired('notifierExtra', $this->notifierExtra, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('expression', $this->expression, true);
        Model::validateRequired('imageMatch', $this->imageMatch, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->notifierExtra) {
            $res['NotifierExtra'] = $this->notifierExtra;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->imageMatch) {
            $res['ImageMatch'] = $this->imageMatch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['NotifierExtra'])) {
            $model->notifierExtra = $map['NotifierExtra'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['ImageMatch'])) {
            $model->imageMatch = $map['ImageMatch'];
        }

        return $model;
    }
}
