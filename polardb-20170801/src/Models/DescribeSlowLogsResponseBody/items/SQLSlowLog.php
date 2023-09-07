<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @description The date when the data was generated.
     *
     * @example 2021-05-30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the database.
     *
     * @example PolarDB_MySQL
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The ID of the node.
     *
     * @example pi-***************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The longest execution duration of a specific SQL statement in the query. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @description The longest lock duration that was caused by a specific SQL statement in the query. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $maxLockTime;

    /**
     * @description The largest number of rows that were parsed by a specific SQL statement in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @description The total number of rows that were parsed by all SQL statements in the query.
     *
     * @example 2
     *
     * @var int
     */
    public $parseTotalRowCounts;

    /**
     * @description The largest number of rows that were returned by a specific SQL statement in the query.
     *
     * @example 3
     *
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @description The total number of rows that were returned by all SQL statements in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @description The unique ID of the SQL statement. The ID is used to obtain the slow query logs of the SQL statement.
     *
     * @example U2FsdGVkxxxx
     *
     * @var string
     */
    public $SQLHASH;

    /**
     * @description The SQL statement that is executed in the query.
     *
     * @example select id,name from tb_table
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The total number of executions of the SQL statements.
     *
     * @example 2
     *
     * @var int
     */
    public $totalExecutionCounts;

    /**
     * @description The total duration that was caused by all SQL statements in the query. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $totalExecutionTimes;

    /**
     * @description The total lock duration that was caused by all SQL statements in the query. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $totalLockTimes;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'DBName'               => 'DBName',
        'DBNodeId'             => 'DBNodeId',
        'maxExecutionTime'     => 'MaxExecutionTime',
        'maxLockTime'          => 'MaxLockTime',
        'parseMaxRowCount'     => 'ParseMaxRowCount',
        'parseTotalRowCounts'  => 'ParseTotalRowCounts',
        'returnMaxRowCount'    => 'ReturnMaxRowCount',
        'returnTotalRowCounts' => 'ReturnTotalRowCounts',
        'SQLHASH'              => 'SQLHASH',
        'SQLText'              => 'SQLText',
        'totalExecutionCounts' => 'TotalExecutionCounts',
        'totalExecutionTimes'  => 'TotalExecutionTimes',
        'totalLockTimes'       => 'TotalLockTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->totalExecutionCounts) {
            $res['TotalExecutionCounts'] = $this->totalExecutionCounts;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['TotalExecutionCounts'])) {
            $model->totalExecutionCounts = $map['TotalExecutionCounts'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }

        return $model;
    }
}
