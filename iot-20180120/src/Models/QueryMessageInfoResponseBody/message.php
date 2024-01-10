<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody\message\mqttProperties;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody\message\userProperties;
use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @example 1624419431000
     *
     * @var int
     */
    public $generateTime;

    /**
     * @example eyJsYXN0VGltZSI6IjIwMjEtMDYtMjQgMTY6Mj**
     *
     * @var string
     */
    public $messageContent;

    /**
     * @var mqttProperties[]
     */
    public $mqttProperties;

    /**
     * @example /a1Q5XoY****\/device1/user/get
     *
     * @var string
     */
    public $topicFullName;

    /**
     * @var string
     */
    public $transformedMessageContent;

    /**
     * @var string
     */
    public $transformedTopicFullName;

    /**
     * @example 323455***
     *
     * @var string
     */
    public $uniMsgId;

    /**
     * @var userProperties[]
     */
    public $userProperties;
    protected $_name = [
        'generateTime'              => 'GenerateTime',
        'messageContent'            => 'MessageContent',
        'mqttProperties'            => 'MqttProperties',
        'topicFullName'             => 'TopicFullName',
        'transformedMessageContent' => 'TransformedMessageContent',
        'transformedTopicFullName'  => 'TransformedTopicFullName',
        'uniMsgId'                  => 'UniMsgId',
        'userProperties'            => 'UserProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateTime) {
            $res['GenerateTime'] = $this->generateTime;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->mqttProperties) {
            $res['MqttProperties'] = [];
            if (null !== $this->mqttProperties && \is_array($this->mqttProperties)) {
                $n = 0;
                foreach ($this->mqttProperties as $item) {
                    $res['MqttProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }
        if (null !== $this->transformedMessageContent) {
            $res['TransformedMessageContent'] = $this->transformedMessageContent;
        }
        if (null !== $this->transformedTopicFullName) {
            $res['TransformedTopicFullName'] = $this->transformedTopicFullName;
        }
        if (null !== $this->uniMsgId) {
            $res['UniMsgId'] = $this->uniMsgId;
        }
        if (null !== $this->userProperties) {
            $res['UserProperties'] = [];
            if (null !== $this->userProperties && \is_array($this->userProperties)) {
                $n = 0;
                foreach ($this->userProperties as $item) {
                    $res['UserProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateTime'])) {
            $model->generateTime = $map['GenerateTime'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['MqttProperties'])) {
            if (!empty($map['MqttProperties'])) {
                $model->mqttProperties = [];
                $n                     = 0;
                foreach ($map['MqttProperties'] as $item) {
                    $model->mqttProperties[$n++] = null !== $item ? mqttProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }
        if (isset($map['TransformedMessageContent'])) {
            $model->transformedMessageContent = $map['TransformedMessageContent'];
        }
        if (isset($map['TransformedTopicFullName'])) {
            $model->transformedTopicFullName = $map['TransformedTopicFullName'];
        }
        if (isset($map['UniMsgId'])) {
            $model->uniMsgId = $map['UniMsgId'];
        }
        if (isset($map['UserProperties'])) {
            if (!empty($map['UserProperties'])) {
                $model->userProperties = [];
                $n                     = 0;
                foreach ($map['UserProperties'] as $item) {
                    $model->userProperties[$n++] = null !== $item ? userProperties::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
