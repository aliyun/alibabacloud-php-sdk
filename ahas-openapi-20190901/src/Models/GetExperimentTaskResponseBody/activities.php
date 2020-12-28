<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentTaskResponseBody;

use AlibabaCloud\Tea\Model;

class activities extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $checkState;

    /**
     * @var string
     */
    public $runResult;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $experimentTaskId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'endTime'          => 'EndTime',
        'startTime'        => 'StartTime',
        'checkState'       => 'CheckState',
        'runResult'        => 'RunResult',
        'state'            => 'State',
        'activityId'       => 'ActivityId',
        'phase'            => 'Phase',
        'activityName'     => 'ActivityName',
        'experimentTaskId' => 'ExperimentTaskId',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->checkState) {
            $res['CheckState'] = $this->checkState;
        }
        if (null !== $this->runResult) {
            $res['RunResult'] = $this->runResult;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->experimentTaskId) {
            $res['ExperimentTaskId'] = $this->experimentTaskId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['CheckState'])) {
            $model->checkState = $map['CheckState'];
        }
        if (isset($map['RunResult'])) {
            $model->runResult = $map['RunResult'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['ExperimentTaskId'])) {
            $model->experimentTaskId = $map['ExperimentTaskId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
