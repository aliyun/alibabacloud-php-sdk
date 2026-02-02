<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkMQTTParameters\mqtt5UserProperty;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkMQTTParameters\payload;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkMQTTParameters\subTopic;

class SinkMQTTParameters extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mqtt5UserProperty
     */
    public $mqtt5UserProperty;

    /**
     * @var string
     */
    public $parentTopic;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var subTopic
     */
    public $subTopic;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mqtt5UserProperty' => 'Mqtt5UserProperty',
        'parentTopic' => 'ParentTopic',
        'payload' => 'Payload',
        'subTopic' => 'SubTopic',
    ];

    public function validate()
    {
        if (null !== $this->mqtt5UserProperty) {
            $this->mqtt5UserProperty->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        if (null !== $this->subTopic) {
            $this->subTopic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mqtt5UserProperty) {
            $res['Mqtt5UserProperty'] = null !== $this->mqtt5UserProperty ? $this->mqtt5UserProperty->toArray($noStream) : $this->mqtt5UserProperty;
        }

        if (null !== $this->parentTopic) {
            $res['ParentTopic'] = $this->parentTopic;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->subTopic) {
            $res['SubTopic'] = null !== $this->subTopic ? $this->subTopic->toArray($noStream) : $this->subTopic;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mqtt5UserProperty'])) {
            $model->mqtt5UserProperty = mqtt5UserProperty::fromMap($map['Mqtt5UserProperty']);
        }

        if (isset($map['ParentTopic'])) {
            $model->parentTopic = $map['ParentTopic'];
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        if (isset($map['SubTopic'])) {
            $model->subTopic = subTopic::fromMap($map['SubTopic']);
        }

        return $model;
    }
}
