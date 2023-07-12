<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicConfigRequest extends Model
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
     * @var bool
     */
    public $enableBroadcast;

    /**
     * @var bool
     */
    public $enableProxySubscribe;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $productKey;

    /**
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
        Model::validateRequired('operation', $this->operation, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('topicFullName', $this->topicFullName, true);
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
     * @return CreateTopicConfigRequest
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
