<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $property;

    /**
     * @var int
     */
    public $methodId;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $whereCondition;

    /**
     * @var string
     */
    public $onDuty;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $blockType;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $predictType;

    /**
     * @var string
     */
    public $warningThreshold;

    /**
     * @var string
     */
    public $criticalThreshold;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $expectValue;

    /**
     * @var string
     */
    public $trend;

    /**
     * @var string
     */
    public $checkerName;

    /**
     * @var int
     */
    public $checker;

    /**
     * @var bool
     */
    public $fixCheck;
    protected $_name = [
        'id'                => 'Id',
        'entityId'          => 'EntityId',
        'property'          => 'Property',
        'methodId'          => 'MethodId',
        'methodName'        => 'MethodName',
        'whereCondition'    => 'WhereCondition',
        'onDuty'            => 'OnDuty',
        'ruleType'          => 'RuleType',
        'blockType'         => 'BlockType',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
        'comment'           => 'Comment',
        'ruleName'          => 'RuleName',
        'predictType'       => 'PredictType',
        'warningThreshold'  => 'WarningThreshold',
        'criticalThreshold' => 'CriticalThreshold',
        'operator'          => 'Operator',
        'expectValue'       => 'ExpectValue',
        'trend'             => 'Trend',
        'checkerName'       => 'CheckerName',
        'checker'           => 'Checker',
        'fixCheck'          => 'FixCheck',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('property', $this->property, true);
        Model::validateRequired('methodId', $this->methodId, true);
        Model::validateRequired('methodName', $this->methodName, true);
        Model::validateRequired('whereCondition', $this->whereCondition, true);
        Model::validateRequired('onDuty', $this->onDuty, true);
        Model::validateRequired('ruleType', $this->ruleType, true);
        Model::validateRequired('blockType', $this->blockType, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('predictType', $this->predictType, true);
        Model::validateRequired('warningThreshold', $this->warningThreshold, true);
        Model::validateRequired('criticalThreshold', $this->criticalThreshold, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('expectValue', $this->expectValue, true);
        Model::validateRequired('trend', $this->trend, true);
        Model::validateRequired('checkerName', $this->checkerName, true);
        Model::validateRequired('checker', $this->checker, true);
        Model::validateRequired('fixCheck', $this->fixCheck, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->fixCheck) {
            $res['FixCheck'] = $this->fixCheck;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['PredictType'])) {
            $model->predictType = $map['PredictType'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['FixCheck'])) {
            $model->fixCheck = $map['FixCheck'];
        }

        return $model;
    }
}
