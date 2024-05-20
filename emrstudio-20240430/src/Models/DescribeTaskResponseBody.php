<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskResponseBody extends Model
{
    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $delayTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $failRetryInterval;

    /**
     * @example 0
     *
     * @var int
     */
    public $failRetryTimes;

    /**
     * @example YES
     *
     * @var string
     */
    public $flag;

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
     * @example t-3q9jo749ne5****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example test
     *
     * @var string
     */
    public $taskName;

    /**
     * @example {
     * }
     * @var string
     */
    public $taskParams;

    /**
     * @example MEDIUM
     *
     * @var string
     */
    public $taskPriority;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeout;

    /**
     * @example CLOSE
     *
     * @var string
     */
    public $timeoutFlag;

    /**
     * @example WARN
     *
     * @var string
     */
    public $timeoutNotifyStrategy;

    /**
     * @example 2024-03-27 00:00:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;

    /**
     * @description Id of the request
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
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
        'requestId'             => 'requestId',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
