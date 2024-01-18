<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateTopicRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTopicRequest extends Model
{
    /**
     * @description The log cleanup policy that is used for the topic. This parameter is available only when LocalTopic is set to true. Valid values:
     *
     *   false: The topic uses the default log cleanup policy.
     *   true: The topic uses the log compaction policy.
     *
     * @example false
     *
     * @var bool
     */
    public $compactTopic;

    /**
     * @description The additional configurations.
     *
     *   The value of this parameter must be in JSON format.
     *   The key must be **replications**. The value indicates the number of replicas for the topic. The value must be an integer that ranges from 1 to 3.
     *   This parameter is available only when **LocalTopic** is set to **true**, or the instance is of the **Open Source Edition (Local Disk)**.****
     *
     * > If you specify this parameter, **ReplicationFactor** does not take effect.
     * @example {"replications": 3}
     *
     * @var string
     */
    public $config;

    /**
     * @description The instance ID.
     *
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of storage that the topic uses. Valid values:
     *
     *   false: The topic uses cloud storage.
     *   true: The topic uses local storage.
     *
     * @example false
     *
     * @var bool
     */
    public $localTopic;

    /**
     * @description The minimum number of in-sync replicas (ISRs).
     *
     *   This parameter is available only when **LocalTopic** is set to **true**, or the instance is of the **Open Source Edition (Local Disk)**.****
     *   The value of this parameter must be smaller than the value of ReplicationFactor.
     *   Valid values: 1 to 3.
     *
     * @example 1
     *
     * @var int
     */
    public $minInsyncReplicas;

    /**
     * @description The number of partitions in the topic.
     *
     *   Valid values: 1 to 360.
     *   The system recommends the number of partitions based on the specification of the instance. You can view the recommended number in the Message Queue for Apache Kafka console. We recommend that you specify the number that is recommended by the system as the value of this parameter to reduce the risk of data skew.
     *
     * @example 12
     *
     * @var string
     */
    public $partitionNum;

    /**
     * @description The region ID of the instance in which you want to create a topic.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the topic.
     *
     *   The description can contain only letters, digits, hyphens (-), and underscores (\_).
     *   The description must be 3 to 64 characters in length.
     *
     * @example alikafka_topic_test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The number of replicas for the topic.
     *
     *   This parameter is available only when **LocalTopic** is set to **true**, or the instance is of the **Open Source Edition (Local Disk)**.****
     *   Valid values: 1 to 3.
     *
     * > If you set this parameter to **1**, data loss may occur. Exercise caution when you configure this parameter.
     * @example 3
     *
     * @var int
     */
    public $replicationFactor;

    /**
     * @description The tags that you want to add to the topic.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The topic name.
     *
     *   The name can contain only letters, digits, hyphens (-), and underscores (\_).
     *   The name must be 3 to 64 characters in length. If the name that you specify contains more than 64 characters, the system automatically truncates the name.
     *   After a topic is created, you cannot change the name of the topic.
     *
     * @example alikafka_topic_test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'compactTopic'      => 'CompactTopic',
        'config'            => 'Config',
        'instanceId'        => 'InstanceId',
        'localTopic'        => 'LocalTopic',
        'minInsyncReplicas' => 'MinInsyncReplicas',
        'partitionNum'      => 'PartitionNum',
        'regionId'          => 'RegionId',
        'remark'            => 'Remark',
        'replicationFactor' => 'ReplicationFactor',
        'tag'               => 'Tag',
        'topic'             => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compactTopic) {
            $res['CompactTopic'] = $this->compactTopic;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->localTopic) {
            $res['LocalTopic'] = $this->localTopic;
        }
        if (null !== $this->minInsyncReplicas) {
            $res['MinInsyncReplicas'] = $this->minInsyncReplicas;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompactTopic'])) {
            $model->compactTopic = $map['CompactTopic'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LocalTopic'])) {
            $model->localTopic = $map['LocalTopic'];
        }
        if (isset($map['MinInsyncReplicas'])) {
            $model->minInsyncReplicas = $map['MinInsyncReplicas'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
