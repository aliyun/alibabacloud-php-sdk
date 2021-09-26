<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $baselineStatus;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $nextAlertTime;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $fixTime;

    /**
     * @var int
     */
    public $baselineInGroupId;

    /**
     * @var int
     */
    public $baselineBuffer;

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
     * @var int
     */
    public $dealTime;

    /**
     * @var string
     */
    public $dealUser;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $alertTime;

    /**
     * @var int
     */
    public $buffer;

    /**
     * @var string
     */
    public $assigner;

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
        'owner'             => 'Owner',
        'topicName'         => 'TopicName',
        'baselineStatus'    => 'BaselineStatus',
        'projectId'         => 'ProjectId',
        'nextAlertTime'     => 'NextAlertTime',
        'instanceId'        => 'InstanceId',
        'fixTime'           => 'FixTime',
        'baselineInGroupId' => 'BaselineInGroupId',
        'baselineBuffer'    => 'BaselineBuffer',
        'topicType'         => 'TopicType',
        'topicStatus'       => 'TopicStatus',
        'happenTime'        => 'HappenTime',
        'dealTime'          => 'DealTime',
        'dealUser'          => 'DealUser',
        'baselineName'      => 'BaselineName',
        'baselineId'        => 'BaselineId',
        'nodeName'          => 'NodeName',
        'alertTime'         => 'AlertTime',
        'buffer'            => 'Buffer',
        'assigner'          => 'Assigner',
        'topicId'           => 'TopicId',
        'addTime'           => 'AddTime',
        'nodeId'            => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->baselineStatus) {
            $res['BaselineStatus'] = $this->baselineStatus;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->nextAlertTime) {
            $res['NextAlertTime'] = $this->nextAlertTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }
        if (null !== $this->baselineInGroupId) {
            $res['BaselineInGroupId'] = $this->baselineInGroupId;
        }
        if (null !== $this->baselineBuffer) {
            $res['BaselineBuffer'] = $this->baselineBuffer;
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
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUser) {
            $res['DealUser'] = $this->dealUser;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->assigner) {
            $res['Assigner'] = $this->assigner;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['BaselineStatus'])) {
            $model->baselineStatus = $map['BaselineStatus'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['NextAlertTime'])) {
            $model->nextAlertTime = $map['NextAlertTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }
        if (isset($map['BaselineInGroupId'])) {
            $model->baselineInGroupId = $map['BaselineInGroupId'];
        }
        if (isset($map['BaselineBuffer'])) {
            $model->baselineBuffer = $map['BaselineBuffer'];
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
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUser'])) {
            $model->dealUser = $map['DealUser'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['Assigner'])) {
            $model->assigner = $map['Assigner'];
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
