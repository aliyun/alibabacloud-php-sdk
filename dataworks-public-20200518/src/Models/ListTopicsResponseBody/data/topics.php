<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @description The timestamp when the event was found.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $addTime;

    /**
     * @description The timestamp when the event was processed.
     *
     * @example 1553508465000
     *
     * @var int
     */
    public $fixTime;

    /**
     * @description The timestamp when the event occurred. A time difference may exist between the time when the event occurred and the time when the event was found.
     *
     * @example 1553508465000
     *
     * @var int
     */
    public $happenTime;

    /**
     * @description The ID of the node instance that triggers the event.
     *
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the node that triggers the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example Node Name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Alibaba Cloud account that is used by the node owner.
     *
     * @example 952795****
     *
     * @var string
     */
    public $nodeOwner;

    /**
     * @description The ID of the workspace to which the node belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $topicId;

    /**
     * @description The name of the event.
     *
     * @example 1234 Error
     *
     * @var string
     */
    public $topicName;

    /**
     * @description The status of the event. Valid values: IGNORE, NEW, FIXING, and RECOVER. The value IGNORE indicates that the event is ignored. The value NEW indicates that the event is a new event. The value FIXING indicates that the event is being processed. The value RECOVER indicates that the event is processed.
     *
     * @example NEW
     *
     * @var string
     */
    public $topicStatus;

    /**
     * @description The type of the event. Valid values: SLOW and ERROR. The value SLOW indicates that the running duration of the node in the current scheduling cycle is significantly longer than the average running duration of the node in previous scheduling cycles. The value ERROR indicates that the node fails to run.
     *
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
