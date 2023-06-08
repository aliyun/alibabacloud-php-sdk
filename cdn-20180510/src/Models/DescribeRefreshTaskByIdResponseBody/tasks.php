<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTaskByIdResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The time when the task was created. The time is displayed in UTC.
     *
     * @example 2020-08-03T08:54:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error returned when the refresh or prefetch task failed. Valid values:
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
     * @description The path of the object refreshed by the refresh task.
     *
     * @example http://example.com/abc.jpg
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the task. Valid values:
     *
     *   **file**: refreshes an individual file.
     *   **directory**: refreshes files in the specified directory.
     *   **preload**: prefetches an individual file.
     *   **regex**: refreshes content based on a regular expression.
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
     *   **Complete**
     *   **Pending**
     *   **Refreshing**
     *   **Failed**
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example 24840
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
     * @return tasks
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
