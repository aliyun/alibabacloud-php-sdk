<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody\returnValue;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody\returnValue\results\actualResult;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody\returnValue\results\sampleResult;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $actualExpression;

    /**
     * @var actualResult[]
     */
    public $actualResult;

    /**
     * @var string
     */
    public $bizdate;

    /**
     * @var int
     */
    public $blockType;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var string
     */
    public $checkerName;

    /**
     * @var int
     */
    public $containStrongRule;

    /**
     * @var string
     */
    public $criticalThreshold;

    /**
     * @var string
     */
    public $dateType;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $externalType;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $ifFixedCheck;

    /**
     * @var string
     */
    public $matchExpression;

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
    public $projectName;

    /**
     * @var string
     */
    public $property;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var sampleResult[]
     */
    public $sampleResult;

    /**
     * @var int
     */
    public $taskLevel;

    /**
     * @var int
     */
    public $taskStatus;

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
        'actualExpression'  => 'ActualExpression',
        'actualResult'      => 'ActualResult',
        'bizdate'           => 'Bizdate',
        'blockType'         => 'BlockType',
        'checkResult'       => 'CheckResult',
        'checkerName'       => 'CheckerName',
        'containStrongRule' => 'ContainStrongRule',
        'criticalThreshold' => 'CriticalThreshold',
        'dateType'          => 'DateType',
        'entityName'        => 'EntityName',
        'externalId'        => 'ExternalId',
        'externalType'      => 'ExternalType',
        'finishTime'        => 'FinishTime',
        'ifFixedCheck'      => 'IfFixedCheck',
        'matchExpression'   => 'MatchExpression',
        'methodId'          => 'MethodId',
        'methodName'        => 'MethodName',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'ruleId'            => 'RuleId',
        'sampleResult'      => 'SampleResult',
        'taskLevel'         => 'TaskLevel',
        'taskStatus'        => 'TaskStatus',
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
        if (null !== $this->actualExpression) {
            $res['ActualExpression'] = $this->actualExpression;
        }
        if (null !== $this->actualResult) {
            $res['ActualResult'] = [];
            if (null !== $this->actualResult && \is_array($this->actualResult)) {
                $n = 0;
                foreach ($this->actualResult as $item) {
                    $res['ActualResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
        }
        if (null !== $this->containStrongRule) {
            $res['ContainStrongRule'] = $this->containStrongRule;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->externalType) {
            $res['ExternalType'] = $this->externalType;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->ifFixedCheck) {
            $res['IfFixedCheck'] = $this->ifFixedCheck;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->sampleResult) {
            $res['SampleResult'] = [];
            if (null !== $this->sampleResult && \is_array($this->sampleResult)) {
                $n = 0;
                foreach ($this->sampleResult as $item) {
                    $res['SampleResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskLevel) {
            $res['TaskLevel'] = $this->taskLevel;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualExpression'])) {
            $model->actualExpression = $map['ActualExpression'];
        }
        if (isset($map['ActualResult'])) {
            if (!empty($map['ActualResult'])) {
                $model->actualResult = [];
                $n                   = 0;
                foreach ($map['ActualResult'] as $item) {
                    $model->actualResult[$n++] = null !== $item ? actualResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
        }
        if (isset($map['ContainStrongRule'])) {
            $model->containStrongRule = $map['ContainStrongRule'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ExternalType'])) {
            $model->externalType = $map['ExternalType'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['IfFixedCheck'])) {
            $model->ifFixedCheck = $map['IfFixedCheck'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SampleResult'])) {
            if (!empty($map['SampleResult'])) {
                $model->sampleResult = [];
                $n                   = 0;
                foreach ($map['SampleResult'] as $item) {
                    $model->sampleResult[$n++] = null !== $item ? sampleResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskLevel'])) {
            $model->taskLevel = $map['TaskLevel'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
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
