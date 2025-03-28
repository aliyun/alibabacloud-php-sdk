<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponseBody\data;

use AlibabaCloud\Dara\Model;

class topics extends Model
{
    /**
     * @var int
     */
    public $addTime;

    /**
     * @var int
     */
    public $fixTime;

    /**
     * @var int
     */
    public $happenTime;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeOwner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicStatus;

    /**
     * @var string
     */
    public $topicType;
    protected $_name = [
        'addTime' => 'AddTime',
        'fixTime' => 'FixTime',
        'happenTime' => 'HappenTime',
        'instanceId' => 'InstanceId',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeOwner' => 'NodeOwner',
        'projectId' => 'ProjectId',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
        'topicStatus' => 'TopicStatus',
        'topicType' => 'TopicType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }

        if (null !== $this->happenTime) {
            $res['HappenTime'] = $this->happenTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeOwner) {
            $res['NodeOwner'] = $this->nodeOwner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->topicStatus) {
            $res['TopicStatus'] = $this->topicStatus;
        }

        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
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
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }

        if (isset($map['HappenTime'])) {
            $model->happenTime = $map['HappenTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeOwner'])) {
            $model->nodeOwner = $map['NodeOwner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['TopicStatus'])) {
            $model->topicStatus = $map['TopicStatus'];
        }

        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }

        return $model;
    }
}
