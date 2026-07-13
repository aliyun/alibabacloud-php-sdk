<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceAsyncTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceAsyncTaskResponseBody\items\recoveryMessage;

class items extends Model
{
    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var recoveryMessage
     */
    public $recoveryMessage;

    /**
     * @var string
     */
    public $taskCode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var bool
     */
    public $waitingForUserAction;
    protected $_name = [
        'currentStep' => 'CurrentStep',
        'recoveryMessage' => 'RecoveryMessage',
        'taskCode' => 'TaskCode',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'waitingForUserAction' => 'WaitingForUserAction',
    ];

    public function validate()
    {
        if (null !== $this->recoveryMessage) {
            $this->recoveryMessage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->recoveryMessage) {
            $res['RecoveryMessage'] = null !== $this->recoveryMessage ? $this->recoveryMessage->toArray($noStream) : $this->recoveryMessage;
        }

        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->waitingForUserAction) {
            $res['WaitingForUserAction'] = $this->waitingForUserAction;
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
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['RecoveryMessage'])) {
            $model->recoveryMessage = recoveryMessage::fromMap($map['RecoveryMessage']);
        }

        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['WaitingForUserAction'])) {
            $model->waitingForUserAction = $map['WaitingForUserAction'];
        }

        return $model;
    }
}
