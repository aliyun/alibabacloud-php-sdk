<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class DescribeManualTaskResponseBody extends Model
{
    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 描述
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 123***
     *
     * @var string
     */
    public $manualTaskId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $manualTaskName;

    /**
     * @description 目录ID
     *
     * @example 123***
     *
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @description 项目ID
     *
     * @example 123***
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 资源id列表
     *
     * @example 123
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description 任务参数
     *
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @description 任务类型
     *
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 更新时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Id of the request
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
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
        'requestId'         => 'requestId',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeManualTaskResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
