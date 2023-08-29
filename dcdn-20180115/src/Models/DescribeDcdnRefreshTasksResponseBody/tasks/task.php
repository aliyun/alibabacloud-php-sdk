<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
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
     * @description The type of error returned when the refresh or prefetch task has failed.
     *
     *   **InternalError**: An internal error occurred.
     *   **OriginTimeout**: The response from the origin server timed out.
     *   **OriginReturn StatusCode 5XX**: The origin server returned a 5XX error.
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the object refreshed.
     *
     * @example http://example.com/examplefile.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the task. Valid values:
     *
     *   **file**: URL-based refresh
     *   **path**: directory-based refresh
     *   **regex**: regular expression-based refresh
     *   **preload**: URL-based prefetch
     *
     * @example file
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The progress of the task in percentage.
     *
     * @example 10
     *
     * @var string
     */
    public $process;

    /**
     * @description The status of the auxiliary media asset.
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
     * @example 123
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
