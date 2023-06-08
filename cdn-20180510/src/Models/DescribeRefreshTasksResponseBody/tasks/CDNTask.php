<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class CDNTask extends Model
{
    /**
     * @description The time when the task was created. The time is displayed in UTC.
     *
     * @example 2014-11-27T08:23:22Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of the error returned when the refresh or prefetch task failed. Valid values:
     *
     *   **InternalError**: An internal error occurred.
     *   **OriginTimeout**: The response from the origin server timed out.
     *   **OriginReturnStatusCode 5XX**: The origin server returned a 5XX error.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the object refreshed.
     *
     * @example http://example.com/1.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the task.
     *
     *   **file**: refreshes one or more files.
     *   **directory**: refreshes files in the specified directories.
     *   **regex**: refreshes content based on a regular expression.
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
     *   **Complete**: The task has completed.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
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
     * @return CDNTask
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
