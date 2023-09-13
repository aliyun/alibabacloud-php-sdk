<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @description The ID of the consumer group in the Message Queue for Apache RocketMQ instance.
     *
     * @example GID_group1
     *
     * @var string
     */
    public $groupID;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example i-f8zbher64dlm58plyfte
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The consumer offset of messages. Valid values: CONSUME_FROM_LAST_OFFSET: Start consumption from the latest offset. CONSUME_FROM_FIRST_OFFSET: Start consumption from the earliest offset. CONSUME_FROM_TIMESTAMP: Start consumption from the offset at the specified point in time.
     *
     * @example CONSUMEFROMLASTOFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @description The region ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags that are used to filter messages.
     *
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp of the offset from which consumption starts. This parameter is valid only if you set the Offset parameter to CONSUME_FROM_TIMESTAMP.
     *
     * @example 1636597951964
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The topic to which the message belongs.
     *
     * @example topic_add_anima
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
