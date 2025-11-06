<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoByIntervalResponseBody\data;

use AlibabaCloud\Dara\Model;

class voList extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $deliveryTag;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $rocketMqMsgId;

    /**
     * @var int
     */
    public $rt;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'action' => 'Action',
        'channelId' => 'ChannelId',
        'connectionId' => 'ConnectionId',
        'deliveryTag' => 'DeliveryTag',
        'queueName' => 'QueueName',
        'rocketMqMsgId' => 'RocketMqMsgId',
        'rt' => 'Rt',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->deliveryTag) {
            $res['DeliveryTag'] = $this->deliveryTag;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->rocketMqMsgId) {
            $res['RocketMqMsgId'] = $this->rocketMqMsgId;
        }

        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['DeliveryTag'])) {
            $model->deliveryTag = $map['DeliveryTag'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RocketMqMsgId'])) {
            $model->rocketMqMsgId = $map['RocketMqMsgId'];
        }

        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
