<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo\msgFoundList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo\msgFoundList\onsRestMessageDo\propertyList;

class onsRestMessageDo extends Model
{
    /**
     * @var int
     */
    public $bodyCRC;

    /**
     * @var string
     */
    public $bornHost;

    /**
     * @var int
     */
    public $bornTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var propertyList
     */
    public $propertyList;

    /**
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @var string
     */
    public $storeHost;

    /**
     * @var int
     */
    public $storeSize;

    /**
     * @var int
     */
    public $storeTimestamp;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'bodyCRC' => 'BodyCRC',
        'bornHost' => 'BornHost',
        'bornTimestamp' => 'BornTimestamp',
        'instanceId' => 'InstanceId',
        'msgId' => 'MsgId',
        'propertyList' => 'PropertyList',
        'reconsumeTimes' => 'ReconsumeTimes',
        'storeHost' => 'StoreHost',
        'storeSize' => 'StoreSize',
        'storeTimestamp' => 'StoreTimestamp',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->propertyList) {
            $this->propertyList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PropertyList'] = null !== $this->propertyList ? $this->propertyList->toArray($noStream) : $this->propertyList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
