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
     * @var int
     */
    public $rowsAffectedCount;

    /**
     * @var int
     */
    public $queryTimes;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $cpuTime;

    /**
     * @var int
     */
    public $queryTimeMS;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $lockTimes;

    /**
     * @var string
     */
    public $executionStartTime;

    /**
     * @var int
     */
    public $logicalIORead;

    /**
     * @var int
     */
    public $writeIOCount;

    /**
     * @var int
     */
    public $physicalIORead;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var int
     */
    public $parseRowCounts;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $clientHostName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $lastRowsAffectedCount;
    protected $_name = [
        'hostAddress'           => 'HostAddress',
        'rowsAffectedCount'     => 'RowsAffectedCount',
        'queryTimes'            => 'QueryTimes',
        'SQLText'               => 'SQLText',
        'cpuTime'               => 'CpuTime',
        'queryTimeMS'           => 'QueryTimeMS',
        'applicationName'       => 'ApplicationName',
        'lockTimes'             => 'LockTimes',
        'executionStartTime'    => 'ExecutionStartTime',
        'logicalIORead'         => 'LogicalIORead',
        'writeIOCount'          => 'WriteIOCount',
        'physicalIORead'        => 'PhysicalIORead',
        'returnRowCounts'       => 'ReturnRowCounts',
        'parseRowCounts'        => 'ParseRowCounts',
        'DBName'                => 'DBName',
        'clientHostName'        => 'ClientHostName',
        'userName'              => 'UserName',
        'lastRowsAffectedCount' => 'LastRowsAffectedCount',
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
        if (null !== $this->rowsAffectedCount) {
            $res['RowsAffectedCount'] = $this->rowsAffectedCount;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->logicalIORead) {
            $res['LogicalIORead'] = $this->logicalIORead;
        }
        if (null !== $this->writeIOCount) {
            $res['WriteIOCount'] = $this->writeIOCount;
        }
        if (null !== $this->physicalIORead) {
            $res['PhysicalIORead'] = $this->physicalIORead;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->clientHostName) {
            $res['ClientHostName'] = $this->clientHostName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->lastRowsAffectedCount) {
            $res['LastRowsAffectedCount'] = $this->lastRowsAffectedCount;
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
        if (isset($map['RowsAffectedCount'])) {
            $model->rowsAffectedCount = $map['RowsAffectedCount'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['LogicalIORead'])) {
            $model->logicalIORead = $map['LogicalIORead'];
        }
        if (isset($map['WriteIOCount'])) {
            $model->writeIOCount = $map['WriteIOCount'];
        }
        if (isset($map['PhysicalIORead'])) {
            $model->physicalIORead = $map['PhysicalIORead'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ClientHostName'])) {
            $model->clientHostName = $map['ClientHostName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['LastRowsAffectedCount'])) {
            $model->lastRowsAffectedCount = $map['LastRowsAffectedCount'];
        }

        return $model;
    }
}
