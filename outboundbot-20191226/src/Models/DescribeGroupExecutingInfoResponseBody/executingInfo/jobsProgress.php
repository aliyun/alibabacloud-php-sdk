<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody\executingInfo;

use AlibabaCloud\Dara\Model;

class jobsProgress extends Model
{
    /**
     * @var int
     */
    public $cancelledNum;

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
    public $schedulingNum;

    /**
     * @var int
     */
    public $totalCompletedNum;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalNotAnsweredNum;
    protected $_name = [
        'cancelledNum' => 'CancelledNum',
        'executingNum' => 'ExecutingNum',
        'failedNum' => 'FailedNum',
        'pausedNum' => 'PausedNum',
        'schedulingNum' => 'SchedulingNum',
        'totalCompletedNum' => 'TotalCompletedNum',
        'totalJobs' => 'TotalJobs',
        'totalNotAnsweredNum' => 'TotalNotAnsweredNum',
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

        if (null !== $this->executingNum) {
            $res['ExecutingNum'] = $this->executingNum;
        }

        if (null !== $this->failedNum) {
            $res['FailedNum'] = $this->failedNum;
        }

        if (null !== $this->pausedNum) {
            $res['PausedNum'] = $this->pausedNum;
        }

        if (null !== $this->schedulingNum) {
            $res['SchedulingNum'] = $this->schedulingNum;
        }

        if (null !== $this->totalCompletedNum) {
            $res['TotalCompletedNum'] = $this->totalCompletedNum;
        }

        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }

        if (null !== $this->totalNotAnsweredNum) {
            $res['TotalNotAnsweredNum'] = $this->totalNotAnsweredNum;
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

        if (isset($map['ExecutingNum'])) {
            $model->executingNum = $map['ExecutingNum'];
        }

        if (isset($map['FailedNum'])) {
            $model->failedNum = $map['FailedNum'];
        }

        if (isset($map['PausedNum'])) {
            $model->pausedNum = $map['PausedNum'];
        }

        if (isset($map['SchedulingNum'])) {
            $model->schedulingNum = $map['SchedulingNum'];
        }

        if (isset($map['TotalCompletedNum'])) {
            $model->totalCompletedNum = $map['TotalCompletedNum'];
        }

        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }

        if (isset($map['TotalNotAnsweredNum'])) {
            $model->totalNotAnsweredNum = $map['TotalNotAnsweredNum'];
        }

        return $model;
    }
}
