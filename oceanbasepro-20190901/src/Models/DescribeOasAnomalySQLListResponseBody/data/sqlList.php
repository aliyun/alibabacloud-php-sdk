<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponseBody\data;

use AlibabaCloud\Tea\Model;

class sqlList extends Model
{
    /**
     * @description The average CPU time.
     *
     * @example 100.24
     *
     * @var float
     */
    public $avgCpuTime;

    /**
     * @description The average DB time.
     *
     * @example 100
     *
     * @var float
     */
    public $avgDbTime;

    /**
     * @description The average response time.
     *
     * @example 100.28
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @description The average plan generation time.
     *
     * @example 0
     *
     * @var float
     */
    public $avgGetPlanTime;

    /**
     * @description The average number of logical reads.
     *
     * @example 25
     *
     * @var float
     */
    public $avgLogicalReads;

    /**
     * @description The average number of retries.
     *
     * @example 4
     *
     * @var float
     */
    public $avgRetryCount;

    /**
     * @description The total CPU time.
     *
     * @example 100.23
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example test_hsp****eway
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The diagnostic types.
     *
     * @var string[]
     */
    public $diagTypes;

    /**
     * @description The diagnostic details.
     *
     * > This parameter is deprecated.
     * @example -
     *
     * @var string
     */
    public $diagnosis;

    /**
     * @description The total number of executions.
     *
     * @example 100
     *
     * @var float
     */
    public $executions;

    /**
     * @description The last execution time.
     *
     * @example 2023-04-12T04:38:38Z
     *
     * @var string
     */
    public $lastExecutedTime;

    /**
     * @description The risk level.
     *
     * @example LOW
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The ID of the SQL statement.
     *
     * @example 3A645****789F13DE0CF6D084FF9****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The prefix of the SQL text.
     *
     * @example select * from test
     *
     * @var string
     */
    public $sqlTextShort;

    /**
     * @description The suggestion on the suspicious SQL statement.
     *
     * @example {\\"Role\\": \\"eSG\\", \\"Result\\": \\"100\\", \\"Suggestion\\": \\"TRACER_OTHER_ERR\\"}
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The total DB time.
     *
     * @example 100
     *
     * @var float
     */
    public $sumDbTime;

    /**
     * @description The total response time.
     *
     * @example 11452126.36
     *
     * @var string
     */
    public $sumElapsedTime;

    /**
     * @description The total number of retries.
     *
     * @example 6
     *
     * @var float
     */
    public $sumRetryCount;

    /**
     * @description The username.
     *
     * @example test_user
     *
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
