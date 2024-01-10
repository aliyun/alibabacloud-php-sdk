<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchPubRequest\userProp;
use AlibabaCloud\Tea\Model;

class BatchPubRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $correlationData;

    /**
     * @example newdevice1
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The body of the message to be published. The maximum size of a message is 256 KB.
     *
     * To generate a message body, you must convert the raw message into binary data and perform Base64 encoding.
     * @example eyJ0ZXN0IjoidGFzayBiYXRjaHB1YiBicm9hZGNhc3QifQ==
     *
     * @var string
     */
    public $messageContent;

    /**
     * @var int
     */
    public $messageExpiryInterval;

    /**
     * @var int
     */
    public $payloadFormatIndicator;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The quality of service (QoS) level of the message. Valid values:
     *
     *   **0**: The message is published at most once.
     *   **1**: The message is published at least once.
     *
     * Default value: **0**.
     *
     * >  IoT Platform stores QoS 1 messages for up to 7 days. IoT Platform does not store QoS 0 messages.
     * @example 0
     *
     * @var int
     */
    public $qos;

    /**
     * @var string
     */
    public $responseTopicTemplateName;

    /**
     * @var bool
     */
    public $retained;

    /**
     * @description The suffix of the custom topic.
     *
     * You can use the following methods to view custom topics:
     *
     *   On the **Topic Categories** tab of the Product Details page, view the custom topics of the product.
     *   On the **Topic List** tab of the Device Details page, view the custom topics to which the device has subscribed.
     *   Call the [QueryProductTopic](~~69647~~) operation to query the custom topics of the product.
     *
     * @example get
     *
     * @var string
     */
    public $topicShortName;

    /**
     * @var string
     */
    public $topicTemplateName;

    /**
     * @var userProp[]
     */
    public $userProp;
    protected $_name = [
        'contentType'               => 'ContentType',
        'correlationData'           => 'CorrelationData',
        'deviceName'                => 'DeviceName',
        'iotInstanceId'             => 'IotInstanceId',
        'messageContent'            => 'MessageContent',
        'messageExpiryInterval'     => 'MessageExpiryInterval',
        'payloadFormatIndicator'    => 'PayloadFormatIndicator',
        'productKey'                => 'ProductKey',
        'qos'                       => 'Qos',
        'responseTopicTemplateName' => 'ResponseTopicTemplateName',
        'retained'                  => 'Retained',
        'topicShortName'            => 'TopicShortName',
        'topicTemplateName'         => 'TopicTemplateName',
        'userProp'                  => 'UserProp',
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
        if (null !== $this->responseTopicTemplateName) {
            $res['ResponseTopicTemplateName'] = $this->responseTopicTemplateName;
        }
        if (null !== $this->retained) {
            $res['Retained'] = $this->retained;
        }
        if (null !== $this->topicShortName) {
            $res['TopicShortName'] = $this->topicShortName;
        }
        if (null !== $this->topicTemplateName) {
            $res['TopicTemplateName'] = $this->topicTemplateName;
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
     * @return BatchPubRequest
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
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
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
        if (isset($map['ResponseTopicTemplateName'])) {
            $model->responseTopicTemplateName = $map['ResponseTopicTemplateName'];
        }
        if (isset($map['Retained'])) {
            $model->retained = $map['Retained'];
        }
        if (isset($map['TopicShortName'])) {
            $model->topicShortName = $map['TopicShortName'];
        }
        if (isset($map['TopicTemplateName'])) {
            $model->topicTemplateName = $map['TopicTemplateName'];
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
