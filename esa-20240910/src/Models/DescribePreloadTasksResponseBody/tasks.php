<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribePreloadTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The prefetched content.
     *
     * @example http://a.com/1.jpg?b=2
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the task was created.
     *
     * @example 2023-03-28 14:28:57
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message returned upon a prefetch task failure. Valid values:
     *
     *   **Internal Error**
     *   **Origin Timeout**
     *   **Origin Return StatusCode 5XX**
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The progress of the task, in percentage.
     *
     * @example 100%
     *
     * @var string
     */
    public $process;

    /**
     * @description The task status.
     *
     *   **Complete**: The task is complete.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the queried task.
     *
     * @example 1597854579687428
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'process' => 'Process',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
