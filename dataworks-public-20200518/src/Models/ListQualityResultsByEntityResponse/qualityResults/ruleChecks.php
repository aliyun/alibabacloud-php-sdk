<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\qualityResults;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\qualityResults\ruleChecks\referenceValue;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\qualityResults\ruleChecks\sampleValue;
use AlibabaCloud\Tea\Model;

class ruleChecks extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $property;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var string
     */
    public $dateType;

    /**
     * @var string
     */
    public $actualExpression;

    /**
     * @var string
     */
    public $matchExpression;

    /**
     * @var int
     */
    public $blockType;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $checkResultStatus;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $whereCondition;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $timeCost;

    /**
     * @var string
     */
    public $externalType;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var bool
     */
    public $discreteCheck;

    /**
     * @var bool
     */
    public $fixedCheck;

    /**
     * @var string
     */
    public $trend;

    /**
     * @var float
     */
    public $warningThreshold;

    /**
     * @var float
     */
    public $criticalThreshold;

    /**
     * @var float
     */
    public $expectValue;

    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tableName;

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
    public $resultString;

    /**
     * @var int
     */
    public $checkerId;

    /**
     * @var int
     */
    public $checkerType;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var bool
     */
    public $isPrediction;

    /**
     * @var float
     */
    public $upperValue;

    /**
     * @var float
     */
    public $lowerValue;

    /**
     * @var string
     */
    public $checkerName;

    /**
     * @var referenceValue[]
     */
    public $referenceValue;

    /**
     * @var sampleValue[]
     */
    public $sampleValue;
    protected $_name = [
        'id'                => 'Id',
        'taskId'            => 'TaskId',
        'entityId'          => 'EntityId',
        'ruleId'            => 'RuleId',
        'property'          => 'Property',
        'bizDate'           => 'BizDate',
        'dateType'          => 'DateType',
        'actualExpression'  => 'ActualExpression',
        'matchExpression'   => 'MatchExpression',
        'blockType'         => 'BlockType',
        'checkResult'       => 'CheckResult',
        'checkResultStatus' => 'CheckResultStatus',
        'methodName'        => 'MethodName',
        'comment'           => 'Comment',
        'whereCondition'    => 'WhereCondition',
        'beginTime'         => 'BeginTime',
        'endTime'           => 'EndTime',
        'timeCost'          => 'TimeCost',
        'externalType'      => 'ExternalType',
        'externalId'        => 'ExternalId',
        'discreteCheck'     => 'DiscreteCheck',
        'fixedCheck'        => 'FixedCheck',
        'trend'             => 'Trend',
        'warningThreshold'  => 'WarningThreshold',
        'criticalThreshold' => 'CriticalThreshold',
        'expectValue'       => 'ExpectValue',
        'op'                => 'Op',
        'projectName'       => 'ProjectName',
        'tableName'         => 'TableName',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
        'resultString'      => 'ResultString',
        'checkerId'         => 'CheckerId',
        'checkerType'       => 'CheckerType',
        'ruleName'          => 'RuleName',
        'isPrediction'      => 'IsPrediction',
        'upperValue'        => 'UpperValue',
        'lowerValue'        => 'LowerValue',
        'checkerName'       => 'CheckerName',
        'referenceValue'    => 'ReferenceValue',
        'sampleValue'       => 'SampleValue',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('property', $this->property, true);
        Model::validateRequired('bizDate', $this->bizDate, true);
        Model::validateRequired('dateType', $this->dateType, true);
        Model::validateRequired('actualExpression', $this->actualExpression, true);
        Model::validateRequired('matchExpression', $this->matchExpression, true);
        Model::validateRequired('blockType', $this->blockType, true);
        Model::validateRequired('checkResult', $this->checkResult, true);
        Model::validateRequired('checkResultStatus', $this->checkResultStatus, true);
        Model::validateRequired('methodName', $this->methodName, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('whereCondition', $this->whereCondition, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('timeCost', $this->timeCost, true);
        Model::validateRequired('externalType', $this->externalType, true);
        Model::validateRequired('externalId', $this->externalId, true);
        Model::validateRequired('discreteCheck', $this->discreteCheck, true);
        Model::validateRequired('fixedCheck', $this->fixedCheck, true);
        Model::validateRequired('trend', $this->trend, true);
        Model::validateRequired('warningThreshold', $this->warningThreshold, true);
        Model::validateRequired('criticalThreshold', $this->criticalThreshold, true);
        Model::validateRequired('expectValue', $this->expectValue, true);
        Model::validateRequired('op', $this->op, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('resultString', $this->resultString, true);
        Model::validateRequired('checkerId', $this->checkerId, true);
        Model::validateRequired('checkerType', $this->checkerType, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('isPrediction', $this->isPrediction, true);
        Model::validateRequired('upperValue', $this->upperValue, true);
        Model::validateRequired('lowerValue', $this->lowerValue, true);
        Model::validateRequired('checkerName', $this->checkerName, true);
        Model::validateRequired('referenceValue', $this->referenceValue, true);
        Model::validateRequired('sampleValue', $this->sampleValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->actualExpression) {
            $res['ActualExpression'] = $this->actualExpression;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->checkResultStatus) {
            $res['CheckResultStatus'] = $this->checkResultStatus;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
        }
        if (null !== $this->externalType) {
            $res['ExternalType'] = $this->externalType;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->discreteCheck) {
            $res['DiscreteCheck'] = $this->discreteCheck;
        }
        if (null !== $this->fixedCheck) {
            $res['FixedCheck'] = $this->fixedCheck;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->resultString) {
            $res['ResultString'] = $this->resultString;
        }
        if (null !== $this->checkerId) {
            $res['CheckerId'] = $this->checkerId;
        }
        if (null !== $this->checkerType) {
            $res['CheckerType'] = $this->checkerType;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->isPrediction) {
            $res['IsPrediction'] = $this->isPrediction;
        }
        if (null !== $this->upperValue) {
            $res['UpperValue'] = $this->upperValue;
        }
        if (null !== $this->lowerValue) {
            $res['LowerValue'] = $this->lowerValue;
        }
        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
        }
        if (null !== $this->referenceValue) {
            $res['ReferenceValue'] = [];
            if (null !== $this->referenceValue && \is_array($this->referenceValue)) {
                $n = 0;
                foreach ($this->referenceValue as $item) {
                    $res['ReferenceValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sampleValue) {
            $res['SampleValue'] = [];
            if (null !== $this->sampleValue && \is_array($this->sampleValue)) {
                $n = 0;
                foreach ($this->sampleValue as $item) {
                    $res['SampleValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleChecks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['ActualExpression'])) {
            $model->actualExpression = $map['ActualExpression'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['CheckResultStatus'])) {
            $model->checkResultStatus = $map['CheckResultStatus'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }
        if (isset($map['ExternalType'])) {
            $model->externalType = $map['ExternalType'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['DiscreteCheck'])) {
            $model->discreteCheck = $map['DiscreteCheck'];
        }
        if (isset($map['FixedCheck'])) {
            $model->fixedCheck = $map['FixedCheck'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['ResultString'])) {
            $model->resultString = $map['ResultString'];
        }
        if (isset($map['CheckerId'])) {
            $model->checkerId = $map['CheckerId'];
        }
        if (isset($map['CheckerType'])) {
            $model->checkerType = $map['CheckerType'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['IsPrediction'])) {
            $model->isPrediction = $map['IsPrediction'];
        }
        if (isset($map['UpperValue'])) {
            $model->upperValue = $map['UpperValue'];
        }
        if (isset($map['LowerValue'])) {
            $model->lowerValue = $map['LowerValue'];
        }
        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
        }
        if (isset($map['ReferenceValue'])) {
            if (!empty($map['ReferenceValue'])) {
                $model->referenceValue = [];
                $n                     = 0;
                foreach ($map['ReferenceValue'] as $item) {
                    $model->referenceValue[$n++] = null !== $item ? referenceValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SampleValue'])) {
            if (!empty($map['SampleValue'])) {
                $model->sampleValue = [];
                $n                  = 0;
                foreach ($map['SampleValue'] as $item) {
                    $model->sampleValue[$n++] = null !== $item ? sampleValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
