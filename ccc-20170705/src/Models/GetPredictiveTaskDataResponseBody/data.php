<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetPredictiveTaskDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $abandoned;

    /**
     * @var bool
     */
    public $answered;

    /**
     * @var bool
     */
    public $connected;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $dialDuration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var int
     */
    public $queueDuration;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $talkDuration;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'abandoned'     => 'Abandoned',
        'answered'      => 'Answered',
        'connected'     => 'Connected',
        'contactId'     => 'ContactId',
        'dialDuration'  => 'DialDuration',
        'endTime'       => 'EndTime',
        'jobGroupId'    => 'JobGroupId',
        'queueDuration' => 'QueueDuration',
        'startTime'     => 'StartTime',
        'talkDuration'  => 'TalkDuration',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandoned) {
            $res['Abandoned'] = $this->abandoned;
        }
        if (null !== $this->answered) {
            $res['Answered'] = $this->answered;
        }
        if (null !== $this->connected) {
            $res['Connected'] = $this->connected;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->dialDuration) {
            $res['DialDuration'] = $this->dialDuration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->queueDuration) {
            $res['QueueDuration'] = $this->queueDuration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->talkDuration) {
            $res['TalkDuration'] = $this->talkDuration;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abandoned'])) {
            $model->abandoned = $map['Abandoned'];
        }
        if (isset($map['Answered'])) {
            $model->answered = $map['Answered'];
        }
        if (isset($map['Connected'])) {
            $model->connected = $map['Connected'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['DialDuration'])) {
            $model->dialDuration = $map['DialDuration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['QueueDuration'])) {
            $model->queueDuration = $map['QueueDuration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TalkDuration'])) {
            $model->talkDuration = $map['TalkDuration'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
