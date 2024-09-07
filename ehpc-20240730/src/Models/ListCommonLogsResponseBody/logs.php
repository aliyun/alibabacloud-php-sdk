<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListCommonLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @example CreaterCluster
     *
     * @var string
     */
    public $action;

    /**
     * @example ehpc-hz-9T3xPNezoS
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Operation
     *
     * @var string
     */
    public $logType;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example 137***
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @example i-abc***
     *
     * @var string
     */
    public $target;

    /**
     * @example 2024-08-22 14:21:54
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'action'      => 'Action',
        'clusterId'   => 'ClusterId',
        'logType'     => 'LogType',
        'message'     => 'Message',
        'operatorUid' => 'OperatorUid',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
        'target'      => 'Target',
        'time'        => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
