<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityRuleRequest extends Model
{
    /**
     * @var int
     */
    public $blockType;

    /**
     * @var int
     */
    public $checker;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $criticalThreshold;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $expectValue;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var bool
     */
    public $openSwitch;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $predictType;

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
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $trend;

    /**
     * @var string
     */
    public $warningThreshold;

    /**
     * @var string
     */
    public $whereCondition;
    protected $_name = [
        'blockType'         => 'BlockType',
        'checker'           => 'Checker',
        'comment'           => 'Comment',
        'criticalThreshold' => 'CriticalThreshold',
        'entityId'          => 'EntityId',
        'expectValue'       => 'ExpectValue',
        'id'                => 'Id',
        'methodName'        => 'MethodName',
        'openSwitch'        => 'OpenSwitch',
        'operator'          => 'Operator',
        'predictType'       => 'PredictType',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'propertyType'      => 'PropertyType',
        'ruleName'          => 'RuleName',
        'ruleType'          => 'RuleType',
        'templateId'        => 'TemplateId',
        'trend'             => 'Trend',
        'warningThreshold'  => 'WarningThreshold',
        'whereCondition'    => 'WhereCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->openSwitch) {
            $res['OpenSwitch'] = $this->openSwitch;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['OpenSwitch'])) {
            $model->openSwitch = $map['OpenSwitch'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PredictType'])) {
            $model->predictType = $map['PredictType'];
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }

        return $model;
    }
}
