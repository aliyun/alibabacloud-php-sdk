<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example mt-3q9jo749ne5****
     *
     * @var string
     */
    public $manualTaskId;

    /**
     * @example test
     *
     * @var string
     */
    public $manualTaskName;

    /**
     * @example mtd-oy98v7n43el****
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @example p-3q9jo749ne5****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example r-oy98v7n43el****
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'manualTaskId'      => 'ManualTaskId',
        'manualTaskName'    => 'ManualTaskName',
        'parentDirectoryId' => 'ParentDirectoryId',
        'projectId'         => 'ProjectId',
        'resourceIds'       => 'ResourceIds',
        'taskParams'        => 'TaskParams',
        'taskType'          => 'TaskType',
        'updateTime'        => 'UpdateTime',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->manualTaskId) {
            $res['ManualTaskId'] = $this->manualTaskId;
        }
        if (null !== $this->manualTaskName) {
            $res['ManualTaskName'] = $this->manualTaskName;
        }
        if (null !== $this->parentDirectoryId) {
            $res['ParentDirectoryId'] = $this->parentDirectoryId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ManualTaskId'])) {
            $model->manualTaskId = $map['ManualTaskId'];
        }
        if (isset($map['ManualTaskName'])) {
            $model->manualTaskName = $map['ManualTaskName'];
        }
        if (isset($map['ParentDirectoryId'])) {
            $model->parentDirectoryId = $map['ParentDirectoryId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
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
