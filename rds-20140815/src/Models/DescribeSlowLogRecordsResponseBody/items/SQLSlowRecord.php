<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @example example
     *
     * @var string
     */
    public $applicationName;

    /**
     * @example example
     *
     * @var string
     */
    public $clientHostName;

    /**
     * @example 0.002
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @example 2020-06-18T01:40:44Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @example xxx[xxx] @  [1xx.xxx.xxx.xx]
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @example 2
     *
     * @var int
     */
    public $lastRowsAffectedCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @example 383
     *
     * @var int
     */
    public $logicalIORead;

    /**
     * @example 1
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @example 200
     *
     * @var int
     */
    public $physicalIORead;

    /**
     * @example 2001
     *
     * @var int
     */
    public $queryTimeMS;

    /**
     * @example 2
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @example 34
     *
     * @var int
     */
    public $rowsAffectedCount;

    /**
     * @example U2FsdGVk****
     *
     * @var string
     */
    public $SQLHash;

    /**
     * @example select sleep(2)
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example user
     *
     * @var string
     */
    public $userName;

    /**
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
