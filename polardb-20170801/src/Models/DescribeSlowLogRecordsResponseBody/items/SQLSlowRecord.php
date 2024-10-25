<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @description Database name.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @description Node ID.
     *
     * @example pi-*****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description Time when the SQL starts execution. The format is `YYYY-MM-DDThh:mmZ` (UTC time).
     *
     * @example 2021-04-07T03:47Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description Client address connecting to the database.
     *
     * @example testdb[testdb] @  [100.**.**.242]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description SQL lock duration in seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @description Number of rows parsed.
     *
     * @example 0
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description Query time. Unit: milliseconds.
     *
     * @example 100
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @description SQL execution duration, in seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @description Number of rows returned.
     *
     * @example 0
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description Unique identifier for the SQL statement in slow log statistics.
     *
     * @example U2FsdGVk****
     *
     * @var string
     */
    public $SQLHash;

    /**
     * @description Query statement.
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
        'SQLHash'            => 'SQLHash',
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
        if (null !== $this->SQLHash) {
            $res['SQLHash'] = $this->SQLHash;
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
        if (isset($map['SQLHash'])) {
            $model->SQLHash = $map['SQLHash'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }

        return $model;
    }
}
