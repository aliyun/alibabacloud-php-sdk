<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\acks;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\headers;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\key;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkKafkaParameters\value;

class sinkKafkaParameters extends Model
{
    /**
     * @var acks
     */
    public $acks;

    /**
     * @var string
     */
    public $compressionType;

    /**
     * @var headers
     */
    public $headers;

    /**
     * @var instanceId
     */
    public $instanceId;

    /**
     * @var key
     */
    public $key;

    /**
     * @var topic
     */
    public $topic;

    /**
     * @var value
     */
    public $value;
    protected $_name = [
        'acks' => 'Acks',
        'compressionType' => 'CompressionType',
        'headers' => 'Headers',
        'instanceId' => 'InstanceId',
        'key' => 'Key',
        'topic' => 'Topic',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->acks) {
            $this->acks->validate();
        }
        if (null !== $this->headers) {
            $this->headers->validate();
        }
        if (null !== $this->instanceId) {
            $this->instanceId->validate();
        }
        if (null !== $this->key) {
            $this->key->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        if (null !== $this->value) {
            $this->value->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acks) {
            $res['Acks'] = null !== $this->acks ? $this->acks->toArray($noStream) : $this->acks;
        }

        if (null !== $this->compressionType) {
            $res['CompressionType'] = $this->compressionType;
        }

        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toArray($noStream) : $this->headers;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toArray($noStream) : $this->instanceId;
        }

        if (null !== $this->key) {
            $res['Key'] = null !== $this->key ? $this->key->toArray($noStream) : $this->key;
        }

        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
        }

        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
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
        if (isset($map['Acks'])) {
            $model->acks = acks::fromMap($map['Acks']);
        }

        if (isset($map['CompressionType'])) {
            $model->compressionType = $map['CompressionType'];
        }

        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
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
