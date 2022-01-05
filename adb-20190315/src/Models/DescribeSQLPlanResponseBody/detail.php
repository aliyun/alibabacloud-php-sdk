<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $CPUTime;

    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var int
     */
    public $outputSize;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var int
     */
    public $planningTime;

    /**
     * @var int
     */
    public $queuedTime;

    /**
     * @var string
     */
    public $SQL;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $totalStage;

    /**
     * @var int
     */
    public $totalTask;

    /**
     * @var int
     */
    public $totalTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'CPUTime'      => 'CPUTime',
        'clientIP'     => 'ClientIP',
        'database'     => 'Database',
        'outputRows'   => 'OutputRows',
        'outputSize'   => 'OutputSize',
        'peakMemory'   => 'PeakMemory',
        'planningTime' => 'PlanningTime',
        'queuedTime'   => 'QueuedTime',
        'SQL'          => 'SQL',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'totalStage'   => 'TotalStage',
        'totalTask'    => 'TotalTask',
        'totalTime'    => 'TotalTime',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUTime) {
            $res['CPUTime'] = $this->CPUTime;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->planningTime) {
            $res['PlanningTime'] = $this->planningTime;
        }
        if (null !== $this->queuedTime) {
            $res['QueuedTime'] = $this->queuedTime;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->totalStage) {
            $res['TotalStage'] = $this->totalStage;
        }
        if (null !== $this->totalTask) {
            $res['TotalTask'] = $this->totalTask;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUTime'])) {
            $model->CPUTime = $map['CPUTime'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['PlanningTime'])) {
            $model->planningTime = $map['PlanningTime'];
        }
        if (isset($map['QueuedTime'])) {
            $model->queuedTime = $map['QueuedTime'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TotalStage'])) {
            $model->totalStage = $map['TotalStage'];
        }
        if (isset($map['TotalTask'])) {
            $model->totalTask = $map['TotalTask'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
