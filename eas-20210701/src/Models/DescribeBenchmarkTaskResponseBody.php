<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeBenchmarkTaskResponseBody extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $availableAgent;

    /**
     * @description 压测任务的状态。
     *
     * @example 1640133467****
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description 预期的压测实例个数。
     *
     * @example 4
     *
     * @var int
     */
    public $desiredAgent;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @example Benchmar task is Running
     *
     * @var string
     */
    public $message;

    /**
     * @example 1029728669****
     *
     * @var string
     */
    public $parentUid;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $reason;

    /**
     * @description 请求ID。
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 访问eas服务的鉴权token。
     *
     * @example foo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description 压测任务ID。
     *
     * @example eas-b-gv4y86u****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 当前压测任务状态产生的原因。
     *
     * @example benchmark-larec-test-ae70
     *
     * @var string
     */
    public $taskName;

    /**
     * @description 资源拥有者的UID。
     *
     * @example 6062787a-9301****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'availableAgent' => 'AvailableAgent',
        'callerUid'      => 'CallerUid',
        'desiredAgent'   => 'DesiredAgent',
        'endpoint'       => 'Endpoint',
        'message'        => 'Message',
        'parentUid'      => 'ParentUid',
        'reason'         => 'Reason',
        'requestId'      => 'RequestId',
        'serviceName'    => 'ServiceName',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'token'          => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAgent) {
            $res['AvailableAgent'] = $this->availableAgent;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->desiredAgent) {
            $res['DesiredAgent'] = $this->desiredAgent;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBenchmarkTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAgent'])) {
            $model->availableAgent = $map['AvailableAgent'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['DesiredAgent'])) {
            $model->desiredAgent = $map['DesiredAgent'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
