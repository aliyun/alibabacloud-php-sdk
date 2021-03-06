<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $queryTimes;

    /**
     * @var int
     */
    public $lockTimes;

    /**
     * @var int
     */
    public $parseRowCounts;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $executionStartTime;

    /**
     * @var int
     */
    public $queryTimeMS;

    /**
     * @var int
     */
    public $cpuTime;

    /**
     * @var int
     */
    public $logicalIORead;

    /**
     * @var int
     */
    public $physicalIORead;

    /**
     * @var int
     */
    public $writeIOCount;

    /**
     * @var int
     */
    public $rowsAffectedCount;

    /**
     * @var int
     */
    public $lastRowsAffectedCount;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $clientHostName;
    protected $_name = [
        'hostAddress'           => 'HostAddress',
        'DBName'                => 'DBName',
        'SQLText'               => 'SQLText',
        'queryTimes'            => 'QueryTimes',
        'lockTimes'             => 'LockTimes',
        'parseRowCounts'        => 'ParseRowCounts',
        'returnRowCounts'       => 'ReturnRowCounts',
        'executionStartTime'    => 'ExecutionStartTime',
        'queryTimeMS'           => 'QueryTimeMS',
        'cpuTime'               => 'CpuTime',
        'logicalIORead'         => 'LogicalIORead',
        'physicalIORead'        => 'PhysicalIORead',
        'writeIOCount'          => 'WriteIOCount',
        'rowsAffectedCount'     => 'RowsAffectedCount',
        'lastRowsAffectedCount' => 'LastRowsAffectedCount',
        'userName'              => 'UserName',
        'applicationName'       => 'ApplicationName',
        'clientHostName'        => 'ClientHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->logicalIORead) {
            $res['LogicalIORead'] = $this->logicalIORead;
        }
        if (null !== $this->physicalIORead) {
            $res['PhysicalIORead'] = $this->physicalIORead;
        }
        if (null !== $this->writeIOCount) {
            $res['WriteIOCount'] = $this->writeIOCount;
        }
        if (null !== $this->rowsAffectedCount) {
            $res['RowsAffectedCount'] = $this->rowsAffectedCount;
        }
        if (null !== $this->lastRowsAffectedCount) {
            $res['LastRowsAffectedCount'] = $this->lastRowsAffectedCount;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clientHostName) {
            $res['ClientHostName'] = $this->clientHostName;
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
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['LogicalIORead'])) {
            $model->logicalIORead = $map['LogicalIORead'];
        }
        if (isset($map['PhysicalIORead'])) {
            $model->physicalIORead = $map['PhysicalIORead'];
        }
        if (isset($map['WriteIOCount'])) {
            $model->writeIOCount = $map['WriteIOCount'];
        }
        if (isset($map['RowsAffectedCount'])) {
            $model->rowsAffectedCount = $map['RowsAffectedCount'];
        }
        if (isset($map['LastRowsAffectedCount'])) {
            $model->lastRowsAffectedCount = $map['LastRowsAffectedCount'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClientHostName'])) {
            $model->clientHostName = $map['ClientHostName'];
        }

        return $model;
    }
}
