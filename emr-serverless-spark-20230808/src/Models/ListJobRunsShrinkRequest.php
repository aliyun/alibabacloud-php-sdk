<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListJobRunsShrinkRequest extends Model
{
    /**
     * @description The ID of the user who creates a Spark job.
     *
     * @example 1509789347011222
     *
     * @var string
     */
    public $creator;

    /**
     * @description The range of end time.
     *
     * @var string
     */
    public $endTimeShrink;

    /**
     * @var string
     */
    public $jobRunDeploymentId;

    /**
     * @description The job ID.
     *
     * @example j-xxx
     *
     * @var string
     */
    public $jobRunId;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The job name.
     *
     * @example emr-spark-demo-job
     *
     * @var string
     */
    public $name;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the resource queue on which the Spark jobs run.
     *
     * @example dev_queue
     *
     * @var string
     */
    public $resourceQueueId;

    /**
     * @description The range of start time.
     *
     * @var string
     */
    public $startTimeShrink;

    /**
     * @description The job states.
     *
     * @example ["Running","Submitted"]
     *
     * @var string
     */
    public $statesShrink;

    /**
     * @description The tags of the job.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'creator'            => 'creator',
        'endTimeShrink'      => 'endTime',
        'jobRunDeploymentId' => 'jobRunDeploymentId',
        'jobRunId'           => 'jobRunId',
        'maxResults'         => 'maxResults',
        'name'               => 'name',
        'nextToken'          => 'nextToken',
        'regionId'           => 'regionId',
        'resourceQueueId'    => 'resourceQueueId',
        'startTimeShrink'    => 'startTime',
        'statesShrink'       => 'states',
        'tagsShrink'         => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->endTimeShrink) {
            $res['endTime'] = $this->endTimeShrink;
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

    /**
     * @param array $map
     *
     * @return ListJobRunsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['endTime'])) {
            $model->endTimeShrink = $map['endTime'];
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
