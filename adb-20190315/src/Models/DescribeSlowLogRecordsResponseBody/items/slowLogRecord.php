<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class slowLogRecord extends Model
{
    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The time when the execution started. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2021-05-27T08:04:43Z
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description The IP address of the client that is used to connect to the database.
     *
     * @example 172.16.**.**
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The amount of output data in the task. Unit: bytes.
     *
     * @example 0.009
     *
     * @var string
     */
    public $outputSize;

    /**
     * @description The number of rows parsed by the SQL statement.
     *
     * @example 0
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description The maximum memory usage when the SQL statement is executed. Unit: KB.
     *
     * @example 431.447
     *
     * @var string
     */
    public $peakMemoryUsage;

    /**
     * @description The amount of time consumed to generate execution plans. Unit: milliseconds.
     *
     * @example 12
     *
     * @var int
     */
    public $planningTime;

    /**
     * @description The ID of the process.
     *
     * @example 2021052716044317201616624903453******
     *
     * @var string
     */
    public $processID;

    /**
     * @description The time consumed to execute the SQL statement. Unit: milliseconds.
     *
     * @example 2344
     *
     * @var int
     */
    public $queryTime;

    /**
     * @description The queuing duration before the query is executed. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $queueTime;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description Details of the SQL statement.
     *
     * @example INSERT OVERWRITE INTO hdfs_import_external\nSELECT *\nFROM adb_hdfs_import_source
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The number of rows scanned from a data source in the task.
     *
     * @example 3
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The amount of scanned data. Unit: KB.
     *
     * @example 0.035
     *
     * @var string
     */
    public $scanSize;

    /**
     * @description The total amount of time consumed to scan data. It is an accumulated value collected from multiple TableScanNode nodes. Unit: milliseconds.
     *
     * @example 10
     *
     * @var int
     */
    public $scanTime;

    /**
     * @description The execution state of the SQL statement.
     *
     * @example SUCCESSED
     *
     * @var string
     */
    public $state;

    /**
     * @description The username.
     *
     * @example test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The accumulated CPU Time value of all operators collected from all nodes. Unit: milliseconds.
     *
     * @example 6100
     *
     * @var int
     */
    public $wallTime;
    protected $_name = [
        'DBName'             => 'DBName',
        'executionStartTime' => 'ExecutionStartTime',
        'hostAddress'        => 'HostAddress',
        'outputSize'         => 'OutputSize',
        'parseRowCounts'     => 'ParseRowCounts',
        'peakMemoryUsage'    => 'PeakMemoryUsage',
        'planningTime'       => 'PlanningTime',
        'processID'          => 'ProcessID',
        'queryTime'          => 'QueryTime',
        'queueTime'          => 'QueueTime',
        'returnRowCounts'    => 'ReturnRowCounts',
        'SQLText'            => 'SQLText',
        'scanRows'           => 'ScanRows',
        'scanSize'           => 'ScanSize',
        'scanTime'           => 'ScanTime',
        'state'              => 'State',
        'userName'           => 'UserName',
        'wallTime'           => 'WallTime',
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
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->peakMemoryUsage) {
            $res['PeakMemoryUsage'] = $this->peakMemoryUsage;
        }
        if (null !== $this->planningTime) {
            $res['PlanningTime'] = $this->planningTime;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->wallTime) {
            $res['WallTime'] = $this->wallTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['PeakMemoryUsage'])) {
            $model->peakMemoryUsage = $map['PeakMemoryUsage'];
        }
        if (isset($map['PlanningTime'])) {
            $model->planningTime = $map['PlanningTime'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WallTime'])) {
            $model->wallTime = $map['WallTime'];
        }

        return $model;
    }
}
