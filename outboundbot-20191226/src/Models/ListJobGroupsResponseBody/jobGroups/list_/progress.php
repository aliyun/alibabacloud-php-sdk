<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponseBody\jobGroups\list_;

use AlibabaCloud\Dara\Model;

class progress extends Model
{
    /**
     * @var int
     */
    public $cancelledNum;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $executingNum;

    /**
     * @var int
     */
    public $failedNum;

    /**
     * @var int
     */
    public $pausedNum;

    /**
     * @var int
     */
    public $scheduling;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCompleted;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalNotAnswered;
    protected $_name = [
        'cancelledNum' => 'CancelledNum',
        'duration' => 'Duration',
        'executingNum' => 'ExecutingNum',
        'failedNum' => 'FailedNum',
        'pausedNum' => 'PausedNum',
        'scheduling' => 'Scheduling',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalCompleted' => 'TotalCompleted',
        'totalJobs' => 'TotalJobs',
        'totalNotAnswered' => 'TotalNotAnswered',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
