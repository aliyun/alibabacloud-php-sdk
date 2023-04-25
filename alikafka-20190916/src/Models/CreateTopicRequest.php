<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateTopicRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateTopicRequest extends Model
{
    /**
     * @description The number of replicas for the topic.
     *
     *   This parameter is available only when the **LocalTopic** parameter is set to **true**\<props="local_disk">, or the **edition of the instance** is **Open Source Edition (Local Disk)**.
     *   Valid values: 1 to 3.
     *
     * > If you set this parameter to **1**, the risk of data loss increases. Exercise caution when you configure this parameter.
     * @example false
     *
     * @var bool
     */
    public $compactTopic;

    /**
     * @description The status code returned. The status code 200 indicates that the request is successful.
     *
     * @example {"replications": 3}
     *
     * @var string
     */
    public $config;

    /**
     * @description The region ID of the instance in which you want to create a topic.
     *
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Additional configurations.
     *
     *   The value of this parameter must be in JSON format.
     *   The key must be **replications**. The value specifies the number of replicas for the topic. The value must be an integer that ranges from 1 to 3.
     *   This parameter is available only when the **LocalTopic** parameter is set to **true**\<props="local_disk">, or the **edition of the instance** is **Open Source Edition (Local Disk)**.
     *
     * > If you configure this parameter, the **ReplicationFactor** parameter does not take effect.
     * @example false
     *
     * @var bool
     */
    public $localTopic;

    /**
     * @description The value of tag N to add to the resource.
     *
     *   Valid values of N: 1 to 20.
     *   This parameter can be left empty.
     *   A tag value can be 1 to 128 characters in length and cannot start with acs: or aliyun or contain [http:// or https://.](http://https://。)
     *
     * @example 1
     *
     * @var int
     */
    public $minInsyncReplicas;

    /**
     * @description The minimum number of in-sync replicas (ISRs).
     *
     *   This parameter is available only when the **LocalTopic** parameter is set to **true**\<props="local_disk">, or the **edition of the instance** is **Open Source Edition (Local Disk)**.
     *   The value of this parameter must be smaller than the value of the ReplicationFactor parameter.
     *   Valid values: 1 to 3.
     *
     * @example 12
     *
     * @var string
     */
    public $partitionNum;

    /**
     * @description Specifies whether the topic uses local storage. Valid values:
     *
     *   false: The topic uses cloud storage.
     *   true: The topic uses local storage.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of partitions in the topic.
     *
     *   Valid values: 1 to 360.
     *   In the Message Queue for Apache Kafka console, you can view the number of partitions that the system recommends based on the specification of the instance. We recommend that you specify the number that is recommended by the system as the value of this parameter to reduce the risk of data skew.
     *
     * @example alikafka_topic_test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The key of tag N to add to the resource.
     *
     *   Valid values of N: 1 to 20.
     *   If this parameter is left empty, the keys of all tags are matched.
     *   A tag key can be up to 128 characters in length and cannot start with acs: or aliyun or contain [http:// or https://.](http://https://。)
     *
     * @example 3
     *
     * @var int
     */
    public $replicationFactor;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The log cleanup policy that is used for the topic. This parameter is available only when the LocalTopic parameter is set to true. Valid values:
     *
     *   false: The topic uses the delete policy.
     *   true: The topic uses the compact policy.
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
