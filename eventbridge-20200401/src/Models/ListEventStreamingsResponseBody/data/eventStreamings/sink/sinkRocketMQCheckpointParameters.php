<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRocketMQCheckpointParameters\consumeTimestamp;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRocketMQCheckpointParameters\group;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRocketMQCheckpointParameters\topic;
use AlibabaCloud\Tea\Model;

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
     * @example MQ_INST_1825725063814405_BZ******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Cloud_5
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var topic
     */
    public $topic;
    protected $_name = [
        'consumeTimestamp' => 'ConsumeTimestamp',
        'group' => 'Group',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'topic' => 'Topic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['ConsumeTimestamp'] = null !== $this->consumeTimestamp ? $this->consumeTimestamp->toMap() : null;
        }
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkRocketMQCheckpointParameters
     */
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
