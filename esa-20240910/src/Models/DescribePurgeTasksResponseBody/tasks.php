<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribePurgeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The purged content.
     *
     * @example http://a.com/1.jpg?b=1
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the task was created.
     *
     * @example 2023-07-26T01:56:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error description returned when the purge task failed.
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
     * @description The task ID.
     *
     * @example 16346513304
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the purge task. Valid values:
     *
     *   **file** (default): purges the cache by file.
     *   **cachetag**: purges the cache by cache tag.
     *   **directory**: purges the cache by directory.
     *   **ignoreParams**: purges the cache by URL with specified parameters ignored.
     *   **hostname**: purges the cache by hostname.
     *   **purgeall**: purges all cache.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'     => 'Content',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'process'     => 'Process',
        'status'      => 'Status',
        'taskId'      => 'TaskId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
