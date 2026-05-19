<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\PauseAgentTaskResponseBody;

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
    public $failedReason;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $pausingAt;

    /**
     * @var string
     */
    public $previousStatus;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentStatus' => 'CurrentStatus',
        'failedReason' => 'FailedReason',
        'instanceId' => 'InstanceId',
        'pausingAt' => 'PausingAt',
        'previousStatus' => 'PreviousStatus',
        'taskId' => 'TaskId',
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

        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pausingAt) {
            $res['PausingAt'] = $this->pausingAt;
        }

        if (null !== $this->previousStatus) {
            $res['PreviousStatus'] = $this->previousStatus;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PausingAt'])) {
            $model->pausingAt = $map['PausingAt'];
        }

        if (isset($map['PreviousStatus'])) {
            $model->previousStatus = $map['PreviousStatus'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
