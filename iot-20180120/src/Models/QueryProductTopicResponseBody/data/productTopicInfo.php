<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponseBody\data;

use AlibabaCloud\Tea\Model;

class productTopicInfo extends Model
{
    /**
     * @example topicDesc
     *
     * @var string
     */
    public $desc;

    /**
     * @example 821****
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var string
     */
    public $operation;

    /**
     * @example HMyB***
     *
     * @var string
     */
    public $productKey;

    /**
     * @example /HMyB***\/${deviceName}/user/get
     *
     * @var string
     */
    public $topicShortName;
    protected $_name = [
        'desc'           => 'Desc',
        'id'             => 'Id',
        'operation'      => 'Operation',
        'productKey'     => 'ProductKey',
        'topicShortName' => 'TopicShortName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
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
