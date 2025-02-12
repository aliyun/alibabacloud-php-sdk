<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO\tags;

class topicVO extends Model
{
    /**
     * @var bool
     */
    public $autoCreate;
    /**
     * @var bool
     */
    public $compactTopic;
    /**
     * @var int
     */
    public $createTime;
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
    public $status;
    /**
     * @var string
     */
    public $statusName;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $topic;
    /**
     * @var string
     */
    public $topicConfig;
    protected $_name = [
        'autoCreate'   => 'AutoCreate',
        'compactTopic' => 'CompactTopic',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'localTopic'   => 'LocalTopic',
        'partitionNum' => 'PartitionNum',
        'regionId'     => 'RegionId',
        'remark'       => 'Remark',
        'status'       => 'Status',
        'statusName'   => 'StatusName',
        'tags'         => 'Tags',
        'topic'        => 'Topic',
        'topicConfig'  => 'TopicConfig',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreate) {
            $res['AutoCreate'] = $this->autoCreate;
        }

        if (null !== $this->compactTopic) {
            $res['CompactTopic'] = $this->compactTopic;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->localTopic) {
            $res['LocalTopic'] = $this->localTopic;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->topicConfig) {
            $res['TopicConfig'] = $this->topicConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreate'])) {
            $model->autoCreate = $map['AutoCreate'];
        }

        if (isset($map['CompactTopic'])) {
            $model->compactTopic = $map['CompactTopic'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LocalTopic'])) {
            $model->localTopic = $map['LocalTopic'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicConfig'])) {
            $model->topicConfig = $map['TopicConfig'];
        }

        return $model;
    }
}
