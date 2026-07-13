<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateInstanceAsyncTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var string
     */
    public $modifiedAt;

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
        'createdAt' => 'CreatedAt',
        'currentStep' => 'CurrentStep',
        'modifiedAt' => 'ModifiedAt',
        'taskCode' => 'TaskCode',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'waitingForUserAction' => 'WaitingForUserAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
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
