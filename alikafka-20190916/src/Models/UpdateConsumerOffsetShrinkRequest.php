<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateConsumerOffsetShrinkRequest extends Model
{
    /**
     * @description The name of the consumer group.
     *
     *   The name can contain letters, digits, hyphens (-), and underscores (_).
     *   The name must be **3 to 64** characters in length. If a name contains more than **64** characters, the name is automatically truncated.
     *   The name of a consumer group cannot be changed after the consumer group is created.
     *
     * This parameter is required.
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_post-cn-mp91inkw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description If you set resetType to offset, you can use this parameter to reset the consumer offset of each partition of a specific topic in the consumer group.
     *
     * @var string
     */
    public $offsetsShrink;

    /**
     * @description The region ID of the instance to which the consumer group belongs.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The method that is used to reset the consumer offsets of the subscribed topics of a consumer group. Valid values:
     *
     *   **timestamp** (default)
     *   **offset**
     *
     * @example timestamp
     *
     * @var string
     */
    public $resetType;

    /**
     * @description The point in time when message consumption starts. The value of this parameter is a UNIX timestamp in milliseconds. The value of this parameter must be **less than 0** or **within the retention period of the consumer offset**. This parameter takes effect only if you set resetType to timestamp.
     *
     *   If you want to reset the consumer offset to the latest offset, set this parameter to -1.
     *   If you want to reset the consumer offset to the earliest offset, set this parameter to -2.
     *
     * @example -1
     *
     * @var string
     */
    public $time;

    /**
     * @description The topic name.
     *
     *   The name can contain letters, digits, underscores (_), and hyphens (-).
     *   The name must be **3 to 64** characters in length. If a name contains more than **64** characters, the name is automatically truncated.
     *   The name of a topic cannot be changed after the topic is created.
     *
     **If you want to reset the consumer offsets of all topics to which the consumer subscribes, specify an empty string.
     *
     * This parameter is required.
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerId'    => 'ConsumerId',
        'instanceId'    => 'InstanceId',
        'offsetsShrink' => 'Offsets',
        'regionId'      => 'RegionId',
        'resetType'     => 'ResetType',
        'time'          => 'Time',
        'topic'         => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->offsetsShrink) {
            $res['Offsets'] = $this->offsetsShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConsumerOffsetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Offsets'])) {
            $model->offsetsShrink = $map['Offsets'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
