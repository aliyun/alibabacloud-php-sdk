<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest\userProp;
use AlibabaCloud\Tea\Model;

class PubRequest extends Model
{
    /**
     * @description The content type of the message when you use MQTT 5.0 for communication.
     *
     * The content type is usually MIME, such as text or plain********.
     * @example text
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The related data in the request/response communication mode when you use MQTT 5.0. You can specify this parameter as needed.
     *
     * >  You must convert the related data into binary data and perform Base64 encoding to generate a value of the string type.
     * @example aGVsbG8****
     *
     * @var string
     */
    public $correlationData;

    /**
     * @description The name of the MQTT cloud gateway.
     *
     * >When you publish a message to an MQTT cloud gateway, you must specify this parameter.
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the instance. You can obtain the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or the instance ID is not displayed in the IoT Platform console, ignore this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The body of the message that you want to publish.
     *
     * To generate a message body, you must convert the raw message into binary data and perform Base64 encoding.
     * @example eyJ0ZXN0IjoidGFzayBwdWIgYnJvYWRjYXN0In0=
     *
     * @var string
     */
    public $messageContent;

    /**
     * @var int
     */
    public $messageExpiryInterval;

    /**
     * @description The payload identifier of the message when you use MQTT 5.0 for communication. Valid values:
     *
     *   **0**: The message is unknown byte data.
     *   **1**: The payload of the message is UTF-8 encoded character data.
     *
     * @example 1
     *
     * @var int
     */
    public $payloadFormatIndicator;

    /**
     * @description The **ProductKey** of the product to which the device that receives the message belongs.
     *
     * @example a1Q5XoY****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The quality of service (QoS) level of the message. Valid values:
     *
     *   **0**: The message is published at most once.
     *   **1**: The message is published at least once. If a PUBACK response is not returned after you publish a QoS 1 message, the message is pushed to the device again when the device reconnects to IoT Platform.
     *
     * Default value: **0**.
     *
     * For more information about message communication, see [Limits](~~30527~~).
     * @example 0
     *
     * @var int
     */
    public $qos;

    /**
     * @description The response topic in the request/response communication mode when you use MQTT 5.0. For more information, see [MQTT 5.0](~~30540~~).
     *
     * @example /a1Q5XoY****\/device1/user/update
     *
     * @var string
     */
    public $responseTopic;

    /**
     * @var bool
     */
    public $retained;

    /**
     * @var int
     */
    public $topicAlias;

    /**
     * @description The custom topic for the device that receives the message.
     *
     *   Topic format: `/${productKey}/${deviceName}/user/${TopicShortName}`.
     *   You must specify the **Subscribe** permission, or **Publish and Subscribe** permissions for the topic.
     *
     * > Make sure that the device subscribes to the topic before you call the Pub operation. Otherwise, the device cannot receive the message.
     *
     * You can view the custom topics of a product on the **Topic Categories** tab of the **Product Details** page, or by calling the [QueryProductTopic](~~69647~~) operation. You can view the topics to which the device subscribes on the **Topic List** tab of the **Device Details** page.
     * @example /a1Q5XoY****\/device1/user/get
     *
     * @var string
     */
    public $topicFullName;

    /**
     * @var userProp[]
     */
    public $userProp;
    protected $_name = [
        'contentType'            => 'ContentType',
        'correlationData'        => 'CorrelationData',
        'deviceName'             => 'DeviceName',
        'iotInstanceId'          => 'IotInstanceId',
        'messageContent'         => 'MessageContent',
        'messageExpiryInterval'  => 'MessageExpiryInterval',
        'payloadFormatIndicator' => 'PayloadFormatIndicator',
        'productKey'             => 'ProductKey',
        'qos'                    => 'Qos',
        'responseTopic'          => 'ResponseTopic',
        'retained'               => 'Retained',
        'topicAlias'             => 'TopicAlias',
        'topicFullName'          => 'TopicFullName',
        'userProp'               => 'UserProp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->correlationData) {
            $res['CorrelationData'] = $this->correlationData;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->messageExpiryInterval) {
            $res['MessageExpiryInterval'] = $this->messageExpiryInterval;
        }
        if (null !== $this->payloadFormatIndicator) {
            $res['PayloadFormatIndicator'] = $this->payloadFormatIndicator;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->responseTopic) {
            $res['ResponseTopic'] = $this->responseTopic;
        }
        if (null !== $this->retained) {
            $res['Retained'] = $this->retained;
        }
        if (null !== $this->topicAlias) {
            $res['TopicAlias'] = $this->topicAlias;
        }
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }
        if (null !== $this->userProp) {
            $res['UserProp'] = [];
            if (null !== $this->userProp && \is_array($this->userProp)) {
                $n = 0;
                foreach ($this->userProp as $item) {
                    $res['UserProp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CorrelationData'])) {
            $model->correlationData = $map['CorrelationData'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['MessageExpiryInterval'])) {
            $model->messageExpiryInterval = $map['MessageExpiryInterval'];
        }
        if (isset($map['PayloadFormatIndicator'])) {
            $model->payloadFormatIndicator = $map['PayloadFormatIndicator'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['ResponseTopic'])) {
            $model->responseTopic = $map['ResponseTopic'];
        }
        if (isset($map['Retained'])) {
            $model->retained = $map['Retained'];
        }
        if (isset($map['TopicAlias'])) {
            $model->topicAlias = $map['TopicAlias'];
        }
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }
        if (isset($map['UserProp'])) {
            if (!empty($map['UserProp'])) {
                $model->userProp = [];
                $n               = 0;
                foreach ($map['UserProp'] as $item) {
                    $model->userProp[$n++] = null !== $item ? userProp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
