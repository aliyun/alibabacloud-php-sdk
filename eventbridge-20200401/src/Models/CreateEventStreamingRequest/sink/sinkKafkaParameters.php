<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters\acks;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters\key;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters\value;
use AlibabaCloud\Tea\Model;

class sinkKafkaParameters extends Model
{
    /**
     * @description The information about the acknowledgement (ACK) mode. If you set this parameter to 0, no response is returned from the broker. In this mode, the performance is high, but the risk of data loss is also high. If you set this parameter to 1, a response is returned when data is written to the leader. In this mode, the performance and the risk of data loss are moderate. Data loss may occur if a failure occurs on the leader. If you set this parameter to all, a response is returned when data is written to the leader and synchronized to the followers. In this mode, the performance is low, but the risk of data loss is also low. Data loss occurs if the leader and the followers fail at the same time.
     *
     * @var acks
     */
    public $acks;

    /**
     * @description The information about the Message Queue for Apache Kafka instance.
     *
     * @var instanceId
     */
    public $instanceId;

    /**
     * @description The information about the message key.
     *
     * @var key
     */
    public $key;

    /**
     * @description The information about the topic in the Message Queue for Apache Kafka instance.
     *
     * @var topic
     */
    public $topic;

    /**
     * @description The information about the message value.
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
