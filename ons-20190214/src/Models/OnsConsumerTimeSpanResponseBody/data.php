<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerTimeSpanResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The most recent point in time when a message in the topic was consumed by the customer group.
     *
     * @example 1570761026400
     *
     * @var int
     */
    public $consumeTimeStamp;

    /**
     * @description The ID of the instance to which the consumer group belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The point in time when the earliest stored message was published to the topic.
     *
     * @example 1570761026804
     *
     * @var int
     */
    public $maxTimeStamp;

    /**
     * @description The point in time when the most recently stored message was published to the topic.
     *
     * @example 1570701231122
     *
     * @var int
     */
    public $minTimeStamp;

    /**
     * @description The name of the topic that you want to query.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumeTimeStamp' => 'ConsumeTimeStamp',
        'instanceId'       => 'InstanceId',
        'maxTimeStamp'     => 'MaxTimeStamp',
        'minTimeStamp'     => 'MinTimeStamp',
        'topic'            => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTimeStamp) {
            $res['ConsumeTimeStamp'] = $this->consumeTimeStamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxTimeStamp) {
            $res['MaxTimeStamp'] = $this->maxTimeStamp;
        }
        if (null !== $this->minTimeStamp) {
            $res['MinTimeStamp'] = $this->minTimeStamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeTimeStamp'])) {
            $model->consumeTimeStamp = $map['ConsumeTimeStamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxTimeStamp'])) {
            $model->maxTimeStamp = $map['MaxTimeStamp'];
        }
        if (isset($map['MinTimeStamp'])) {
            $model->minTimeStamp = $map['MinTimeStamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
