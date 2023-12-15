<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example damo
     *
     * @var string
     */
    public $algorithmVendor;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @example 2020-06-17 15:09:31
     *
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2213128392012718128
     *
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $expression;

    /**
     * @example 1
     *
     * @var string
     */
    public $imageMatch;

    /**
     * @example 2020-06-17 15:09:31
     *
     * @var string
     */
    public $modifiedDate;

    /**
     * @example face
     *
     * @var string
     */
    public $monitorType;

    /**
     * @example {\"userId\": \"1\" }
     *
     * @var string
     */
    public $notifierExtra;

    /**
     * @example webhook
     *
     * @var string
     */
    public $notifierType;

    /**
     * @var string
     */
    public $ruleExpression;

    /**
     * @example un_mask_match
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 935fc21t2f6c0101a4e4a62f967839f4
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'algorithmVendor' => 'AlgorithmVendor',
        'attributes'      => 'Attributes',
        'createDate'      => 'CreateDate',
        'description'     => 'Description',
        'deviceList'      => 'DeviceList',
        'expression'      => 'Expression',
        'imageMatch'      => 'ImageMatch',
        'modifiedDate'    => 'ModifiedDate',
        'monitorType'     => 'MonitorType',
        'notifierExtra'   => 'NotifierExtra',
        'notifierType'    => 'NotifierType',
        'ruleExpression'  => 'RuleExpression',
        'ruleName'        => 'RuleName',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmVendor) {
            $res['AlgorithmVendor'] = $this->algorithmVendor;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->imageMatch) {
            $res['ImageMatch'] = $this->imageMatch;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->notifierExtra) {
            $res['NotifierExtra'] = $this->notifierExtra;
        }
        if (null !== $this->notifierType) {
            $res['NotifierType'] = $this->notifierType;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AlgorithmVendor'])) {
            $model->algorithmVendor = $map['AlgorithmVendor'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['ImageMatch'])) {
            $model->imageMatch = $map['ImageMatch'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['NotifierExtra'])) {
            $model->notifierExtra = $map['NotifierExtra'];
        }
        if (isset($map['NotifierType'])) {
            $model->notifierType = $map['NotifierType'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
