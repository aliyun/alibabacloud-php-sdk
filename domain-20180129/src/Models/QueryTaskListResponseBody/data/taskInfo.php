<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskCancelStatus;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var int
     */
    public $taskCancelStatusCode;

    /**
     * @var int
     */
    public $taskStatusCode;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskTypeDescription;

    /**
     * @var int
     */
    public $taskNum;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $clientip;
    protected $_name = [
        'taskType'             => 'TaskType',
        'taskCancelStatus'     => 'TaskCancelStatus',
        'taskNo'               => 'TaskNo',
        'taskCancelStatusCode' => 'TaskCancelStatusCode',
        'taskStatusCode'       => 'TaskStatusCode',
        'taskStatus'           => 'TaskStatus',
        'taskTypeDescription'  => 'TaskTypeDescription',
        'taskNum'              => 'TaskNum',
        'createTime'           => 'CreateTime',
        'clientip'             => 'Clientip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskCancelStatus) {
            $res['TaskCancelStatus'] = $this->taskCancelStatus;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }
        if (null !== $this->taskCancelStatusCode) {
            $res['TaskCancelStatusCode'] = $this->taskCancelStatusCode;
        }
        if (null !== $this->taskStatusCode) {
            $res['TaskStatusCode'] = $this->taskStatusCode;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskTypeDescription) {
            $res['TaskTypeDescription'] = $this->taskTypeDescription;
        }
        if (null !== $this->taskNum) {
            $res['TaskNum'] = $this->taskNum;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->clientip) {
            $res['Clientip'] = $this->clientip;
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskCancelStatus'])) {
            $model->taskCancelStatus = $map['TaskCancelStatus'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }
        if (isset($map['TaskCancelStatusCode'])) {
            $model->taskCancelStatusCode = $map['TaskCancelStatusCode'];
        }
        if (isset($map['TaskStatusCode'])) {
            $model->taskStatusCode = $map['TaskStatusCode'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskTypeDescription'])) {
            $model->taskTypeDescription = $map['TaskTypeDescription'];
        }
        if (isset($map['TaskNum'])) {
            $model->taskNum = $map['TaskNum'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Clientip'])) {
            $model->clientip = $map['Clientip'];
        }

        return $model;
    }
}
