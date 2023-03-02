<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description The timestamp when the first alert was reported.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description The ID of the Apsara Stack tenant account used by the alert recipient.
     *
     * @example 952795****
     *
     * @var string
     */
    public $assigner;

    /**
     * @description The margin of the worst baseline instance. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $baselineBuffer;

    /**
     * @description The ID of the baseline to which the worst baseline instance belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The ID of the cycle of the worst baseline instance.
     *
     * @example 1
     *
     * @var int
     */
    public $baselineInGroupId;

    /**
     * @description The name of the baseline to which the worst baseline instance belongs.
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The status of the baseline. Valid values: ERROR, SAFE, DANGROUS, and OVER. A value of ERROR indicates that no nodes are associated with the baseline, or all nodes associated with the baseline are suspended. A value of SAFE indicates that nodes are run before the alert duration begins. A value of DANGROUS indicates that nodes are still running after the alert duration ends but the committed time does not arrive. A value of OVER indicates that nodes are still running after the committed time.
     *
     * @example SAFE
     *
     * @var string
     */
    public $baselineStatus;

    /**
     * @description The margin of the event. Unit: seconds.
     *
     * @example 1200
     *
     * @var int
     */
    public $buffer;

    /**
     * @description The timestamp when the event was last processed.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $dealTime;

    /**
     * @description The ID of the Apsara Stack tenant account used by the user who last processed the event.
     *
     * @example 952795****
     *
     * @var string
     */
    public $dealUser;

    /**
     * @description The timestamp when the event was processed.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $fixTime;

    /**
     * @description The timestamp when the system event occurred. A time difference may exist between the time when the event occurred and the time when the event was found.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $happenTime;

    /**
     * @description The ID of the instance that triggered the event.
     *
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The timestamp when the system reports the next alert.
     *
     * @example 1553524393000
     *
     * @var int
     */
    public $nextAlertTime;

    /**
     * @description The ID of the node that triggered the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node that triggered the event.
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Apsara Stack tenant account used by the event owner.
     *
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the node that triggered the event belongs.
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
     * @var string
     */
    public $topicName;

    /**
     * @description The status of the event. Valid values: IGNORE, NEW, FIXING, and RECOVER. A value of IGNORE indicates that the event is ignored. A value of NEW indicates that the event is a new event. A value of FIXING indicates that the event is being processed. A value of RECOVER indicates that the event is processed.
     *
     * @example FIXING
     *
     * @var string
     */
    public $topicStatus;

    /**
     * @description The type of the event. Valid values: SLOW and ERROR. A value of SLOW indicates that the duration of the task is significantly longer than the average duration of the task in previous cycles. A value of ERROR indicates that the task fails to run.
     *
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
