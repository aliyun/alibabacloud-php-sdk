<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsMessageDetailRequest extends Model
{
    /**
     * @description The ID of the Message Queue for Apache RocketMQ Instance.
     *
     * @example MQ_INST_184681981******_BXig0x6A
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the message that you want to query.
     *
     * @example 1E0578FE110F18B4AAC235C0******
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The name of the topic in which the message you want to query is stored.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
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
     * @return OnsMessageDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
