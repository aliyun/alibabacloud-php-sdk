<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponseBody\data;

use AlibabaCloud\Tea\Model;

class sqlList extends Model
{
    /**
     * @var float
     */
    public $avgCpuTime;

    /**
     * @var float
     */
    public $avgDbTime;

    /**
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @var float
     */
    public $avgGetPlanTime;

    /**
     * @var float
     */
    public $avgLogicalReads;

    /**
     * @var float
     */
    public $avgRetryCount;

    /**
     * @var float
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string[]
     */
    public $diagTypes;

    /**
     * @var string
     */
    public $diagnosis;

    /**
     * @var float
     */
    public $executions;

    /**
     * @var float
     */
    public $lastExecutedTime;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlTextShort;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var float
     */
    public $sumDbTime;

    /**
     * @var string
     */
    public $sumElapsedTime;

    /**
     * @var float
     */
    public $sumRetryCount;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'avgCpuTime'       => 'AvgCpuTime',
        'avgDbTime'        => 'AvgDbTime',
        'avgElapsedTime'   => 'AvgElapsedTime',
        'avgGetPlanTime'   => 'AvgGetPlanTime',
        'avgLogicalReads'  => 'AvgLogicalReads',
        'avgRetryCount'    => 'AvgRetryCount',
        'cpuTime'          => 'CpuTime',
        'dbName'           => 'DbName',
        'diagTypes'        => 'DiagTypes',
        'diagnosis'        => 'Diagnosis',
        'executions'       => 'Executions',
        'lastExecutedTime' => 'LastExecutedTime',
        'riskLevel'        => 'RiskLevel',
        'sqlId'            => 'SqlId',
        'sqlTextShort'     => 'SqlTextShort',
        'suggestion'       => 'Suggestion',
        'sumDbTime'        => 'SumDbTime',
        'sumElapsedTime'   => 'SumElapsedTime',
        'sumRetryCount'    => 'SumRetryCount',
        'userName'         => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }
        if (null !== $this->avgDbTime) {
            $res['AvgDbTime'] = $this->avgDbTime;
        }
        if (null !== $this->avgElapsedTime) {
            $res['AvgElapsedTime'] = $this->avgElapsedTime;
        }
        if (null !== $this->avgGetPlanTime) {
            $res['AvgGetPlanTime'] = $this->avgGetPlanTime;
        }
        if (null !== $this->avgLogicalReads) {
            $res['AvgLogicalReads'] = $this->avgLogicalReads;
        }
        if (null !== $this->avgRetryCount) {
            $res['AvgRetryCount'] = $this->avgRetryCount;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->diagTypes) {
            $res['DiagTypes'] = $this->diagTypes;
        }
        if (null !== $this->diagnosis) {
            $res['Diagnosis'] = $this->diagnosis;
        }
        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }
        if (null !== $this->lastExecutedTime) {
            $res['LastExecutedTime'] = $this->lastExecutedTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlTextShort) {
            $res['SqlTextShort'] = $this->sqlTextShort;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->sumDbTime) {
            $res['SumDbTime'] = $this->sumDbTime;
        }
        if (null !== $this->sumElapsedTime) {
            $res['SumElapsedTime'] = $this->sumElapsedTime;
        }
        if (null !== $this->sumRetryCount) {
            $res['SumRetryCount'] = $this->sumRetryCount;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['AvgDbTime'])) {
            $model->avgDbTime = $map['AvgDbTime'];
        }
        if (isset($map['AvgElapsedTime'])) {
            $model->avgElapsedTime = $map['AvgElapsedTime'];
        }
        if (isset($map['AvgGetPlanTime'])) {
            $model->avgGetPlanTime = $map['AvgGetPlanTime'];
        }
        if (isset($map['AvgLogicalReads'])) {
            $model->avgLogicalReads = $map['AvgLogicalReads'];
        }
        if (isset($map['AvgRetryCount'])) {
            $model->avgRetryCount = $map['AvgRetryCount'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DiagTypes'])) {
            if (!empty($map['DiagTypes'])) {
                $model->diagTypes = $map['DiagTypes'];
            }
        }
        if (isset($map['Diagnosis'])) {
            $model->diagnosis = $map['Diagnosis'];
        }
        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }
        if (isset($map['LastExecutedTime'])) {
            $model->lastExecutedTime = $map['LastExecutedTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlTextShort'])) {
            $model->sqlTextShort = $map['SqlTextShort'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['SumDbTime'])) {
            $model->sumDbTime = $map['SumDbTime'];
        }
        if (isset($map['SumElapsedTime'])) {
            $model->sumElapsedTime = $map['SumElapsedTime'];
        }
        if (isset($map['SumRetryCount'])) {
            $model->sumRetryCount = $map['SumRetryCount'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
