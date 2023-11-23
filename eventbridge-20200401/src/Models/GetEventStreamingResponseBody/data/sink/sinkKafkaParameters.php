<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters\acks;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters\key;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters\value;
use AlibabaCloud\Tea\Model;

class sinkKafkaParameters extends Model
{
    /**
     * @description The acknowledgment information.
     *
     * @var acks
     */
    public $acks;

    /**
     * @description The target service type is Message Queue for Apache Kafka.
     *
     * @var instanceId
     */
    public $instanceId;

    /**
     * @description The message key.
     *
     * @var key
     */
    public $key;

    /**
     * @description The topic name.
     *
     * @var topic
     */
    public $topic;

    /**
     * @description The message content.
     *
     * @var value
     */
    public $value;
    protected $_name = [
        'acks'       => 'Acks',
        'instanceId' => 'InstanceId',
        'key'        => 'Key',
        'topic'      => 'Topic',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acks) {
            $res['Acks'] = null !== $this->acks ? $this->acks->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toMap() : null;
        }
        if (null !== $this->key) {
            $res['Key'] = null !== $this->key ? $this->key->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkKafkaParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acks'])) {
            $model->acks = acks::fromMap($map['Acks']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = instanceId::fromMap($map['InstanceId']);
        }
        if (isset($map['Key'])) {
            $model->key = key::fromMap($map['Key']);
        }
        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
        }
        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}
