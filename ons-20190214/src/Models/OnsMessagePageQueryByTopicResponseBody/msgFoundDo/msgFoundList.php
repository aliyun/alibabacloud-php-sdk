<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo\msgFoundList\propertyList;
use AlibabaCloud\Tea\Model;

class msgFoundList extends Model
{
    /**
     * @var int
     */
    public $storeSize;

    /**
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @var int
     */
    public $storeTimestamp;

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
    public $storeHost;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var propertyList[]
     */
    public $propertyList;

    /**
     * @var int
     */
    public $bornTimestamp;

    /**
     * @var int
     */
    public $bodyCRC;

    /**
     * @var string
     */
    public $bornHost;
    protected $_name = [
        'storeSize'      => 'StoreSize',
        'reconsumeTimes' => 'ReconsumeTimes',
        'storeTimestamp' => 'StoreTimestamp',
        'instanceId'     => 'InstanceId',
        'msgId'          => 'MsgId',
        'storeHost'      => 'StoreHost',
        'topic'          => 'Topic',
        'propertyList'   => 'PropertyList',
        'bornTimestamp'  => 'BornTimestamp',
        'bodyCRC'        => 'BodyCRC',
        'bornHost'       => 'BornHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeSize) {
            $res['StoreSize'] = $this->storeSize;
        }
        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }
        if (null !== $this->storeTimestamp) {
            $res['StoreTimestamp'] = $this->storeTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->storeHost) {
            $res['StoreHost'] = $this->storeHost;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (null !== $this->bornTimestamp) {
            $res['BornTimestamp'] = $this->bornTimestamp;
        }
        if (null !== $this->bodyCRC) {
            $res['BodyCRC'] = $this->bodyCRC;
        }
        if (null !== $this->bornHost) {
            $res['BornHost'] = $this->bornHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgFoundList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreSize'])) {
            $model->storeSize = $map['StoreSize'];
        }
        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }
        if (isset($map['StoreTimestamp'])) {
            $model->storeTimestamp = $map['StoreTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['StoreHost'])) {
            $model->storeHost = $map['StoreHost'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
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
        if (isset($map['BornTimestamp'])) {
            $model->bornTimestamp = $map['BornTimestamp'];
        }
        if (isset($map['BodyCRC'])) {
            $model->bodyCRC = $map['BodyCRC'];
        }
        if (isset($map['BornHost'])) {
            $model->bornHost = $map['BornHost'];
        }

        return $model;
    }
}
