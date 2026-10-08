<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class operationLogs extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operationContent;

    /**
     * @var int
     */
    public $operationSeq;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'createTime' => 'CreateTime',
        'objectType' => 'ObjectType',
        'operationContent' => 'OperationContent',
        'operationSeq' => 'OperationSeq',
        'taskId' => 'TaskId',
        'taskInstanceId' => 'TaskInstanceId',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->operationContent) {
            $res['OperationContent'] = $this->operationContent;
        }

        if (null !== $this->operationSeq) {
            $res['OperationSeq'] = $this->operationSeq;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['OperationContent'])) {
            $model->operationContent = $map['OperationContent'];
        }

        if (isset($map['OperationSeq'])) {
            $model->operationSeq = $map['OperationSeq'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
