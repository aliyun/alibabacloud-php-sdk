<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $addTime;

    /**
     * @example 1553508465000
     *
     * @var int
     */
    public $fixTime;

    /**
     * @example 1553508465000
     *
     * @var int
     */
    public $happenTime;

    /**
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example 952795****
     *
     * @var string
     */
    public $nodeOwner;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @example NEW
     *
     * @var string
     */
    public $topicStatus;

    /**
     * @example ERROR
     *
     * @var string
     */
    public $topicType;
    protected $_name = [
        'addTime'     => 'AddTime',
        'fixTime'     => 'FixTime',
        'happenTime'  => 'HappenTime',
        'instanceId'  => 'InstanceId',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'nodeOwner'   => 'NodeOwner',
        'projectId'   => 'ProjectId',
        'topicId'     => 'TopicId',
        'topicName'   => 'TopicName',
        'topicStatus' => 'TopicStatus',
        'topicType'   => 'TopicType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return topics
     */
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
