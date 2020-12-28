<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @var string
     */
    public $mqttTopic;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'mqttTopic'  => 'MqttTopic',
        'instanceId' => 'InstanceId',
        'payload'    => 'Payload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqttTopic) {
            $res['MqttTopic'] = $this->mqttTopic;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['MqttTopic'])) {
            $model->mqttTopic = $map['MqttTopic'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        return $model;
    }
}
