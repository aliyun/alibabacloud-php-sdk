<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class SendMessageRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mqttTopic;

    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mqttTopic' => 'MqttTopic',
        'payload' => 'Payload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
