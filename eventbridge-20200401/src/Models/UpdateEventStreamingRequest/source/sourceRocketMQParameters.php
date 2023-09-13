<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @description The ID of the consumer group in the Message Queue for Apache RocketMQ instance.
     *
     * @example GID_test
     *
     * @var string
     */
    public $groupID;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example i-f8z9a9mcgwri1c1idd0e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The consumer offset of the message. Valid values: CONSUME_FROM_LAST_OFFSET: consumes messages from the latest offset. CONSUME_FROM_FIRST_OFFSET: consumes messages from the earliest offset. CONSUME_FROM_TIMESTAMP: consumes messages from the offset at the specified point in time. Default value: CONSUME_FROM_LAST_OFFSET.
     *
     * @example CONSUMEFROMLASTOFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @description The ID of the region where the Message Queue for Apache RocketMQ instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags that are used to filter messages.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that indicates the time from which messages are consumed. This parameter is valid only if you set Offset to CONSUME_FROM_TIMESTAMP.
     *
     * @example 1670656652009
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The name of the topic in the Message Queue for Apache RocketMQ instance.
     *
     * @example TOPIC-cainiao-pcs-order-process-inBoundConditionCheck
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'groupID'    => 'GroupID',
        'instanceId' => 'InstanceId',
        'offset'     => 'Offset',
        'regionId'   => 'RegionId',
        'tag'        => 'Tag',
        'timestamp'  => 'Timestamp',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupID) {
            $res['GroupID'] = $this->groupID;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupID'])) {
            $model->groupID = $map['GroupID'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
