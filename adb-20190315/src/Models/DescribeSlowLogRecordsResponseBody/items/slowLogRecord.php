<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class slowLogRecord extends Model
{
    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var int
     */
    public $scanTime;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $outputSize;

    /**
     * @var string
     */
    public $peakMemoryUsage;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $wallTime;

    /**
     * @var string
     */
    public $scanSize;

    /**
     * @var string
     */
    public $executionStartTime;

    /**
     * @var int
     */
    public $queryTime;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $parseRowCounts;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $planningTime;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $processID;
    protected $_name = [
        'hostAddress'        => 'HostAddress',
        'scanTime'           => 'ScanTime',
        'SQLText'            => 'SQLText',
        'outputSize'         => 'OutputSize',
        'peakMemoryUsage'    => 'PeakMemoryUsage',
        'state'              => 'State',
        'wallTime'           => 'WallTime',
        'scanSize'           => 'ScanSize',
        'executionStartTime' => 'ExecutionStartTime',
        'queryTime'          => 'QueryTime',
        'returnRowCounts'    => 'ReturnRowCounts',
        'scanRows'           => 'ScanRows',
        'parseRowCounts'     => 'ParseRowCounts',
        'DBName'             => 'DBName',
        'planningTime'       => 'PlanningTime',
        'queueTime'          => 'QueueTime',
        'userName'           => 'UserName',
        'processID'          => 'ProcessID',
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
        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->peakMemoryUsage) {
            $res['PeakMemoryUsage'] = $this->peakMemoryUsage;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->wallTime) {
            $res['WallTime'] = $this->wallTime;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->planningTime) {
            $res['PlanningTime'] = $this->planningTime;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
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
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['PeakMemoryUsage'])) {
            $model->peakMemoryUsage = $map['PeakMemoryUsage'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['WallTime'])) {
            $model->wallTime = $map['WallTime'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['PlanningTime'])) {
            $model->planningTime = $map['PlanningTime'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }

        return $model;
    }
}
