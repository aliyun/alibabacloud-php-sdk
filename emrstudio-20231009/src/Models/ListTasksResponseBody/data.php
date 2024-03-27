<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description 延时执行时间
     *
     * @example 0
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description 描述
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description 失败重试间隔
     *
     * @example 1
     *
     * @var int
     */
    public $failRetryInterval;

    /**
     * @description 失败重试次数
     *
     * @example 0
     *
     * @var int
     */
    public $failRetryTimes;

    /**
     * @description 运行标志
     *
     * @example YES
     *
     * @var string
     */
    public $flag;

    /**
     * @description 项目ID
     *
     * @example 123***
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 资源ID列表
     *
     * @example 123
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 123***
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $taskName;

    /**
     * @description 任务参数
     *
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @description 任务优先级
     *
     * @example MEDIUM
     *
     * @var string
     */
    public $taskPriority;

    /**
     * @description 任务类型
     *
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 超时时长
     *
     * @example 0
     *
     * @var int
     */
    public $timeout;

    /**
     * @description 超时告警标志
     *
     * @example CLOSE
     *
     * @var string
     */
    public $timeoutFlag;

    /**
     * @description 超时告警标志
     *
     * @example WARN
     *
     * @var string
     */
    public $timeoutNotifyStrategy;

    /**
     * @description 更新时间
     *
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 版本
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'delayTime'             => 'DelayTime',
        'description'           => 'Description',
        'failRetryInterval'     => 'FailRetryInterval',
        'failRetryTimes'        => 'FailRetryTimes',
        'flag'                  => 'Flag',
        'projectId'             => 'ProjectId',
        'resourceIds'           => 'ResourceIds',
        'taskId'                => 'TaskId',
        'taskName'              => 'TaskName',
        'taskParams'            => 'TaskParams',
        'taskPriority'          => 'TaskPriority',
        'taskType'              => 'TaskType',
        'timeout'               => 'Timeout',
        'timeoutFlag'           => 'TimeoutFlag',
        'timeoutNotifyStrategy' => 'TimeoutNotifyStrategy',
        'updateTime'            => 'UpdateTime',
        'version'               => 'Version',
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
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->failRetryInterval) {
            $res['FailRetryInterval'] = $this->failRetryInterval;
        }
        if (null !== $this->failRetryTimes) {
            $res['FailRetryTimes'] = $this->failRetryTimes;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskPriority) {
            $res['TaskPriority'] = $this->taskPriority;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->timeoutFlag) {
            $res['TimeoutFlag'] = $this->timeoutFlag;
        }
        if (null !== $this->timeoutNotifyStrategy) {
            $res['TimeoutNotifyStrategy'] = $this->timeoutNotifyStrategy;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FailRetryInterval'])) {
            $model->failRetryInterval = $map['FailRetryInterval'];
        }
        if (isset($map['FailRetryTimes'])) {
            $model->failRetryTimes = $map['FailRetryTimes'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskPriority'])) {
            $model->taskPriority = $map['TaskPriority'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TimeoutFlag'])) {
            $model->timeoutFlag = $map['TimeoutFlag'];
        }
        if (isset($map['TimeoutNotifyStrategy'])) {
            $model->timeoutNotifyStrategy = $map['TimeoutNotifyStrategy'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
