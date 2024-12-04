<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskOperationLogsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class operationLogs extends Model
{
    /**
     * @description The time when the operation log was generated.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The operation content.
     *
     * @var string
     */
    public $operationContent;

    /**
     * @description The serial number of the operation.
     *
     * @example 1111
     *
     * @var int
     */
    public $operationSeq;

    /**
     * @description The ID of the task on which the operation was performed.
     *
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The account ID of the operator.
     *
     * @example 1000
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'operationContent' => 'OperationContent',
        'operationSeq'     => 'OperationSeq',
        'taskId'           => 'TaskId',
        'user'             => 'User',
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
        if (null !== $this->operationContent) {
            $res['OperationContent'] = $this->operationContent;
        }
        if (null !== $this->operationSeq) {
            $res['OperationSeq'] = $this->operationSeq;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
