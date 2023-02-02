<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsMessagePushRequest extends Model
{
    /**
     * @description The ID of the consumer. You can call the [OnsConsumerGetConnection](~~29598~~) operation to query the ID of each consumer in a consumer group.
     *
     * @example 30.5.121.**@24813#-1999745829#-1737591554#453111174894656
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the consumer group. For information about what a consumer group is, see [Terms](~~29533~~).
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance to which the specified consumer group belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the message.
     *
     * @example 0BC1669963053CF68F733BB70396****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The topic to which the message is pushed.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'clientId'   => 'ClientId',
        'groupId'    => 'GroupId',
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
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
     * @return OnsMessagePushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
