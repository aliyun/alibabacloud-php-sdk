<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTraceQueryByMsgIdRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570852800000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1570968000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance which contains the specified topic.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the message that you want to query.
     *
     * @example 1E05791C117818B4AAC23B1BB0CE****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The topic in which the message you want to query is stored.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'msgId'      => 'MsgId',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTraceQueryByMsgIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
