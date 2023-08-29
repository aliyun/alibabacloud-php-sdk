<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisTaskDetailResponseBody\resultContent;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var float
     */
    public $pushArrivalNum;

    /**
     * @var float
     */
    public $pushNum;

    /**
     * @var float
     */
    public $pushSuccessNum;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'duration'       => 'Duration',
        'endTime'        => 'EndTime',
        'pushArrivalNum' => 'PushArrivalNum',
        'pushNum'        => 'PushNum',
        'pushSuccessNum' => 'PushSuccessNum',
        'startTime'      => 'StartTime',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pushArrivalNum) {
            $res['PushArrivalNum'] = $this->pushArrivalNum;
        }
        if (null !== $this->pushNum) {
            $res['PushNum'] = $this->pushNum;
        }
        if (null !== $this->pushSuccessNum) {
            $res['PushSuccessNum'] = $this->pushSuccessNum;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PushArrivalNum'])) {
            $model->pushArrivalNum = $map['PushArrivalNum'];
        }
        if (isset($map['PushNum'])) {
            $model->pushNum = $map['PushNum'];
        }
        if (isset($map['PushSuccessNum'])) {
            $model->pushSuccessNum = $map['PushSuccessNum'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
