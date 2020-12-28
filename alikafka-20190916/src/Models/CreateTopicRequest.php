<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateTopicRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $compactTopic;

    /**
     * @var string
     */
    public $partitionNum;

    /**
     * @var bool
     */
    public $localTopic;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'topic'        => 'Topic',
        'remark'       => 'Remark',
        'regionId'     => 'RegionId',
        'compactTopic' => 'CompactTopic',
        'partitionNum' => 'PartitionNum',
        'localTopic'   => 'LocalTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->compactTopic) {
            $res['CompactTopic'] = $this->compactTopic;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->localTopic) {
            $res['LocalTopic'] = $this->localTopic;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CompactTopic'])) {
            $model->compactTopic = $map['CompactTopic'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['LocalTopic'])) {
            $model->localTopic = $map['LocalTopic'];
        }

        return $model;
    }
}
