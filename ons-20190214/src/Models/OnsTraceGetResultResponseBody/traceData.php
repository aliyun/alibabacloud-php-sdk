<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;

class traceData extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $msgKey;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var traceList
     */
    public $traceList;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'msgId' => 'MsgId',
        'msgKey' => 'MsgKey',
        'queryId' => 'QueryId',
        'status' => 'Status',
        'topic' => 'Topic',
        'traceList' => 'TraceList',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->traceList) {
            $this->traceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TraceList'] = null !== $this->traceList ? $this->traceList->toArray($noStream) : $this->traceList;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
