<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $clientip;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $taskBizType;

    /**
     * @var string
     */
    public $taskCancelStatus;

    /**
     * @var int
     */
    public $taskCancelStatusCode;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var int
     */
    public $taskNum;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskStatusCode;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $taskTypeCode;

    /**
     * @var string
     */
    public $taskTypeDescription;
    protected $_name = [
        'clientip' => 'Clientip',
        'createTime' => 'CreateTime',
        'taskBizType' => 'TaskBizType',
        'taskCancelStatus' => 'TaskCancelStatus',
        'taskCancelStatusCode' => 'TaskCancelStatusCode',
        'taskNo' => 'TaskNo',
        'taskNum' => 'TaskNum',
        'taskResult' => 'TaskResult',
        'taskStatus' => 'TaskStatus',
        'taskStatusCode' => 'TaskStatusCode',
        'taskType' => 'TaskType',
        'taskTypeCode' => 'TaskTypeCode',
        'taskTypeDescription' => 'TaskTypeDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientip) {
            $res['Clientip'] = $this->clientip;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->taskBizType) {
            $res['TaskBizType'] = $this->taskBizType;
        }

        if (null !== $this->taskCancelStatus) {
            $res['TaskCancelStatus'] = $this->taskCancelStatus;
        }

        if (null !== $this->taskCancelStatusCode) {
            $res['TaskCancelStatusCode'] = $this->taskCancelStatusCode;
        }

        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }

        if (null !== $this->taskNum) {
            $res['TaskNum'] = $this->taskNum;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskStatusCode) {
            $res['TaskStatusCode'] = $this->taskStatusCode;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->taskTypeCode) {
            $res['TaskTypeCode'] = $this->taskTypeCode;
        }

        if (null !== $this->taskTypeDescription) {
            $res['TaskTypeDescription'] = $this->taskTypeDescription;
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
        if (isset($map['Clientip'])) {
            $model->clientip = $map['Clientip'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['TaskBizType'])) {
            $model->taskBizType = $map['TaskBizType'];
        }

        if (isset($map['TaskCancelStatus'])) {
            $model->taskCancelStatus = $map['TaskCancelStatus'];
        }

        if (isset($map['TaskCancelStatusCode'])) {
            $model->taskCancelStatusCode = $map['TaskCancelStatusCode'];
        }

        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }

        if (isset($map['TaskNum'])) {
            $model->taskNum = $map['TaskNum'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskStatusCode'])) {
            $model->taskStatusCode = $map['TaskStatusCode'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TaskTypeCode'])) {
            $model->taskTypeCode = $map['TaskTypeCode'];
        }

        if (isset($map['TaskTypeDescription'])) {
            $model->taskTypeDescription = $map['TaskTypeDescription'];
        }

        return $model;
    }
}
