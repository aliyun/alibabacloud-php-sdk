<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data\ruleChecks\referenceValue;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data\ruleChecks\sampleValue;
use AlibabaCloud\Tea\Model;

class ruleChecks extends Model
{
    /**
     * @example ds=20200925
     *
     * @var string
     */
    public $actualExpression;

    /**
     * @example 1600704000000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1600704000000
     *
     * @var int
     */
    public $bizDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $blockType;

    /**
     * @example 2
     *
     * @var int
     */
    public $checkResult;

    /**
     * @example 2
     *
     * @var int
     */
    public $checkResultStatus;

    /**
     * @example 7
     *
     * @var int
     */
    public $checkerId;

    /**
     * @example fulx
     *
     * @var string
     */
    public $checkerName;

    /**
     * @example 0
     *
     * @var int
     */
    public $checkerType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 0.6
     *
     * @var float
     */
    public $criticalThreshold;

    /**
     * @example YMD
     *
     * @var string
     */
    public $dateType;

    /**
     * @example true
     *
     * @var bool
     */
    public $discreteCheck;

    /**
     * @example 1600704000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 14534343
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 90
     *
     * @var float
     */
    public $expectValue;

    /**
     * @example 123112232
     *
     * @var string
     */
    public $externalId;

    /**
     * @example CWF2
     *
     * @var string
     */
    public $externalType;

    /**
     * @example false
     *
     * @var bool
     */
    public $fixedCheck;

    /**
     * @example 2231123
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPrediction;

    /**
     * @example 2344
     *
     * @var float
     */
    public $lowerValue;

    /**
     * @example ds=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @example max
     *
     * @var string
     */
    public $methodName;

    /**
     * @example >
     *
     * @var string
     */
    public $op;

    /**
     * @var bool
     */
    public $open;

    /**
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example type
     *
     * @var string
     */
    public $property;

    /**
     * @var referenceValue[]
     */
    public $referenceValue;

    /**
     * @example ResultString
     *
     * @var string
     */
    public $resultString;

    /**
     * @example 123421
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var sampleValue[]
     */
    public $sampleValue;

    /**
     * @example dual
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 16008552981681a0d6****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 5
     *
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example 10
     *
     * @var string
     */
    public $timeCost;

    /**
     * @example up
     *
     * @var string
     */
    public $trend;

    /**
     * @example 22200
     *
     * @var float
     */
    public $upperValue;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $warningThreshold;

    /**
     * @example type!=\"type2\"
     *
     * @var string
     */
    public $whereCondition;
    protected $_name = [
        'actualExpression'  => 'ActualExpression',
        'beginTime'         => 'BeginTime',
        'bizDate'           => 'BizDate',
        'blockType'         => 'BlockType',
        'checkResult'       => 'CheckResult',
        'checkResultStatus' => 'CheckResultStatus',
        'checkerId'         => 'CheckerId',
        'checkerName'       => 'CheckerName',
        'checkerType'       => 'CheckerType',
        'comment'           => 'Comment',
        'criticalThreshold' => 'CriticalThreshold',
        'dateType'          => 'DateType',
        'discreteCheck'     => 'DiscreteCheck',
        'endTime'           => 'EndTime',
        'entityId'          => 'EntityId',
        'expectValue'       => 'ExpectValue',
        'externalId'        => 'ExternalId',
        'externalType'      => 'ExternalType',
        'fixedCheck'        => 'FixedCheck',
        'id'                => 'Id',
        'isPrediction'      => 'IsPrediction',
        'lowerValue'        => 'LowerValue',
        'matchExpression'   => 'MatchExpression',
        'methodName'        => 'MethodName',
        'op'                => 'Op',
        'open'              => 'Open',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'referenceValue'    => 'ReferenceValue',
        'resultString'      => 'ResultString',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
        'sampleValue'       => 'SampleValue',
        'tableName'         => 'TableName',
        'taskId'            => 'TaskId',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
        'timeCost'          => 'TimeCost',
        'trend'             => 'Trend',
        'upperValue'        => 'UpperValue',
        'warningThreshold'  => 'WarningThreshold',
        'whereCondition'    => 'WhereCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualExpression) {
            $res['ActualExpression'] = $this->actualExpression;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
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
        if (null !== $this->checkerId) {
            $res['CheckerId'] = $this->checkerId;
        }
        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
        }
        if (null !== $this->checkerType) {
            $res['CheckerType'] = $this->checkerType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->discreteCheck) {
            $res['DiscreteCheck'] = $this->discreteCheck;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->externalType) {
            $res['ExternalType'] = $this->externalType;
        }
        if (null !== $this->fixedCheck) {
            $res['FixedCheck'] = $this->fixedCheck;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isPrediction) {
            $res['IsPrediction'] = $this->isPrediction;
        }
        if (null !== $this->lowerValue) {
            $res['LowerValue'] = $this->lowerValue;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
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
        if (null !== $this->resultString) {
            $res['ResultString'] = $this->resultString;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->upperValue) {
            $res['UpperValue'] = $this->upperValue;
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
     * @return ruleChecks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualExpression'])) {
            $model->actualExpression = $map['ActualExpression'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
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
        if (isset($map['CheckerId'])) {
            $model->checkerId = $map['CheckerId'];
        }
        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
        }
        if (isset($map['CheckerType'])) {
            $model->checkerType = $map['CheckerType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['DiscreteCheck'])) {
            $model->discreteCheck = $map['DiscreteCheck'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ExternalType'])) {
            $model->externalType = $map['ExternalType'];
        }
        if (isset($map['FixedCheck'])) {
            $model->fixedCheck = $map['FixedCheck'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsPrediction'])) {
            $model->isPrediction = $map['IsPrediction'];
        }
        if (isset($map['LowerValue'])) {
            $model->lowerValue = $map['LowerValue'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
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
        if (isset($map['ResultString'])) {
            $model->resultString = $map['ResultString'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['UpperValue'])) {
            $model->upperValue = $map['UpperValue'];
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
