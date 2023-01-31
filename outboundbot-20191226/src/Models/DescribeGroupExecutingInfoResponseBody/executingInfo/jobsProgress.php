<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody\executingInfo;

use AlibabaCloud\Tea\Model;

class jobsProgress extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $cancelledNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $executingNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $failedNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $pausedNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $schedulingNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCompletedNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalJobs;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalNotAnsweredNum;
    protected $_name = [
        'cancelledNum'        => 'CancelledNum',
        'executingNum'        => 'ExecutingNum',
        'failedNum'           => 'FailedNum',
        'pausedNum'           => 'PausedNum',
        'schedulingNum'       => 'SchedulingNum',
        'totalCompletedNum'   => 'TotalCompletedNum',
        'totalJobs'           => 'TotalJobs',
        'totalNotAnsweredNum' => 'TotalNotAnsweredNum',
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

    /**
     * @param array $map
     *
     * @return jobsProgress
     */
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
