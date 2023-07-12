<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponse\data;

use AlibabaCloud\Tea\Model;

class productTopicInfo extends Model
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
    public $id;

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
        'id'                   => 'Id',
        'operation'            => 'Operation',
        'productKey'           => 'ProductKey',
        'topicShortName'       => 'TopicShortName',
    ];

    public function validate()
    {
        Model::validateRequired('codec', $this->codec, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('enableProxySubscribe', $this->enableProxySubscribe, true);
        Model::validateRequired('id', $this->id, true);
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
