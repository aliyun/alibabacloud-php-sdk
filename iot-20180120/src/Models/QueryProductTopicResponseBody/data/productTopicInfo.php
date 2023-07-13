<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponseBody\data;

use AlibabaCloud\Tea\Model;

class productTopicInfo extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @description The description of the topic category.
     *
     * @example topicDesc
     *
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $enableProxySubscribe;

    /**
     * @description The ID of the topic category.
     *
     * @example 821****
     *
     * @var string
     */
    public $id;

    /**
     * @description The operation that devices can perform on the topic category. Valid values:
     *
     *   **0**: Publish.
     *   **1**: Subscribe.
     *   **2**: Publish and Subscribe.
     *
     * @example 1
     *
     * @var string
     */
    public $operation;

    /**
     * @description The ProductKey of the product.
     *
     * @example HMyB***
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The topic category that does not include the \_productKey\_ and \_deviceName\_ levels.
     *
     * @example /HMyB***\/${deviceName}/user/get
     *
     * @var string
     */
    public $topicShortName;
    protected $_name = [
        'codec'                => 'Codec',
        'desc'                 => 'Desc',
        'enableProxySubscribe' => 'EnableProxySubscribe',
        'id'                   => 'Id',
        'operation'            => 'Operation',
        'productKey'           => 'ProductKey',
        'topicShortName'       => 'TopicShortName',
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
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->enableProxySubscribe) {
            $res['EnableProxySubscribe'] = $this->enableProxySubscribe;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return productTopicInfo
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
