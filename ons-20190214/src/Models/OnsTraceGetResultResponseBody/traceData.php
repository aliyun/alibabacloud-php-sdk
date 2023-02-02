<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;
use AlibabaCloud\Tea\Model;

class traceData extends Model
{
    /**
     * @description The point in time when the task was created.
     *
     * @example 1570966857000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the instance that contains the message.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the message that is queried.
     *
     * @example 1E05791C117818B4AAC23B1BB0CE****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The key of the message that is queried.
     *
     * @example ORDERID_100
     *
     * @var string
     */
    public $msgKey;

    /**
     * @description The ID of the task.
     *
     * @example 272967562652883649157096685****
     *
     * @var string
     */
    public $queryId;

    /**
     * @description The status of the task. Valid values:
     *
     *   **finish**: The task is complete.
     *   **working**: The task is in progress.
     *   **removed**: The task is deleted.
     *
     * @example finish
     *
     * @var string
     */
    public $status;

    /**
     * @description The topic in which the message is stored.
     *
     * @example test
     *
     * @var string
     */
    public $topic;

    /**
     * @description The details of the message trace.
     *
     * @var traceList
     */
    public $traceList;

    /**
     * @description The most recent point in time when the task was updated.
     *
     * @example 1570966877000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user who created the task.
     *
     * @example 27296756265288****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'msgId'      => 'MsgId',
        'msgKey'     => 'MsgKey',
        'queryId'    => 'QueryId',
        'status'     => 'Status',
        'topic'      => 'Topic',
        'traceList'  => 'TraceList',
        'updateTime' => 'UpdateTime',
        'userId'     => 'UserId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->msgKey) {
            $res['MsgKey'] = $this->msgKey;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->traceList) {
            $res['TraceList'] = null !== $this->traceList ? $this->traceList->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['MsgKey'])) {
            $model->msgKey = $map['MsgKey'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TraceList'])) {
            $model->traceList = traceList::fromMap($map['TraceList']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
