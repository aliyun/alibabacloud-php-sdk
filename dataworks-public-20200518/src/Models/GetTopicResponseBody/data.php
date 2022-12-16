<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $addTime;

    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @example 952795****
     *
     * @var string
     */
    public $assigner;

    /**
     * @example 3600
     *
     * @var int
     */
    public $baselineBuffer;

    /**
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @example 1
     *
     * @var int
     */
    public $baselineInGroupId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @example SAFE
     *
     * @var string
     */
    public $baselineStatus;

    /**
     * @example 1200
     *
     * @var int
     */
    public $buffer;

    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $dealTime;

    /**
     * @example 952795****
     *
     * @var string
     */
    public $dealUser;

    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $fixTime;

    /**
     * @example 1553524393000
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
     * @example 1553524393000
     *
     * @var int
     */
    public $nextAlertTime;

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
    public $owner;

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
     * @example FIXING
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
        'addTime'           => 'AddTime',
        'alertTime'         => 'AlertTime',
        'assigner'          => 'Assigner',
        'baselineBuffer'    => 'BaselineBuffer',
        'baselineId'        => 'BaselineId',
        'baselineInGroupId' => 'BaselineInGroupId',
        'baselineName'      => 'BaselineName',
        'baselineStatus'    => 'BaselineStatus',
        'buffer'            => 'Buffer',
        'dealTime'          => 'DealTime',
        'dealUser'          => 'DealUser',
        'fixTime'           => 'FixTime',
        'happenTime'        => 'HappenTime',
        'instanceId'        => 'InstanceId',
        'nextAlertTime'     => 'NextAlertTime',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'owner'             => 'Owner',
        'projectId'         => 'ProjectId',
        'topicId'           => 'TopicId',
        'topicName'         => 'TopicName',
        'topicStatus'       => 'TopicStatus',
        'topicType'         => 'TopicType',
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
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->assigner) {
            $res['Assigner'] = $this->assigner;
        }
        if (null !== $this->baselineBuffer) {
            $res['BaselineBuffer'] = $this->baselineBuffer;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineInGroupId) {
            $res['BaselineInGroupId'] = $this->baselineInGroupId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineStatus) {
            $res['BaselineStatus'] = $this->baselineStatus;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUser) {
            $res['DealUser'] = $this->dealUser;
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
        if (null !== $this->nextAlertTime) {
            $res['NextAlertTime'] = $this->nextAlertTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Assigner'])) {
            $model->assigner = $map['Assigner'];
        }
        if (isset($map['BaselineBuffer'])) {
            $model->baselineBuffer = $map['BaselineBuffer'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineInGroupId'])) {
            $model->baselineInGroupId = $map['BaselineInGroupId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineStatus'])) {
            $model->baselineStatus = $map['BaselineStatus'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUser'])) {
            $model->dealUser = $map['DealUser'];
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
        if (isset($map['NextAlertTime'])) {
            $model->nextAlertTime = $map['NextAlertTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
