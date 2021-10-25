<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $beginTime;
    protected $_name = [
        'status'     => 'Status',
        'finishTime' => 'FinishTime',
        'progress'   => 'Progress',
        'taskId'     => 'TaskId',
        'beginTime'  => 'BeginTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        return $model;
    }
}
