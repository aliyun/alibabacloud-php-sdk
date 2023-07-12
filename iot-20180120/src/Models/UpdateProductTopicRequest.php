<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductTopicRequest extends Model
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
    public $topicId;

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
        'topicId'              => 'TopicId',
        'topicShortName'       => 'TopicShortName',
    ];

    public function validate()
    {
        Model::validateRequired('operation', $this->operation, true);
        Model::validateRequired('topicId', $this->topicId, true);
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
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicShortName) {
            $res['TopicShortName'] = $this->topicShortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductTopicRequest
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
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicShortName'])) {
            $model->topicShortName = $map['TopicShortName'];
        }

        return $model;
    }
}
