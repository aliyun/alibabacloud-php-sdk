<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductTopicRequest extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $desc;

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
    public $topicShortName;
    protected $_name = [
        'codec'                => 'Codec',
        'desc'                 => 'Desc',
        'enableProxySubscribe' => 'EnableProxySubscribe',
        'iotInstanceId'        => 'IotInstanceId',
        'operation'            => 'Operation',
        'productKey'           => 'ProductKey',
        'topicShortName'       => 'TopicShortName',
    ];

    public function validate()
    {
        Model::validateRequired('operation', $this->operation, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('topicShortName', $this->topicShortName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (null !== $this->topicShortName) {
            $res['TopicShortName'] = $this->topicShortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
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
        if (isset($map['TopicShortName'])) {
            $model->topicShortName = $map['TopicShortName'];
        }

        return $model;
    }
}
