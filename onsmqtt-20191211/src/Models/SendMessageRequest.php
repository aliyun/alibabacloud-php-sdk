<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211\Models;

use AlibabaCloud\Tea\Model;

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

    /**
     * @var string
     */
    public $receiptId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mqttTopic'  => 'MqttTopic',
        'payload'    => 'Payload',
        'receiptId'  => 'ReceiptId',
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
        if (null !== $this->receiptId) {
            $res['ReceiptId'] = $this->receiptId;
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
        if (isset($map['ReceiptId'])) {
            $model->receiptId = $map['ReceiptId'];
        }

        return $model;
    }
}
