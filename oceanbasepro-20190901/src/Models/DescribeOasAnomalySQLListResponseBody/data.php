<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100.24
     *
     * @var float
     */
    public $avgCpuTime;

    /**
     * @example 100.28
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $avgGetPlanTime;

    /**
     * @example 100.23
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @example db_***
     *
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
     * @example 1
     *
     * @var float
     */
    public $executions;

    /**
     * @example 2023-04-12T04:38:38Z
     *
     * @var float
     */
    public $lastExecutedTime;

    /**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description SQL ID。
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @example delete /*+ XXX PARALLEL(4) *\/ from
     *
     * @var string
     */
    public $sqlTextShort;

    /**
     * @example review
     *
     * @var string
     */
    public $suggestion;

    /**
     * @example 11452126.36
     *
     * @var string
     */
    public $sumElapsedTime;

    /**
     * @example test_user
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'avgCpuTime'       => 'AvgCpuTime',
        'avgElapsedTime'   => 'AvgElapsedTime',
        'avgGetPlanTime'   => 'AvgGetPlanTime',
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
        'sumElapsedTime'   => 'SumElapsedTime',
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
        if (null !== $this->avgElapsedTime) {
            $res['AvgElapsedTime'] = $this->avgElapsedTime;
        }
        if (null !== $this->avgGetPlanTime) {
            $res['AvgGetPlanTime'] = $this->avgGetPlanTime;
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
        if (null !== $this->sumElapsedTime) {
            $res['SumElapsedTime'] = $this->sumElapsedTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['AvgElapsedTime'])) {
            $model->avgElapsedTime = $map['AvgElapsedTime'];
        }
        if (isset($map['AvgGetPlanTime'])) {
            $model->avgGetPlanTime = $map['AvgGetPlanTime'];
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
        if (isset($map['SumElapsedTime'])) {
            $model->sumElapsedTime = $map['SumElapsedTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
