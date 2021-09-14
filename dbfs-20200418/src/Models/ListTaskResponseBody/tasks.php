<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListTaskResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $taskErrorReason;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $nextExecutionTime;

    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskStatusCode;

    /**
     * @var int
     */
    public $taskExecutionCounts;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $taskAdder;

    /**
     * @var string
     */
    public $taskProgressDescription;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $taskRunner;

    /**
     * @var int
     */
    public $taskProgress;

    /**
     * @var string
     */
    public $taskOwner;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $maxRetry;
    protected $_name = [
        'taskErrorReason'         => 'TaskErrorReason',
        'taskName'                => 'TaskName',
        'priority'                => 'Priority',
        'nextExecutionTime'       => 'NextExecutionTime',
        'completionTime'          => 'CompletionTime',
        'taskType'                => 'TaskType',
        'taskStatus'              => 'TaskStatus',
        'taskStatusCode'          => 'TaskStatusCode',
        'taskExecutionCounts'     => 'TaskExecutionCounts',
        'clientToken'             => 'ClientToken',
        'taskAdder'               => 'TaskAdder',
        'taskProgressDescription' => 'TaskProgressDescription',
        'createdTime'             => 'CreatedTime',
        'taskRunner'              => 'TaskRunner',
        'taskProgress'            => 'TaskProgress',
        'taskOwner'               => 'TaskOwner',
        'id'                      => 'Id',
        'maxRetry'                => 'MaxRetry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskErrorReason) {
            $res['TaskErrorReason'] = $this->taskErrorReason;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->nextExecutionTime) {
            $res['NextExecutionTime'] = $this->nextExecutionTime;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusCode) {
            $res['TaskStatusCode'] = $this->taskStatusCode;
        }
        if (null !== $this->taskExecutionCounts) {
            $res['TaskExecutionCounts'] = $this->taskExecutionCounts;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->taskAdder) {
            $res['TaskAdder'] = $this->taskAdder;
        }
        if (null !== $this->taskProgressDescription) {
            $res['TaskProgressDescription'] = $this->taskProgressDescription;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->taskRunner) {
            $res['TaskRunner'] = $this->taskRunner;
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }
        if (null !== $this->taskOwner) {
            $res['TaskOwner'] = $this->taskOwner;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskErrorReason'])) {
            $model->taskErrorReason = $map['TaskErrorReason'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['NextExecutionTime'])) {
            $model->nextExecutionTime = $map['NextExecutionTime'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusCode'])) {
            $model->taskStatusCode = $map['TaskStatusCode'];
        }
        if (isset($map['TaskExecutionCounts'])) {
            $model->taskExecutionCounts = $map['TaskExecutionCounts'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TaskAdder'])) {
            $model->taskAdder = $map['TaskAdder'];
        }
        if (isset($map['TaskProgressDescription'])) {
            $model->taskProgressDescription = $map['TaskProgressDescription'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['TaskRunner'])) {
            $model->taskRunner = $map['TaskRunner'];
        }
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }
        if (isset($map['TaskOwner'])) {
            $model->taskOwner = $map['TaskOwner'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }

        return $model;
    }
}
