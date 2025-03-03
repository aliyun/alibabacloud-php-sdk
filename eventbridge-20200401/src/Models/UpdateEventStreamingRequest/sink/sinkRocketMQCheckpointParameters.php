<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQCheckpointParameters\consumeTimestamp;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQCheckpointParameters\group;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQCheckpointParameters\topic;

class sinkRocketMQCheckpointParameters extends Model
{
    /**
     * @var consumeTimestamp
     */
    public $consumeTimestamp;
    /**
     * @var group
     */
    public $group;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var topic
     */
    public $topic;
    protected $_name = [
        'consumeTimestamp' => 'ConsumeTimestamp',
        'group'            => 'Group',
        'instanceId'       => 'InstanceId',
        'instanceType'     => 'InstanceType',
        'topic'            => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->consumeTimestamp) {
            $this->consumeTimestamp->validate();
        }
        if (null !== $this->group) {
            $this->group->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['ConsumeTimestamp'] = null !== $this->consumeTimestamp ? $this->consumeTimestamp->toArray($noStream) : $this->consumeTimestamp;
        }

        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toArray($noStream) : $this->group;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
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
        if (isset($map['ConsumeTimestamp'])) {
            $model->consumeTimestamp = consumeTimestamp::fromMap($map['ConsumeTimestamp']);
        }

        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
        }

        return $model;
    }
}
