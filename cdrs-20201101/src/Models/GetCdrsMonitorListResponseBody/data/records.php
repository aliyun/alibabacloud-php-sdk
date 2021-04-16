<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ruleExpression;

    /**
     * @var string
     */
    public $imageMatch;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $notifierType;

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
    public $notifierExtra;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $modifiedDate;

    /**
     * @var string
     */
    public $algorithmVendor;
    protected $_name = [
        'status'          => 'Status',
        'ruleExpression'  => 'RuleExpression',
        'imageMatch'      => 'ImageMatch',
        'monitorType'     => 'MonitorType',
        'createDate'      => 'CreateDate',
        'ruleName'        => 'RuleName',
        'notifierType'    => 'NotifierType',
        'description'     => 'Description',
        'expression'      => 'Expression',
        'notifierExtra'   => 'NotifierExtra',
        'attributes'      => 'Attributes',
        'deviceList'      => 'DeviceList',
        'taskId'          => 'TaskId',
        'modifiedDate'    => 'ModifiedDate',
        'algorithmVendor' => 'AlgorithmVendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->imageMatch) {
            $res['ImageMatch'] = $this->imageMatch;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->notifierExtra) {
            $res['NotifierExtra'] = $this->notifierExtra;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['ImageMatch'])) {
            $model->imageMatch = $map['ImageMatch'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['NotifierExtra'])) {
            $model->notifierExtra = $map['NotifierExtra'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }

        return $model;
    }
}
