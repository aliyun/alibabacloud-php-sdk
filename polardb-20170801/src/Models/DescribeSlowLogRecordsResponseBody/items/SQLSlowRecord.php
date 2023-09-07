<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The ID of the node.
     *
     * @example pi-*****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The time when the SQL statement was executed. The time is in the `yyyy-MM-ddTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2021-04-07T03:47Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description The IP address of the client that is used to connect to the database.
     *
     * @example testdb[testdb] @  [100.**.**.242]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The period of time during which the SQL statement was locked. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @description The number of rows parsed by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description The time range for the query. Unit: milliseconds.
     *
     * @example 100
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @description The amount of time that was consumed to execute the SQL statement. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The SQL statement that is executed in the query.
     *
     * @example /* Query from *** by user 111 *\/ SELECT sleep(20)
     *
     * @var string
     */
    public $SQLText;
    protected $_name = [
        'DBName'             => 'DBName',
        'DBNodeId'           => 'DBNodeId',
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress'        => 'HostAddress',
        'lockTimes'          => 'LockTimes',
        'parseRowCounts'     => 'ParseRowCounts',
        'queryTimeMS'        => 'QueryTimeMS',
        'queryTimes'         => 'QueryTimes',
        'returnRowCounts'    => 'ReturnRowCounts',
        'SQLText'            => 'SQLText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
