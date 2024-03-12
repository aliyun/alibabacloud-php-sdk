<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeNodes;

use AlibabaCloud\Tea\Model;

class invokeNode extends Model
{
    /**
     * @example 2023-02-06T07:12:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example AccountNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example the specified instance does not exists
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @example 2023-04-10T10:53:46.156+08:00
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @example e01-cn-9lb3c15m81j
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 2023-03-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2023-03-30T16:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'errorCode'        => 'ErrorCode',
        'errorInfo'        => 'ErrorInfo',
        'finishTime'       => 'FinishTime',
        'invocationStatus' => 'InvocationStatus',
        'nodeId'           => 'NodeId',
        'startTime'        => 'StartTime',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
