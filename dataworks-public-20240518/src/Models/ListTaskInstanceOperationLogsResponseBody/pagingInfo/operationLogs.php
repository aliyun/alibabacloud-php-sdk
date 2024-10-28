<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListTaskInstanceOperationLogsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class operationLogs extends Model
{
    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $operationContent;

    /**
     * @example 1111
     *
     * @var int
     */
    public $operationSeq;

    /**
     * @example 1234
     *
     * @var int
     */
    public $taskInstanceId;

    /**
     * @example 1000
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'operationContent' => 'OperationContent',
        'operationSeq'     => 'OperationSeq',
        'taskInstanceId'   => 'TaskInstanceId',
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
        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
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
        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
