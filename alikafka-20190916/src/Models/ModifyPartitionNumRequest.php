<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ModifyPartitionNumRequest extends Model
{
    /**
     * @description The number of partitions that you want to add to the topic.
     *
     *   The value must be an integer that is greater than 0.
     *   To reduce the risk of data skew, we recommend that you set the value to a multiple of 6.
     *   The number of total partitions ranges from 1 to 360.
     *
     * This parameter is required.
     * @example 6
     *
     * @var int
     */
    public $addPartitionNum;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_post-cn-0pp1l9z****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The topic name.
     *
     * This parameter is required.
     * @example TopicPartitionNum
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'addPartitionNum' => 'AddPartitionNum',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'topic'           => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addPartitionNum) {
            $res['AddPartitionNum'] = $this->addPartitionNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPartitionNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddPartitionNum'])) {
            $model->addPartitionNum = $map['AddPartitionNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
