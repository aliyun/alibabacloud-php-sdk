<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListCommonLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The name of the action corresponding to the log.
     *
     * @example CreaterCluster
     *
     * @var string
     */
    public $action;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-9T3xPNezoS
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The log type.
     *
     * @example Operation
     *
     * @var string
     */
    public $logType;

    /**
     * @description The message of the log.
     *
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @description The account ID of the operator.
     *
     * @example 137***
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @description The request ID associated with the action that generated the log.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The action state in the log. Valid values:
     *
     *   InProgress: The action is being performed.
     *   Finished: The action is completed.
     *   Failed: The action failed.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The involved resource.
     *
     * @example i-abc***
     *
     * @var string
     */
    public $target;

    /**
     * @description The time when the log was generated.
     *
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
