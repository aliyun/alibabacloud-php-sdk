<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListJobRunsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $endTimeShrink;

    /**
     * @var string
     */
    public $isWorkflow;

    /**
     * @var string
     */
    public $jobRunDeploymentId;

    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $minDuration;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $startTimeShrink;

    /**
     * @var string
     */
    public $statesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'creator' => 'creator',
        'endTimeShrink' => 'endTime',
        'isWorkflow' => 'isWorkflow',
        'jobRunDeploymentId' => 'jobRunDeploymentId',
        'jobRunId' => 'jobRunId',
        'maxResults' => 'maxResults',
        'minDuration' => 'minDuration',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'regionId' => 'regionId',
        'resourceQueueId' => 'resourceQueueId',
        'startTimeShrink' => 'startTime',
        'statesShrink' => 'states',
        'tagsShrink' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->endTimeShrink) {
            $res['endTime'] = $this->endTimeShrink;
        }

        if (null !== $this->isWorkflow) {
            $res['isWorkflow'] = $this->isWorkflow;
        }

        if (null !== $this->jobRunDeploymentId) {
            $res['jobRunDeploymentId'] = $this->jobRunDeploymentId;
        }

        if (null !== $this->jobRunId) {
            $res['jobRunId'] = $this->jobRunId;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->minDuration) {
            $res['minDuration'] = $this->minDuration;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }

        if (null !== $this->startTimeShrink) {
            $res['startTime'] = $this->startTimeShrink;
        }

        if (null !== $this->statesShrink) {
            $res['states'] = $this->statesShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['endTime'])) {
            $model->endTimeShrink = $map['endTime'];
        }

        if (isset($map['isWorkflow'])) {
            $model->isWorkflow = $map['isWorkflow'];
        }

        if (isset($map['jobRunDeploymentId'])) {
            $model->jobRunDeploymentId = $map['jobRunDeploymentId'];
        }

        if (isset($map['jobRunId'])) {
            $model->jobRunId = $map['jobRunId'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['minDuration'])) {
            $model->minDuration = $map['minDuration'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }

        if (isset($map['startTime'])) {
            $model->startTimeShrink = $map['startTime'];
        }

        if (isset($map['states'])) {
            $model->statesShrink = $map['states'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
