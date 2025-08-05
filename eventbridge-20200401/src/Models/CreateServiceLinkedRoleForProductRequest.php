<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleForProductRequest extends Model
{
    /**
     * @description The name of the cloud service or the name of the service-linked role with which the cloud service is associated. Valid values:
     *
     *   AliyunServiceRoleForEventBridgeSendToFC: allows EventBridge to deliver events to Function Compute.
     *   AliyunServiceRoleForEventBridgeSendToSMS: allows EventBridge to deliver events to Short Message Service (SMS).
     *   AliyunServiceRoleForEventBridgeSendToDirectMail: allows EventBridge to deliver events to Direct Mail.
     *   AliyunServiceRoleForEventBridgeSourceRocketMQ: allows EventBridge to integrate with ApsaraMQ for RocketMQ.
     *   AliyunServiceRoleForEventBridgeSourceMNS: allows EventBridge to integrate with Simple Message Queue (SMQ, formerly MNS).
     *   AliyunServiceRoleForEventBridgeConnectVPC: allows EventBridge to access virtual private clouds (VPCs).
     *   AliyunServiceRoleForEventBridgeSourceActionTrail: allows EventBridge to integrate with ActionTrail.
     *   AliyunServiceRoleForEventBridgeSourceRabbitMQ: allows EventBridge to integrate with ApsaraMQ for RabbitMQ.
     *   AliyunServiceRoleForEventBridgeSendToRabbitMQ: allows EventBridge to deliver events to ApsaraMQ for RabbitMQ.
     *   AliyunServiceRoleForEventBridgeSendToRocketMQ: allows EventBridge to deliver events to ApsaraMQ for RocketMQ.
     *   AliyunServiceRoleForEventBridgeSourceCMS: allow EventBridge to integrate with CloudMonitor.
     *   AliyunServiceRoleForEventBridgeSendToKafka: allows EventBridge to deliver events to ApsaraMQ for Kafka.
     *   AliyunServiceRoleForEventBridgeSourceKafka: allows EventBridge to integrate with ApsaraMQ for Kafka.
     *   AliyunServiceRoleForEventBridgeSendToRDS: allows EventBridge to deliver events to ApsaraDB RDS.
     *   AliyunServiceRoleForEventBridgeSendToSAE: allows EventBridge to deliver events to Serverless App Engine (SAE).
     *   AliyunServiceRoleForEventBridgeSourceMqtt: allows EventBridge to integrate with ApsaraMQ for MQTT.
     *   AliyunServiceRoleForEventBridgeSourceSLS: allows EventBridge to integrate with Simple Log Service.
     *
     * This parameter is required.
     *
     * @example AliyunServiceRoleForEventBridgeSendToMNS
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'productName' => 'ProductName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleForProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
