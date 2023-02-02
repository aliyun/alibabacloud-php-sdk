<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailResponseBody\data\propertyList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The body of the message.
     *
     * @example hello,mq
     *
     * @var string
     */
    public $body;

    /**
     * @description The cyclic redundancy check (CRC) value of the message body.
     *
     * @example 914112295
     *
     * @var int
     */
    public $bodyCRC;

    /**
     * @description 消息体内容。
     *
     * @example hello
     *
     * @var string
     */
    public $bodyStr;

    /**
     * @description The producer instance that generated the message.
     *
     * @example 42.120.**.**:64646
     *
     * @var string
     */
    public $bornHost;

    /**
     * @description The timestamp that indicates the point in time when the message was generated. Unit: milliseconds.
     *
     * @example 1570761026630
     *
     * @var int
     */
    public $bornTimestamp;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ Instance.
     *
     * @example MQ_INST_184681981******_BXig0x6A
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the message.
     *
     * @example 1E0578FE110F18B4AAC235C05F2*****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The attributes of the message.
     *
     * @var propertyList[]
     */
    public $propertyList;

    /**
     * @description The number of retries that Message Queue for Apache RocketMQ performed to send the message to consumers.
     *
     * @example 0
     *
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @description The Message Queue for Apache RocketMQ broker that stores the message.
     *
     * @example 11.220.***.***:10911
     *
     * @var string
     */
    public $storeHost;

    /**
     * @description The size of the message. Unit: KB.
     *
     * @example 2
     *
     * @var int
     */
    public $storeSize;

    /**
     * @description The timestamp that indicates the point in time when the Message Queue for Apache RocketMQ broker stored the message. Unit: milliseconds.
     *
     * @example 1570761026708
     *
     * @var int
     */
    public $storeTimestamp;

    /**
     * @description The topic to which the message belongs.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'body'           => 'Body',
        'bodyCRC'        => 'BodyCRC',
        'bodyStr'        => 'BodyStr',
        'bornHost'       => 'BornHost',
        'bornTimestamp'  => 'BornTimestamp',
        'instanceId'     => 'InstanceId',
        'msgId'          => 'MsgId',
        'propertyList'   => 'PropertyList',
        'reconsumeTimes' => 'ReconsumeTimes',
        'storeHost'      => 'StoreHost',
        'storeSize'      => 'StoreSize',
        'storeTimestamp' => 'StoreTimestamp',
        'topic'          => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->bodyCRC) {
            $res['BodyCRC'] = $this->bodyCRC;
        }
        if (null !== $this->bodyStr) {
            $res['BodyStr'] = $this->bodyStr;
        }
        if (null !== $this->bornHost) {
            $res['BornHost'] = $this->bornHost;
        }
        if (null !== $this->bornTimestamp) {
            $res['BornTimestamp'] = $this->bornTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->propertyList) {
            $res['PropertyList'] = [];
            if (null !== $this->propertyList && \is_array($this->propertyList)) {
                $n = 0;
                foreach ($this->propertyList as $item) {
                    $res['PropertyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }
        if (null !== $this->storeHost) {
            $res['StoreHost'] = $this->storeHost;
        }
        if (null !== $this->storeSize) {
            $res['StoreSize'] = $this->storeSize;
        }
        if (null !== $this->storeTimestamp) {
            $res['StoreTimestamp'] = $this->storeTimestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['BodyCRC'])) {
            $model->bodyCRC = $map['BodyCRC'];
        }
        if (isset($map['BodyStr'])) {
            $model->bodyStr = $map['BodyStr'];
        }
        if (isset($map['BornHost'])) {
            $model->bornHost = $map['BornHost'];
        }
        if (isset($map['BornTimestamp'])) {
            $model->bornTimestamp = $map['BornTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['PropertyList'])) {
            if (!empty($map['PropertyList'])) {
                $model->propertyList = [];
                $n                   = 0;
                foreach ($map['PropertyList'] as $item) {
                    $model->propertyList[$n++] = null !== $item ? propertyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }
        if (isset($map['StoreHost'])) {
            $model->storeHost = $map['StoreHost'];
        }
        if (isset($map['StoreSize'])) {
            $model->storeSize = $map['StoreSize'];
        }
        if (isset($map['StoreTimestamp'])) {
            $model->storeTimestamp = $map['StoreTimestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
