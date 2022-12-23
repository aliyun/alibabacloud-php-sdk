<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2014-11-27T08:23:22Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of the error that was returned when the refresh or prefetch task failed. Valid values:
     *
     *   **Internal Error**: indicates that an internal error occurred.
     *   **Origin Timeout**: indicates that the response from the origin server timed out.
     *   **Origin Return StatusCode 5XX**: indicates that the origin server returned a 5XX error.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the object to which the refresh or prefetch task is applied.
     *
     * @example http://example.com/****.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the task. Valid values:
     *
     *   **file**: refreshes one or more files. This is the default value.
     *   **directory**: refreshes the files under one or more directories.
     *   **preload**: prefetches one or more files.
     *
     * @example file
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The progress of the task, in percentage.
     *
     * @example 100%
     *
     * @var string
     */
    public $process;

    /**
     * @description The status of the task. Valid values:
     *
     *   **Complete**: indicates that the task is complete.
     *   **Refreshing**: indicates that the task is in progress.
     *   **Failed**: indicates that the task failed.
     *   **Pending**: indicates that the task is pending.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example 704225667
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'objectPath'   => 'ObjectPath',
        'objectType'   => 'ObjectType',
        'process'      => 'Process',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
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
