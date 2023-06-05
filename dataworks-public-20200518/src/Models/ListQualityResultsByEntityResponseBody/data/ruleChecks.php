<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks\referenceValue;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks\sampleValue;
use AlibabaCloud\Tea\Model;

class ruleChecks extends Model
{
    /**
     * @description The trend of the monitoring result.
     *
     * @example ds=20200912
     *
     * @var string
     */
    public $actualExpression;

    /**
     * @description Indicates whether the monitoring result is the same as the predicted result. Valid values:
     *
     *   true: indicates that the monitoring result is the same as the predicted result.
     *   false: indicates that the monitoring result is different from the predicted result.
     *
     * @example 1600704000000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The partition filter expression.
     *
     * @example 1600704000000
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The name of the table that is monitored.
     *
     * @example 0
     *
     * @var int
     */
    public $blockType;

    /**
     * @description The monitoring type. Valid values:
     *
     *   1: VOLATILITY_CHECK
     *   2: FIXEDVALUE_CHECK
     *
     * @example 0
     *
     * @var int
     */
    public $checkResult;

    /**
     * @description The ID of the monitoring rule.
     *
     * @example 0
     *
     * @var int
     */
    public $checkResultStatus;

    /**
     * @description The method used to collect sample data, such as avg, count, sum, min, max, count_distinct, user_defined, table_count, table_size, table_dt_load_count, table_dt_refuseload_count, null_value, null_value/table_count, (table_count-count_distinct)/table_count, or table_count-count_distinct.
     *
     * @example 7
     *
     * @var int
     */
    public $checkerId;

    /**
     * @description The comparison operator.
     *
     * @example fulx
     *
     * @var string
     */
    public $checkerName;

    /**
     * @description The type of the scheduling cycle. In most cases, the value of this parameter is YMD. This value indicates year, month, and day.
     *
     * @example 1
     *
     * @var int
     */
    public $checkerType;

    /**
     * @description The name of the checker.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the checker.
     *
     * @example 0.5
     *
     * @var float
     */
    public $criticalThreshold;

    /**
     * @description The name of the monitoring rule.
     *
     * @example YMD
     *
     * @var string
     */
    public $dateType;

    /**
     * @description The lower limit of the predicted result. The value of this parameter is automatically generated based on the threshold that you specified.
     *
     * @example true
     *
     * @var bool
     */
    public $discreteCheck;

    /**
     * @description The ID of the partition filter expression.
     *
     * @example 1600704000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the monitoring template.
     *
     * @example 15432322
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The ID of the primary key.
     *
     * @example 200
     *
     * @var float
     */
    public $expectValue;

    /**
     * @description The type of the scheduling system. Only CWF scheduling systems are supported.
     *
     * @example 1112323123
     *
     * @var string
     */
    public $externalId;

    /**
     * @description The string of the monitoring result.
     *
     * @example CWF2
     *
     * @var string
     */
    public $externalType;

    /**
     * @description The partition in the monitored data source table.
     *
     * @example false
     *
     * @var bool
     */
    public $fixedCheck;

    /**
     * @description The check value.
     *
     * @example 121212121
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the monitoring is discrete monitoring. Valid values:
     *
     *   true: indicates that the monitoring is discrete monitoring.
     *   false: indicates that the monitoring is not discrete monitoring.
     *
     * @example true
     *
     * @var bool
     */
    public $isPrediction;

    /**
     * @description The expected value.
     *
     * @example 2344
     *
     * @var float
     */
    public $lowerValue;

    /**
     * @description The time when the monitoring started.
     *
     * @example ds=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @description The filter condition of the monitoring rule.
     *
     * @example count_distinct
     *
     * @var string
     */
    public $methodName;

    /**
     * @description The ID of the node.
     *
     * @example >
     *
     * @var string
     */
    public $op;

    /**
     * @description The threshold for a critical alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements. If a strong rule is used and a critical alert is reported, nodes are blocked.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The check result of the monitoring rule. Valid values:
     *
     *   0: indicates that the data source table is normal.
     *   1: indicates that a warning alert is reported.
     *   2: indicates that a critical alert is reported.
     *
     * @example type
     *
     * @var string
     */
    public $property;

    /**
     * @description The data timestamp. If the monitored business entity is offline data, the value is usually one day before the monitoring is performed.
     *
     * @var referenceValue[]
     */
    public $referenceValue;

    /**
     * @description The name of the compute engine instance or data source for which data quality is monitored.
     *
     * @example test
     *
     * @var string
     */
    public $resultString;

    /**
     * @description The upper limit of the predicted result. The value of this parameter is automatically generated based on the threshold that you specified.
     *
     * @example 123123232
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The time when the monitoring ended.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The current sample value.
     *
     * @var sampleValue[]
     */
    public $sampleValue;

    /**
     * @description The name of the monitoring template.
     *
     * @example dual
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The values of the sample field that are grouped by using the GROUP BY clause. For example, the values of the Gender field are grouped by using the GROUP BY clause. In this case, the values of DiscreteProperty are Male, Female, and null.
     *
     * @example 16008552981681a0d6****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The historical sample values.
     *
     * @example 5
     *
     * @var int
     */
    public $templateId;

    /**
     * @description Indicates whether the monitoring is performed based on a fixed value. Valid values:
     *
     *   true: indicates that the monitoring is performed based on a fixed value.
     *   false: indicates that the monitoring is performed based on a non-fixed value.
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The data timestamp. If the monitored business entity is offline data, the value is usually one day before the monitoring is performed.
     *
     * @example 202
     *
     * @var string
     */
    public $timeCost;

    /**
     * @description The monitoring result. The value of this parameter is the same as the value of the CheckResultStatus parameter. Valid values:
     *
     *   0: indicates that the data source table is normal.
     *   1: indicates that a warning alert is reported.
     *   2: indicates that a critical alert is reported.
     *
     * @example abs
     *
     * @var string
     */
    public $trend;

    /**
     * @description The time that was taken to run the monitoring task. Unit: seconds.
     *
     * @example 25555
     *
     * @var float
     */
    public $upperValue;

    /**
     * @description The description of the monitoring rule.
     *
     * @example 0.1
     *
     * @var float
     */
    public $warningThreshold;

    /**
     * @description The ID of the monitoring task.
     *
     * @example id>0
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
