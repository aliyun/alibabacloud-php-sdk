<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $bodySize;

    /**
     * @var string
     */
    public $bornHost;

    /**
     * @var string
     */
    public $bornTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $liteTopicName;

    /**
     * @var string
     */
    public $messageGroup;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string[]
     */
    public $messageKeys;

    /**
     * @var string
     */
    public $messageTag;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storeHost;

    /**
     * @var string
     */
    public $storeTime;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string[]
     */
    public $userProperties;
    protected $_name = [
        'body' => 'body',
        'bodySize' => 'bodySize',
        'bornHost' => 'bornHost',
        'bornTime' => 'bornTime',
        'instanceId' => 'instanceId',
        'liteTopicName' => 'liteTopicName',
        'messageGroup' => 'messageGroup',
        'messageId' => 'messageId',
        'messageKeys' => 'messageKeys',
        'messageTag' => 'messageTag',
        'messageType' => 'messageType',
        'regionId' => 'regionId',
        'storeHost' => 'storeHost',
        'storeTime' => 'storeTime',
        'topicName' => 'topicName',
        'userProperties' => 'userProperties',
    ];

    public function validate()
    {
        if (\is_array($this->messageKeys)) {
            Model::validateArray($this->messageKeys);
        }
        if (\is_array($this->userProperties)) {
            Model::validateArray($this->userProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->bodySize) {
            $res['bodySize'] = $this->bodySize;
        }

        if (null !== $this->bornHost) {
            $res['bornHost'] = $this->bornHost;
        }

        if (null !== $this->bornTime) {
            $res['bornTime'] = $this->bornTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->liteTopicName) {
            $res['liteTopicName'] = $this->liteTopicName;
        }

        if (null !== $this->messageGroup) {
            $res['messageGroup'] = $this->messageGroup;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->messageKeys) {
            if (\is_array($this->messageKeys)) {
                $res['messageKeys'] = [];
                $n1 = 0;
                foreach ($this->messageKeys as $item1) {
                    $res['messageKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->storeHost) {
            $res['storeHost'] = $this->storeHost;
        }

        if (null !== $this->storeTime) {
            $res['storeTime'] = $this->storeTime;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        if (null !== $this->userProperties) {
            if (\is_array($this->userProperties)) {
                $res['userProperties'] = [];
                foreach ($this->userProperties as $key1 => $value1) {
                    $res['userProperties'][$key1] = $value1;
                }
            }
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['bodySize'])) {
            $model->bodySize = $map['bodySize'];
        }

        if (isset($map['bornHost'])) {
            $model->bornHost = $map['bornHost'];
        }

        if (isset($map['bornTime'])) {
            $model->bornTime = $map['bornTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['liteTopicName'])) {
            $model->liteTopicName = $map['liteTopicName'];
        }

        if (isset($map['messageGroup'])) {
            $model->messageGroup = $map['messageGroup'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['messageKeys'])) {
            if (!empty($map['messageKeys'])) {
                $model->messageKeys = [];
                $n1 = 0;
                foreach ($map['messageKeys'] as $item1) {
                    $model->messageKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['storeHost'])) {
            $model->storeHost = $map['storeHost'];
        }

        if (isset($map['storeTime'])) {
            $model->storeTime = $map['storeTime'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        if (isset($map['userProperties'])) {
            if (!empty($map['userProperties'])) {
                $model->userProperties = [];
                foreach ($map['userProperties'] as $key1 => $value1) {
                    $model->userProperties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
