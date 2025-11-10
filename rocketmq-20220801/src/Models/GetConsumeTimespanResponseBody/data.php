<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumeTimespanResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $consumeTimestamp;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxTimestamp;

    /**
     * @var int
     */
    public $minTimestamp;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consumeTimestamp' => 'consumeTimestamp',
        'consumerGroupId' => 'consumerGroupId',
        'instanceId' => 'instanceId',
        'maxTimestamp' => 'maxTimestamp',
        'minTimestamp' => 'minTimestamp',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['consumeTimestamp'] = $this->consumeTimestamp;
        }

        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->maxTimestamp) {
            $res['maxTimestamp'] = $this->maxTimestamp;
        }

        if (null !== $this->minTimestamp) {
            $res['minTimestamp'] = $this->minTimestamp;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['consumeTimestamp'])) {
            $model->consumeTimestamp = $map['consumeTimestamp'];
        }

        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['maxTimestamp'])) {
            $model->maxTimestamp = $map['maxTimestamp'];
        }

        if (isset($map['minTimestamp'])) {
            $model->minTimestamp = $map['minTimestamp'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
