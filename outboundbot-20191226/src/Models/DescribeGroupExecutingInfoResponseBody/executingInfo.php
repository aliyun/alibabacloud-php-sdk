<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody\executingInfo\jobsProgress;
use AlibabaCloud\Tea\Model;

class executingInfo extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $callFailedNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $callNum;

    /**
     * @example xxx
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 1640087774563
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $finishedNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $hangUpByClientNum;

    /**
     * @example {}
     *
     * @var jobsProgress
     */
    public $jobsProgress;

    /**
     * @example 1640087774563
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $transferByIntentNum;

    /**
     * @example 5
     *
     * @var int
     */
    public $transferByNoAnswer;
    protected $_name = [
        'callFailedNum'       => 'CallFailedNum',
        'callNum'             => 'CallNum',
        'creatorName'         => 'CreatorName',
        'endTime'             => 'EndTime',
        'finishedNum'         => 'FinishedNum',
        'hangUpByClientNum'   => 'HangUpByClientNum',
        'jobsProgress'        => 'JobsProgress',
        'startTime'           => 'StartTime',
        'transferByIntentNum' => 'TransferByIntentNum',
        'transferByNoAnswer'  => 'TransferByNoAnswer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callFailedNum) {
            $res['CallFailedNum'] = $this->callFailedNum;
        }
        if (null !== $this->callNum) {
            $res['CallNum'] = $this->callNum;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finishedNum) {
            $res['FinishedNum'] = $this->finishedNum;
        }
        if (null !== $this->hangUpByClientNum) {
            $res['HangUpByClientNum'] = $this->hangUpByClientNum;
        }
        if (null !== $this->jobsProgress) {
            $res['JobsProgress'] = null !== $this->jobsProgress ? $this->jobsProgress->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->transferByIntentNum) {
            $res['TransferByIntentNum'] = $this->transferByIntentNum;
        }
        if (null !== $this->transferByNoAnswer) {
            $res['TransferByNoAnswer'] = $this->transferByNoAnswer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallFailedNum'])) {
            $model->callFailedNum = $map['CallFailedNum'];
        }
        if (isset($map['CallNum'])) {
            $model->callNum = $map['CallNum'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FinishedNum'])) {
            $model->finishedNum = $map['FinishedNum'];
        }
        if (isset($map['HangUpByClientNum'])) {
            $model->hangUpByClientNum = $map['HangUpByClientNum'];
        }
        if (isset($map['JobsProgress'])) {
            $model->jobsProgress = jobsProgress::fromMap($map['JobsProgress']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TransferByIntentNum'])) {
            $model->transferByIntentNum = $map['TransferByIntentNum'];
        }
        if (isset($map['TransferByNoAnswer'])) {
            $model->transferByNoAnswer = $map['TransferByNoAnswer'];
        }

        return $model;
    }
}
