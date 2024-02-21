<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data\list_\ruleList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The average lock wait time. Unit: seconds.
     *
     * @example 0.1
     *
     * @var float
     */
    public $avgLockTime;

    /**
     * @description The average query execution time. Unit: seconds.
     *
     * @example 1.1
     *
     * @var float
     */
    public $avgQueryTime;

    /**
     * @description The average number of rows affected by the SQL statement.
     *
     * > A value of -1 indicates that this parameter is not collected.
     * @example 100.1
     *
     * @var float
     */
    public $avgRowsAffected;

    /**
     * @description The average number of scanned rows.
     *
     * @example 100.1
     *
     * @var float
     */
    public $avgRowsExamined;

    /**
     * @description The average number of returned rows.
     *
     * @example 100.1
     *
     * @var float
     */
    public $avgRowsSent;

    /**
     * @description The number of times that the SQL template is executed.
     *
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the database to which the SQL template belongs.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbname;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The longest lock wait time. Unit: seconds.
     *
     * @example 0.1
     *
     * @var float
     */
    public $maxLockTime;

    /**
     * @description The longest query execution time. Unit: seconds.
     *
     * @example 1.1
     *
     * @var float
     */
    public $maxQueryTime;

    /**
     * @description The largest number of rows affected by the SQL template.
     *
     * > A value of -1 indicates that this parameter is not collected.
     * @example 10000
     *
     * @var int
     */
    public $maxRowsAffected;

    /**
     * @description The largest number of scanned rows.
     *
     * @example 100000
     *
     * @var int
     */
    public $maxRowsExamined;

    /**
     * @description The largest number of returned rows.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxRowsSent;

    /**
     * @description The SQL template.
     *
     * @example select 1
     *
     * @var string
     */
    public $psql;

    /**
     * @description The information about the rules.
     *
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @description The SQL template ID.
     *
     * @example 2e8147b5ca2dfc640dfd5e43d96a****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The sample query that took the longest time to execute.
     *
     * @example select 2
     *
     * @var string
     */
    public $sqlSample;

    /**
     * @description The type of the SQL statement.
     *
     * @example INSERT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The account of the database.
     *
     * @example testUser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'avgLockTime'     => 'AvgLockTime',
        'avgQueryTime'    => 'AvgQueryTime',
        'avgRowsAffected' => 'AvgRowsAffected',
        'avgRowsExamined' => 'AvgRowsExamined',
        'avgRowsSent'     => 'AvgRowsSent',
        'count'           => 'Count',
        'dbname'          => 'Dbname',
        'instanceId'      => 'InstanceId',
        'maxLockTime'     => 'MaxLockTime',
        'maxQueryTime'    => 'MaxQueryTime',
        'maxRowsAffected' => 'MaxRowsAffected',
        'maxRowsExamined' => 'MaxRowsExamined',
        'maxRowsSent'     => 'MaxRowsSent',
        'psql'            => 'Psql',
        'ruleList'        => 'RuleList',
        'sqlId'           => 'SqlId',
        'sqlSample'       => 'SqlSample',
        'sqlType'         => 'SqlType',
        'user'            => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLockTime) {
            $res['AvgLockTime'] = $this->avgLockTime;
        }
        if (null !== $this->avgQueryTime) {
            $res['AvgQueryTime'] = $this->avgQueryTime;
        }
        if (null !== $this->avgRowsAffected) {
            $res['AvgRowsAffected'] = $this->avgRowsAffected;
        }
        if (null !== $this->avgRowsExamined) {
            $res['AvgRowsExamined'] = $this->avgRowsExamined;
        }
        if (null !== $this->avgRowsSent) {
            $res['AvgRowsSent'] = $this->avgRowsSent;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->dbname) {
            $res['Dbname'] = $this->dbname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->maxQueryTime) {
            $res['MaxQueryTime'] = $this->maxQueryTime;
        }
        if (null !== $this->maxRowsAffected) {
            $res['MaxRowsAffected'] = $this->maxRowsAffected;
        }
        if (null !== $this->maxRowsExamined) {
            $res['MaxRowsExamined'] = $this->maxRowsExamined;
        }
        if (null !== $this->maxRowsSent) {
            $res['MaxRowsSent'] = $this->maxRowsSent;
        }
        if (null !== $this->psql) {
            $res['Psql'] = $this->psql;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlSample) {
            $res['SqlSample'] = $this->sqlSample;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgLockTime'])) {
            $model->avgLockTime = $map['AvgLockTime'];
        }
        if (isset($map['AvgQueryTime'])) {
            $model->avgQueryTime = $map['AvgQueryTime'];
        }
        if (isset($map['AvgRowsAffected'])) {
            $model->avgRowsAffected = $map['AvgRowsAffected'];
        }
        if (isset($map['AvgRowsExamined'])) {
            $model->avgRowsExamined = $map['AvgRowsExamined'];
        }
        if (isset($map['AvgRowsSent'])) {
            $model->avgRowsSent = $map['AvgRowsSent'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Dbname'])) {
            $model->dbname = $map['Dbname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['MaxQueryTime'])) {
            $model->maxQueryTime = $map['MaxQueryTime'];
        }
        if (isset($map['MaxRowsAffected'])) {
            $model->maxRowsAffected = $map['MaxRowsAffected'];
        }
        if (isset($map['MaxRowsExamined'])) {
            $model->maxRowsExamined = $map['MaxRowsExamined'];
        }
        if (isset($map['MaxRowsSent'])) {
            $model->maxRowsSent = $map['MaxRowsSent'];
        }
        if (isset($map['Psql'])) {
            $model->psql = $map['Psql'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlSample'])) {
            $model->sqlSample = $map['SqlSample'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
