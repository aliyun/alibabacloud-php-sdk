<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListAITasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example 2023-03-15T03:15:53
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example Handler execution unexpected failure
     *
     * @var string
     */
    public $statusReason;

    /**
     * @example t-asasas*****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example GenerateTemplate
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 2023-11-20T22:00:50
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'prompt'       => 'Prompt',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
        'taskId'       => 'TaskId',
        'taskType'     => 'TaskType',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
