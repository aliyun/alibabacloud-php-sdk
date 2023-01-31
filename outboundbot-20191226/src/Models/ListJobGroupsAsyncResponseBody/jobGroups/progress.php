<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncResponseBody\jobGroups;

use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $cancelledNum;

    /**
     * @example 1000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 20
     *
     * @var int
     */
    public $executingNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $failedNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pausedNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $scheduling;

    /**
     * @example 1640316786259
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCompleted;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalJobs;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNotAnswered;
    protected $_name = [
        'cancelledNum'     => 'CancelledNum',
        'duration'         => 'Duration',
        'executingNum'     => 'ExecutingNum',
        'failedNum'        => 'FailedNum',
        'pausedNum'        => 'PausedNum',
        'scheduling'       => 'Scheduling',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'totalCompleted'   => 'TotalCompleted',
        'totalJobs'        => 'TotalJobs',
        'totalNotAnswered' => 'TotalNotAnswered',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelledNum) {
            $res['CancelledNum'] = $this->cancelledNum;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->executingNum) {
            $res['ExecutingNum'] = $this->executingNum;
        }
        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }
        if (null !== $this->pausedNum) {
            $res['PausedNum'] = $this->pausedNum;
        }
        if (null !== $this->scheduling) {
            $res['Scheduling'] = $this->scheduling;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCompleted) {
            $res['TotalCompleted'] = $this->totalCompleted;
        }
        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }
        if (null !== $this->totalNotAnswered) {
            $res['TotalNotAnswered'] = $this->totalNotAnswered;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancelledNum'])) {
            $model->cancelledNum = $map['CancelledNum'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExecutingNum'])) {
            $model->executingNum = $map['ExecutingNum'];
        }
        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }
        if (isset($map['PausedNum'])) {
            $model->pausedNum = $map['PausedNum'];
        }
        if (isset($map['Scheduling'])) {
            $model->scheduling = $map['Scheduling'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCompleted'])) {
            $model->totalCompleted = $map['TotalCompleted'];
        }
        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }
        if (isset($map['TotalNotAnswered'])) {
            $model->totalNotAnswered = $map['TotalNotAnswered'];
        }

        return $model;
    }
}
