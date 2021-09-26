<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @var string
     */
    public $topicName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $nodeOwner;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $fixTime;

    /**
     * @var string
     */
    public $topicType;

    /**
     * @var string
     */
    public $topicStatus;

    /**
     * @var int
     */
    public $happenTime;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var int
     */
    public $addTime;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'topicName'   => 'TopicName',
        'projectId'   => 'ProjectId',
        'nodeOwner'   => 'NodeOwner',
        'instanceId'  => 'InstanceId',
        'fixTime'     => 'FixTime',
        'topicType'   => 'TopicType',
        'topicStatus' => 'TopicStatus',
        'happenTime'  => 'HappenTime',
        'nodeName'    => 'NodeName',
        'topicId'     => 'TopicId',
        'addTime'     => 'AddTime',
        'nodeId'      => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->nodeOwner) {
            $res['NodeOwner'] = $this->nodeOwner;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }
        if (null !== $this->topicStatus) {
            $res['TopicStatus'] = $this->topicStatus;
        }
        if (null !== $this->happenTime) {
            $res['HappenTime'] = $this->happenTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['NodeOwner'])) {
            $model->nodeOwner = $map['NodeOwner'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }
        if (isset($map['TopicStatus'])) {
            $model->topicStatus = $map['TopicStatus'];
        }
        if (isset($map['HappenTime'])) {
            $model->happenTime = $map['HappenTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
