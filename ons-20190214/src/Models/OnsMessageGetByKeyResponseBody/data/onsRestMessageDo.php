<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponseBody\data\onsRestMessageDo\propertyList;
use AlibabaCloud\Tea\Model;

class onsRestMessageDo extends Model
{
    /**
     * @description The cyclic redundancy check (CRC) value of the message body.
     *
     * @example 914112295
     *
     * @var int
     */
    public $bodyCRC;

    /**
     * @description The producer client that generated the message.
     *
     * @example 42.120.***.***:59270
     *
     * @var string
     */
    public $bornHost;

    /**
     * @description The timestamp that indicates when the message was produced.
     *
     * @example 1570760999721
     *
     * @var int
     */
    public $bornTimestamp;

    /**
     * @description The ID of the instance
     *
     * @example MQ_INST_111111111111_DOxxxxxx
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
     * @var propertyList
     */
    public $propertyList;

    /**
     * @description The number of retries that were performed to send the message to consumers.
     *
     * @example 1
     *
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @description The ApsaraMQ for RocketMQ broker that stores the message.
     *
     * @example 11.193.***.***:10911
     *
     * @var string
     */
    public $storeHost;

    /**
     * @description The size of the message.
     *
     * @example 406
     *
     * @var int
     */
    public $storeSize;

    /**
     * @description The timestamp that indicates when the ApsaraMQ for RocketMQ broker stored the message.
     *
     * @example 1570760999811
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
        'bodyCRC'        => 'BodyCRC',
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
        if (null !== $this->bodyCRC) {
            $res['BodyCRC'] = $this->bodyCRC;
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
            $res['PropertyList'] = null !== $this->propertyList ? $this->propertyList->toMap() : null;
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
     * @return onsRestMessageDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyCRC'])) {
            $model->bodyCRC = $map['BodyCRC'];
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
            $model->propertyList = propertyList::fromMap($map['PropertyList']);
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
