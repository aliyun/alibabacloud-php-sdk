<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @description The ID of the ApsaraMQ for MQTT instance. The ID must be consistent with the ID of the instance that the ApsaraMQ for MQTT client uses. You can view the instance ID in the **Basic Information** section on the **Instance Details** page that corresponds to the instance in the [ApsaraMQ for MQTT console](https://mqtt.console.aliyun.com).
     *
     * @example post-cn-0pp12gl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The topic to which you want to send a message on the ApsaraMQ for MQTT instance.
     *
     * @example TopicA
     *
     * @var string
     */
    public $mqttTopic;

    /**
     * @description The message content, which is the payload of the message. We recommend that you encode the content in Base64 to prevent non-printable characters from being transmitted.
     *
     * @example test
     *
     * @var string
     */
    public $payload;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mqttTopic'  => 'MqttTopic',
        'payload'    => 'Payload',
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
        if (null !== $this->mqttTopic) {
            $res['MqttTopic'] = $this->mqttTopic;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MqttTopic'])) {
            $model->mqttTopic = $map['MqttTopic'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        return $model;
    }
}
