<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\PollTaskResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @example 2018-03-26 15:08:20
     *
     * @var string
     */
    public $createTime;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example The operation is successful.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example S201817141000000
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 15fee9d10d514bada66bd08c5723c583
     *
     * @var string
     */
    public $taskDetailNo;

    /**
     * @example b95bc334-f7d8-4f39-8a62-4c4302a243d8
     *
     * @var string
     */
    public $taskNo;

    /**
     * @example test
     *
     * @var string
     */
    public $taskResult;

    /**
     * @example EXECUTE_SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $taskStatusCode;

    /**
     * @example CHG_DNS
     *
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskTypeDescription;

    /**
     * @example 0
     *
     * @var int
     */
    public $tryCount;

    /**
     * @example 2018-03-26 15:22:18
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'domainName'          => 'DomainName',
        'errorMsg'            => 'ErrorMsg',
        'instanceId'          => 'InstanceId',
        'taskDetailNo'        => 'TaskDetailNo',
        'taskNo'              => 'TaskNo',
        'taskResult'          => 'TaskResult',
        'taskStatus'          => 'TaskStatus',
        'taskStatusCode'      => 'TaskStatusCode',
        'taskType'            => 'TaskType',
        'taskTypeDescription' => 'TaskTypeDescription',
        'tryCount'            => 'TryCount',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskDetailNo) {
            $res['TaskDetailNo'] = $this->taskDetailNo;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }
        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusCode) {
            $res['TaskStatusCode'] = $this->taskStatusCode;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeDescription) {
            $res['TaskTypeDescription'] = $this->taskTypeDescription;
        }
        if (null !== $this->tryCount) {
            $res['TryCount'] = $this->tryCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskDetailNo'])) {
            $model->taskDetailNo = $map['TaskDetailNo'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }
        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusCode'])) {
            $model->taskStatusCode = $map['TaskStatusCode'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeDescription'])) {
            $model->taskTypeDescription = $map['TaskTypeDescription'];
        }
        if (isset($map['TryCount'])) {
            $model->tryCount = $map['TryCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
