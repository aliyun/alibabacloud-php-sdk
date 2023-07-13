<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateTopicConfigRequest extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the retained message broadcasting feature for a custom topic.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableBroadcast;

    /**
     * @var bool
     */
    public $enableProxySubscribe;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $operation;

    /**
     * @description The **ProductKey** of the product to which the device belongs. The device receives the retained message.
     *
     * @example a1Q5XoY****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The custom topic for which you want to enable the retained message broadcasting feature.
     *
     *   If you use an MQTT gateway device, set this parameter to the original custom topic of the device. For more information, see [Topics](~~433806~~).
     *   If you use a non-MQTT gateway device, set this parameter to a custom topic in the following format: `/broadcast/${productKey}/${Custom field}`. `${productKey}` is the value of the **ProductKey** request parameter. You can specify `${Custom field}` based on your business requirements.
     *
     * >  When you develop devices, use code to define a broadcast topic. You do not need to create a topic in the IoT Platform console. You must grant devices the Subscribe permission or the Publish and Subscribe permission on the topic.
     * @example /broadcast/a1Q5XoY****\/test
     *
     * @var string
     */
    public $topicFullName;
    protected $_name = [
        'codec'                => 'Codec',
        'description'          => 'Description',
        'enableBroadcast'      => 'EnableBroadcast',
        'enableProxySubscribe' => 'EnableProxySubscribe',
        'iotInstanceId'        => 'IotInstanceId',
        'operation'            => 'Operation',
        'productKey'           => 'ProductKey',
        'topicFullName'        => 'TopicFullName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableBroadcast) {
            $res['EnableBroadcast'] = $this->enableBroadcast;
        }
        if (null !== $this->enableProxySubscribe) {
            $res['EnableProxySubscribe'] = $this->enableProxySubscribe;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTopicConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableBroadcast'])) {
            $model->enableBroadcast = $map['EnableBroadcast'];
        }
        if (isset($map['EnableProxySubscribe'])) {
            $model->enableProxySubscribe = $map['EnableProxySubscribe'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }

        return $model;
    }
}
