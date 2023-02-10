<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateTopicConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enableBroadcast;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $topicFullName;
    protected $_name = [
        'enableBroadcast' => 'EnableBroadcast',
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
        'topicFullName'   => 'TopicFullName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableBroadcast) {
            $res['EnableBroadcast'] = $this->enableBroadcast;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['EnableBroadcast'])) {
            $model->enableBroadcast = $map['EnableBroadcast'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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
