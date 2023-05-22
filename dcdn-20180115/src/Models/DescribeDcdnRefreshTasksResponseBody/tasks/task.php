<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The URL of the object to be refreshed.
     *
     * @example 2014-11-27T08:23:22Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of the task.
     *
     *   **file**: URL-based refresh
     *   **path**: directory-based refresh
     *   **preload**: URL-based prefetch
     *
     * @example Internal Error
     *
     * @var string
     */
    public $description;

    /**
     * @description The status of the task.
     *
     *   **Complete**: The task has completed.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
     *
     * @example http://example.com/examplefile.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The ID of the task.
     *
     * @example file
     *
     * @var string
     */
    public $objectType;

    /**
     * @description >
     *   You can query the status information by task ID or URL.
     *   You can set both the **TaskId** parameter and the **ObjectPath** parameter to query. If you set neither the **TaskId** parameter nor the **ObjectPath** parameter, the data in the last 3 days on the first page is returned. By default, a maximum of 20 entries can be displayed on each page.
     *   If you specify the **DomainName** or **Status** parameter, you must also specify the **ObjectType** parameter.
     *   You can call this operation up to 10 times per second per account.
     *
     * @example 10
     *
     * @var string
     */
    public $process;

    /**
     * @description The type of error returned when the refresh or prefetch task has failed.
     *
     *   **InternalError**: An internal error occurred.
     *   **OriginTimeout**: The response from the origin server timed out.
     *   **OriginReturn StatusCode 5XX**: The origin server returned a 5XX error.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The URL of the object to be refreshed.
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
