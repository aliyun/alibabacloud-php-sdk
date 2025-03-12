<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasAnomalySQLListResponseBody\data\sqlList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Average CPU time of the suspicious SQL.
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
     * @description Average response time of the suspicious SQL.
     *
     * @example 100.28
     *
     * @var float
     */
    public $avgElapsedTime;

    /**
     * @description Average time to obtain the execution plan of the suspicious SQL.
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
     * @description CPU time of the suspicious SQL.
     *
     * @example 100.23
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example db_***
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The type of the diagnosis.
     *
     * @var string[]
     */
    public $diagTypes;

    /**
     * @description The details of diagnosis.
     *
     * @example -
     *
     * @var string
     */
    public $diagnosis;

    /**
     * @description 是否动态SQL
     *
     * @example false
     *
     * @var bool
     */
    public $dynamicSql;

    /**
     * @description Total execution count of the suspicious SQL.
     *
     * @example 1
     *
     * @var float
     */
    public $executions;

    /**
     * @description Last execution time of the suspicious SQL.
     *
     * @example 2023-04-12T04:38:38Z
     *
     * @var float
     */
    public $lastExecutedTime;

    /**
     * @description Risk level.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description SQL ID.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The list of SQL statements.
     *
     * @var sqlList[]
     */
    public $sqlList;

    /**
     * @description Prefix of the SQL text.
     *
     * @var string
     */
    public $sqlTextShort;

    /**
     * @description Suggestion for the suspicious SQL.
     *
     * @example review
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
     * @description Total response time of the suspicious SQL.
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
     * @description Username.
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
        'dynamicSql'       => 'DynamicSql',
        'executions'       => 'Executions',
        'lastExecutedTime' => 'LastExecutedTime',
        'riskLevel'        => 'RiskLevel',
        'sqlId'            => 'SqlId',
        'sqlList'          => 'SqlList',
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
        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
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
        if (null !== $this->sqlList) {
            $res['SqlList'] = [];
            if (null !== $this->sqlList && \is_array($this->sqlList)) {
                $n = 0;
                foreach ($this->sqlList as $item) {
                    $res['SqlList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return data
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
        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
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
        if (isset($map['SqlList'])) {
            if (!empty($map['SqlList'])) {
                $model->sqlList = [];
                $n              = 0;
                foreach ($map['SqlList'] as $item) {
                    $model->sqlList[$n++] = null !== $item ? sqlList::fromMap($item) : $item;
                }
            }
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
