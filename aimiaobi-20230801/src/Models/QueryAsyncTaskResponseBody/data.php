<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskResponseBody;

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
     * @var string
     */
    public $taskCode;
    /**
     * @var string
     */
    public $taskErrorMessage;
    /**
     * @var string
     */
    public $taskId;
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
     * @var int
     */
    public $taskStatus;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'createUser'             => 'CreateUser',
        'taskCode'               => 'TaskCode',
        'taskErrorMessage'       => 'TaskErrorMessage',
        'taskId'                 => 'TaskId',
        'taskIntermediateResult' => 'TaskIntermediateResult',
        'taskName'               => 'TaskName',
        'taskParam'              => 'TaskParam',
        'taskProgressMessage'    => 'TaskProgressMessage',
        'taskResult'             => 'TaskResult',
        'taskRetryCount'         => 'TaskRetryCount',
        'taskStatus'             => 'TaskStatus',
        'updateTime'             => 'UpdateTime',
        'updateUser'             => 'UpdateUser',
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

        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }

        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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

        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }

        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
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
