<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody\executingInfo\jobsProgress;

class executingInfo extends Model
{
    /**
     * @var int
     */
    public $callFailedNum;

    /**
     * @var int
     */
    public $callNum;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $finishedNum;

    /**
     * @var int
     */
    public $hangUpByClientNum;

    /**
     * @var jobsProgress
     */
    public $jobsProgress;

    /**
     * @var int
     */
    public $noInteractionNum;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $transferByIntentNum;

    /**
     * @var int
     */
    public $transferByNoAnswer;
    protected $_name = [
        'callFailedNum' => 'CallFailedNum',
        'callNum' => 'CallNum',
        'creatorName' => 'CreatorName',
        'endTime' => 'EndTime',
        'finishedNum' => 'FinishedNum',
        'hangUpByClientNum' => 'HangUpByClientNum',
        'jobsProgress' => 'JobsProgress',
        'noInteractionNum' => 'NoInteractionNum',
        'startTime' => 'StartTime',
        'transferByIntentNum' => 'TransferByIntentNum',
        'transferByNoAnswer' => 'TransferByNoAnswer',
    ];

    public function validate()
    {
        if (null !== $this->jobsProgress) {
            $this->jobsProgress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['JobsProgress'] = null !== $this->jobsProgress ? $this->jobsProgress->toArray($noStream) : $this->jobsProgress;
        }

        if (null !== $this->noInteractionNum) {
            $res['NoInteractionNum'] = $this->noInteractionNum;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['NoInteractionNum'])) {
            $model->noInteractionNum = $map['NoInteractionNum'];
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
