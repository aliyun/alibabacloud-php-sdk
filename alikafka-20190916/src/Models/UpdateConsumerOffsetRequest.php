<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetRequest\offsets;
use AlibabaCloud\Tea\Model;

class UpdateConsumerOffsetRequest extends Model
{
    /**
     * @description The name of the consumer group.
     *
     *   The name can contain letters, digits, hyphens (-), and underscores (\_).
     *   The name must be **3 to 64** characters in length. If a name contains more than **64** characters, the name is automatically truncated.
     *   The name of a consumer group cannot be changed after the consumer group is created.
     *
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The instance ID.
     *
     * @example alikafka_post-cn-mp91inkw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description If you set resetType to offset, you can use this parameter to reset the consumer offset of each partition of a specific topic in the consumer group.
     *
     * @var offsets[]
     */
    public $offsets;

    /**
     * @description The region ID of the instance to which the consumer group belongs.
     *
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
     * @description The point in time when message consumption starts. The value of this parameter is a UNIX timestamp. Unit: milliseconds. The value of this parameter must be **less than 0** or **within the retention period of the consumer offset**. This parameter takes effect only if you set resetType to timestamp.
     *
     **If you want to reset the consumer offset to the latest offset, specify a value that is less than 0. Recommended value: -1.
     *
     * @example -1
     *
     * @var string
     */
    public $time;

    /**
     * @description The topic name.
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must be **3 to 64** characters in length. If a name contains more than **64** characters, the name is automatically truncated.
     *   The name of a topic cannot be changed after the topic is created.
     *
     **If you want to reset the consumer offsets of all topics to which the consumer subscribes, specify an empty string.
     *
     * @example topic_name
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'offsets'    => 'Offsets',
        'regionId'   => 'RegionId',
        'resetType'  => 'ResetType',
        'time'       => 'Time',
        'topic'      => 'Topic',
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
        if (null !== $this->offsets) {
            $res['Offsets'] = [];
            if (null !== $this->offsets && \is_array($this->offsets)) {
                $n = 0;
                foreach ($this->offsets as $item) {
                    $res['Offsets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return UpdateConsumerOffsetRequest
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
            if (!empty($map['Offsets'])) {
                $model->offsets = [];
                $n              = 0;
                foreach ($map['Offsets'] as $item) {
                    $model->offsets[$n++] = null !== $item ? offsets::fromMap($item) : $item;
                }
            }
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
