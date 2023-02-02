<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsConsumerResetOffsetRequest extends Model
{
    /**
     * @description The ID of the consumer group for which you want to reset the consumer offset.
     *
     * @example GID_test_consumer_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the consumer group belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The timestamp to which you want to reset the consumer offset. This parameter takes effect only when the **Type** parameter is set to **1**. Unit: milliseconds.
     *
     * @example 1591153871000
     *
     * @var int
     */
    public $resetTimestamp;

    /**
     * @description The name of the topic for which you want to reset the consumer offset.
     *
     * @example test-mq-topic
     *
     * @var string
     */
    public $topic;

    /**
     * @description The method that you want to use to clear accumulated messages. Valid values:
     *
     *   **0:** All accumulated messages are cleared. Messages that are not consumed are ignored. Consumers in the specified consumer group consume only messages that are published to the topic after the current point in time.
     *
     * If "reconsumeLater" is returned, the accumulated messages are not cleared because the system is retrying to send the messages to consumers.
     *
     *   **1:** The messages that were published to the topic before a specified point in time are cleared. You must specify a point in time. Consumers in the specified consumer group consume only the messages that are published to the topic after the specified point in time.
     *
     * You can specify a point in time within the time range that is from the earliest point in time when a message was published to the topic to the most recent point in time when a message was published to the topic. Points in time that are not within the allowed time range are invalid.
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'groupId'        => 'GroupId',
        'instanceId'     => 'InstanceId',
        'resetTimestamp' => 'ResetTimestamp',
        'topic'          => 'Topic',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resetTimestamp) {
            $res['ResetTimestamp'] = $this->resetTimestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsConsumerResetOffsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResetTimestamp'])) {
            $model->resetTimestamp = $map['ResetTimestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
