<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeBenchmarkTaskResponseBody extends Model
{
    /**
     * @var int
     */
    public $availableAgent;

    /**
     * @var string
     */
    public $callerUid;

    /**
     * @var int
     */
    public $desiredAgent;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
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
