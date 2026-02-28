<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody\message\mqttProperties;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryMessageInfoResponseBody\message\userProperties;

class message extends Model
{
    /**
     * @var int
     */
    public $generateTime;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var mqttProperties[]
     */
    public $mqttProperties;

    /**
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
     * @var string
     */
    public $uniMsgId;

    /**
     * @var userProperties[]
     */
    public $userProperties;
    protected $_name = [
        'generateTime' => 'GenerateTime',
        'messageContent' => 'MessageContent',
        'mqttProperties' => 'MqttProperties',
        'topicFullName' => 'TopicFullName',
        'transformedMessageContent' => 'TransformedMessageContent',
        'transformedTopicFullName' => 'TransformedTopicFullName',
        'uniMsgId' => 'UniMsgId',
        'userProperties' => 'UserProperties',
    ];

    public function validate()
    {
        if (\is_array($this->mqttProperties)) {
            Model::validateArray($this->mqttProperties);
        }
        if (\is_array($this->userProperties)) {
            Model::validateArray($this->userProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateTime) {
            $res['GenerateTime'] = $this->generateTime;
        }

        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }

        if (null !== $this->mqttProperties) {
            if (\is_array($this->mqttProperties)) {
                $res['MqttProperties'] = [];
                $n1 = 0;
                foreach ($this->mqttProperties as $item1) {
                    $res['MqttProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->userProperties)) {
                $res['UserProperties'] = [];
                $n1 = 0;
                foreach ($this->userProperties as $item1) {
                    $res['UserProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['GenerateTime'])) {
            $model->generateTime = $map['GenerateTime'];
        }

        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }

        if (isset($map['MqttProperties'])) {
            if (!empty($map['MqttProperties'])) {
                $model->mqttProperties = [];
                $n1 = 0;
                foreach ($map['MqttProperties'] as $item1) {
                    $model->mqttProperties[$n1] = mqttProperties::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['UserProperties'] as $item1) {
                    $model->userProperties[$n1] = userProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
