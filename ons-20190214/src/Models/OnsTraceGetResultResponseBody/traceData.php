<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;
use AlibabaCloud\Tea\Model;

class traceData extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $msgKey;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var traceList
     */
    public $traceList;

    /**
     * @var string
     */
    public $queryId;
    protected $_name = [
        'status'     => 'Status',
        'msgKey'     => 'MsgKey',
        'updateTime' => 'UpdateTime',
        'createTime' => 'CreateTime',
        'topic'      => 'Topic',
        'userId'     => 'UserId',
        'instanceId' => 'InstanceId',
        'msgId'      => 'MsgId',
        'traceList'  => 'TraceList',
        'queryId'    => 'QueryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->msgKey) {
            $res['MsgKey'] = $this->msgKey;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->traceList) {
            $res['TraceList'] = null !== $this->traceList ? $this->traceList->toMap() : null;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MsgKey'])) {
            $model->msgKey = $map['MsgKey'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['TraceList'])) {
            $model->traceList = traceList::fromMap($map['TraceList']);
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
