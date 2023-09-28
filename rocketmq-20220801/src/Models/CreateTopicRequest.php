<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicRequest extends Model
{
    /**
     * @description The type of messages in the topic that you want to create.
     *
     * Valid values:
     *
     *   TRANSACTION: transactional messages
     *   FIFO: ordered messages
     *   DELAY: scheduled messages or delayed Message
     *   NORMAL: normal messages
     *
     * > The type of messages in the topic must be the same as the type of messages that you want to send. For example, if you create a topic whose message type is ordered messages, the topic can be used to send and receive only ordered messages.
     * @example NORMAL
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The description of the topic that you want to create.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'messageType' => 'messageType',
        'remark'      => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
