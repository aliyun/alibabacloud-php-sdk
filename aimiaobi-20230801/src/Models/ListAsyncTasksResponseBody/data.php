<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $taskCode;

    /**
     * @var string
     */
    public $taskDefinition;

    /**
     * @var string
     */
    public $taskEndTime;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $taskExecuteTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskInnerErrorMessage;

    /**
     * @var string
     */
    public $taskIntermediateResult;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskProgressMessage;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskRetryCount;

    /**
     * @var string
     */
    public $taskStartTime;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'id' => 'Id',
        'taskCode' => 'TaskCode',
        'taskDefinition' => 'TaskDefinition',
        'taskEndTime' => 'TaskEndTime',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskExecuteTime' => 'TaskExecuteTime',
        'taskId' => 'TaskId',
        'taskInnerErrorMessage' => 'TaskInnerErrorMessage',
        'taskIntermediateResult' => 'TaskIntermediateResult',
        'taskName' => 'TaskName',
        'taskParam' => 'TaskParam',
        'taskProgressMessage' => 'TaskProgressMessage',
        'taskResult' => 'TaskResult',
        'taskRetryCount' => 'TaskRetryCount',
        'taskStartTime' => 'TaskStartTime',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
        'updateTime' => 'UpdateTime',
        'updateUser' => 'UpdateUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }

        if (null !== $this->taskDefinition) {
            $res['TaskDefinition'] = $this->taskDefinition;
        }

        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }

        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskExecuteTime) {
            $res['TaskExecuteTime'] = $this->taskExecuteTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskInnerErrorMessage) {
            $res['TaskInnerErrorMessage'] = $this->taskInnerErrorMessage;
        }

        if (null !== $this->taskIntermediateResult) {
            $res['TaskIntermediateResult'] = $this->taskIntermediateResult;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        if (null !== $this->taskProgressMessage) {
            $res['TaskProgressMessage'] = $this->taskProgressMessage;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->taskRetryCount) {
            $res['TaskRetryCount'] = $this->taskRetryCount;
        }

        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }

        if (isset($map['TaskDefinition'])) {
            $model->taskDefinition = $map['TaskDefinition'];
        }

        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }

        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }

        if (isset($map['TaskExecuteTime'])) {
            $model->taskExecuteTime = $map['TaskExecuteTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskInnerErrorMessage'])) {
            $model->taskInnerErrorMessage = $map['TaskInnerErrorMessage'];
        }

        if (isset($map['TaskIntermediateResult'])) {
            $model->taskIntermediateResult = $map['TaskIntermediateResult'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskProgressMessage'])) {
            $model->taskProgressMessage = $map['TaskProgressMessage'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['TaskRetryCount'])) {
            $model->taskRetryCount = $map['TaskRetryCount'];
        }

        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }

        return $model;
    }
}
