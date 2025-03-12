<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponseBody\steps;

use AlibabaCloud\Tea\Model;

class subTasks extends Model
{
    /**
     * @description Creation Time
     *
     * @example 2022-11-30T2:00:00.852Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Subtask Failure Message
     *
     * @example Releasing [prod_main_mid_26e234cf] in region [cn-beijing] with weight [0]
     *
     * @var string
     */
    public $message;

    /**
     * @description Task ID
     *
     * @example i158805051661047928377
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Task Execution State
     *
     * @example running
     *
     * @var string
     */
    public $taskState;

    /**
     * @description Task Type
     *
     * @example cut_node_sub_task
     *
     * @var string
     */
    public $taskType;

    /**
     * @description Update Time
     *
     * @example 2022-11-30T02:20:14.852Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'message'    => 'Message',
        'taskId'     => 'TaskId',
        'taskState'  => 'TaskState',
        'taskType'   => 'TaskType',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
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
     * @return subTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
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
