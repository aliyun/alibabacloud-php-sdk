<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $compactTopic;

    /**
     * @var string
     */
    public $configShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $localTopic;

    /**
     * @var int
     */
    public $minInsyncReplicas;

    /**
     * @var string
     */
    public $partitionNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $replicationFactor;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'compactTopic'      => 'CompactTopic',
        'configShrink'      => 'Config',
        'instanceId'        => 'InstanceId',
        'localTopic'        => 'LocalTopic',
        'minInsyncReplicas' => 'MinInsyncReplicas',
        'partitionNum'      => 'PartitionNum',
        'regionId'          => 'RegionId',
        'remark'            => 'Remark',
        'replicationFactor' => 'ReplicationFactor',
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
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTopicShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompactTopic'])) {
            $model->compactTopic = $map['CompactTopic'];
        }
        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
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
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
