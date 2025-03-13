<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeTasksRequest extends Model
{
    /**
     * @description The ID of the cloud phone instance.
     *
     * @example acp-2zecay9ponatdc4m****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the cloud phone instance.
     *
     * @example defaultInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the command execution. You can set the value to the last returned request ID.
     *
     * @example B8ED2BA9-0C6A-5643-818F-B5D60A64****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The level of the task. A value of 1 specifies a batch task. A value of 2 specifies an instance-level task.
     *
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the parameter is left empty, the data is queried from the first entry.
     *
     * @example FFbc8N4E1iOlcSxC+8boa0HHH2LKWbggYUinyrZWvtS1oTrMYCg1HuMLGuftj0****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The extension field.
     *
     * @example param
     *
     * @var string
     */
    public $param;

    /**
     * @description The ID of the parent task.
     *
     * @example t-iaej5dkbnmivx****
     *
     * @var string
     */
    public $parentTaskId;

    /**
     * @description The IDs of the resources.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The IDs of the tasks.
     *
     * @var string[]
     */
    public $taskIds;

    /**
     * @description The state of the task.
     *
     * Valid values:
     *
     *   PartFinished: The task is partially successful.
     *   Finished: The task is completed.
     *   Failed: The task failed.
     *   Skipped: The task is skipped.
     *   Processing: The task is running.
     *   Waiting: The task is in queue.
     *
     * @example Processing
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The status of the tasks.
     *
     * @var string[]
     */
    public $taskStatuses;

    /**
     * @description The type of the task.
     *
     * Valid values:
     *
     *   BackupFile: backs up files.
     *   StopInstance: stops cloud phone instances.
     *   RebootInstance: restarts cloud phone instances.
     *   StartApp: starts apps.
     *   SendFile: uploads files.
     *   RunCommand: sends remote command.
     *   RestartApp: restarts apps.
     *   ResetInstance: resets cloud phone instances.
     *   RecoverFile: recovers files.
     *   UninstallApp: uninstalls apps.
     *   StopApp: stops apps.
     *   Screenshot: takes screenshots.
     *   InstallApp: installs apps.
     *   FetchFile: downloads files.
     *   UpdateGroupImage: replaces images.
     *   StartInstance: starts instances.
     *
     * @example StartInstance
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The types of the tasks.
     *
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'invokeId'     => 'InvokeId',
        'level'        => 'Level',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'param'        => 'Param',
        'parentTaskId' => 'ParentTaskId',
        'resourceIds'  => 'ResourceIds',
        'taskIds'      => 'TaskIds',
        'taskStatus'   => 'TaskStatus',
        'taskStatuses' => 'TaskStatuses',
        'taskType'     => 'TaskType',
        'taskTypes'    => 'TaskTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatuses) {
            $res['TaskStatuses'] = $this->taskStatuses;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypes) {
            $res['TaskTypes'] = $this->taskTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatuses'])) {
            if (!empty($map['TaskStatuses'])) {
                $model->taskStatuses = $map['TaskStatuses'];
            }
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = $map['TaskTypes'];
            }
        }

        return $model;
    }
}
