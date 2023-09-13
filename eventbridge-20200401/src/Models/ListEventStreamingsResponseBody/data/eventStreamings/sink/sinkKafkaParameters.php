<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters\acks;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters\key;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters\value;
use AlibabaCloud\Tea\Model;

class sinkKafkaParameters extends Model
{
    /**
     * @var acks
     */
    public $acks;

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
