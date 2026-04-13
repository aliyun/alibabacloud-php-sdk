<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAgentTaskResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $runningAt;

    /**
     * @var string
     */
    public $steps;

    /**
     * @var string
     */
    public $taskDuration;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $userPrompt;
    protected $_name = [
        'currentStatus' => 'CurrentStatus',
        'instanceId' => 'InstanceId',
        'runningAt' => 'RunningAt',
        'steps' => 'Steps',
        'taskDuration' => 'TaskDuration',
        'taskId' => 'TaskId',
        'taskResult' => 'TaskResult',
        'userPrompt' => 'UserPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->runningAt) {
            $res['RunningAt'] = $this->runningAt;
        }

        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
        }

        if (null !== $this->taskDuration) {
            $res['TaskDuration'] = $this->taskDuration;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RunningAt'])) {
            $model->runningAt = $map['RunningAt'];
        }

        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }

        if (isset($map['TaskDuration'])) {
            $model->taskDuration = $map['TaskDuration'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        return $model;
    }
}
