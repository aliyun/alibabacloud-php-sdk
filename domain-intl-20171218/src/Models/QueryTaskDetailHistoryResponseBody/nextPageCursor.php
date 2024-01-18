<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskDetailHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class nextPageCursor extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskDetailNo;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskStatusCode;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskTypeDescription;

    /**
     * @var int
     */
    public $tryCount;

    /**
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
     * @return nextPageCursor
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
