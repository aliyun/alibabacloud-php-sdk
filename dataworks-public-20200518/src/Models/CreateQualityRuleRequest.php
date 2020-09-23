<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRuleRequest extends Model
{
    /**
     * @var int
     */
    public $blockType;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $checker;

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
    public $methodName;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $propertyType;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $whereCondition;

    /**
     * @var string
     */
    public $criticalThreshold;

    /**
     * @var string
     */
    public $warningThreshold;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $predictType;
    protected $_name = [
        'blockType'         => 'BlockType',
        'entityId'          => 'EntityId',
        'comment'           => 'Comment',
        'checker'           => 'Checker',
        'expectValue'       => 'ExpectValue',
        'trend'             => 'Trend',
        'methodName'        => 'MethodName',
        'operator'          => 'Operator',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'propertyType'      => 'PropertyType',
        'ruleType'          => 'RuleType',
        'whereCondition'    => 'WhereCondition',
        'criticalThreshold' => 'CriticalThreshold',
        'warningThreshold'  => 'WarningThreshold',
        'templateId'        => 'TemplateId',
        'ruleName'          => 'RuleName',
        'predictType'       => 'PredictType',
    ];

    public function validate()
    {
        Model::validateRequired('blockType', $this->blockType, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('ruleType', $this->ruleType, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('predictType', $this->predictType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['PredictType'])) {
            $model->predictType = $map['PredictType'];
        }

        return $model;
    }
}
