<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @description The name of the application that is connected to the instance.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example example
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The hostname of the client.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example example
     *
     * @var string
     */
    public $clientHostName;

    /**
     * @description The duration during which the SQL statement is processed by the CPU. Unit: milliseconds.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 0.002
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time when the execution of the SQL statement started. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-06-18T01:40:44Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description The name and IP address of the client that is connected to the database.
     *
     * @example xxx[xxx] @  [1xx.xxx.xxx.xx]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The number of rows that are affected by the last SQL statement.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 2
     *
     * @var int
     */
    public $lastRowsAffectedCount;

    /**
     * @description The lock duration of the query. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @description The number of logical reads.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 383
     *
     * @var int
     */
    public $logicalIORead;

    /**
     * @description The number of parsed rows.
     *
     * @example 1
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description The number of physical reads.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 200
     *
     * @var int
     */
    public $physicalIORead;

    /**
     * @description The execution duration of the query. Unit: milliseconds.
     *
     * @example 2001
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @description The execution duration of the query. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @description The number of rows returned.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The number of affected rows.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 34
     *
     * @var int
     */
    public $rowsAffectedCount;

    /**
     * @description The unique ID of the SQL statement.
     *
     * @example U2FsdGVk****
     *
     * @var string
     */
    public $SQLHash;

    /**
     * @description The details of the SQL statement.
     *
     * @example select sleep(2)
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The name of the user.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example user
     *
     * @var string
     */
    public $userName;

    /**
     * @description The number of I/O writes.
     *
     * > This parameter is returned only for instances that run SQL Server.
     * @example 22
     *
     * @var int
     */
    public $writeIOCount;
    protected $_name = [
        'applicationName'       => 'ApplicationName',
        'clientHostName'        => 'ClientHostName',
        'cpuTime'               => 'CpuTime',
        'DBName'                => 'DBName',
        'executionStartTime'    => 'ExecutionStartTime',
        'hostAddress'           => 'HostAddress',
        'lastRowsAffectedCount' => 'LastRowsAffectedCount',
        'lockTimes'             => 'LockTimes',
        'logicalIORead'         => 'LogicalIORead',
        'parseRowCounts'        => 'ParseRowCounts',
        'physicalIORead'        => 'PhysicalIORead',
        'queryTimeMS'           => 'QueryTimeMS',
        'queryTimes'            => 'QueryTimes',
        'returnRowCounts'       => 'ReturnRowCounts',
        'rowsAffectedCount'     => 'RowsAffectedCount',
        'SQLHash'               => 'SQLHash',
        'SQLText'               => 'SQLText',
        'userName'              => 'UserName',
        'writeIOCount'          => 'WriteIOCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clientHostName) {
            $res['ClientHostName'] = $this->clientHostName;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->lastRowsAffectedCount) {
            $res['LastRowsAffectedCount'] = $this->lastRowsAffectedCount;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->logicalIORead) {
            $res['LogicalIORead'] = $this->logicalIORead;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->physicalIORead) {
            $res['PhysicalIORead'] = $this->physicalIORead;
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
        if (null !== $this->rowsAffectedCount) {
            $res['RowsAffectedCount'] = $this->rowsAffectedCount;
        }
        if (null !== $this->SQLHash) {
            $res['SQLHash'] = $this->SQLHash;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->writeIOCount) {
            $res['WriteIOCount'] = $this->writeIOCount;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClientHostName'])) {
            $model->clientHostName = $map['ClientHostName'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['LastRowsAffectedCount'])) {
            $model->lastRowsAffectedCount = $map['LastRowsAffectedCount'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['LogicalIORead'])) {
            $model->logicalIORead = $map['LogicalIORead'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['PhysicalIORead'])) {
            $model->physicalIORead = $map['PhysicalIORead'];
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
        if (isset($map['RowsAffectedCount'])) {
            $model->rowsAffectedCount = $map['RowsAffectedCount'];
        }
        if (isset($map['SQLHash'])) {
            $model->SQLHash = $map['SQLHash'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WriteIOCount'])) {
            $model->writeIOCount = $map['WriteIOCount'];
        }

        return $model;
    }
}
