<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\endTime;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\startTime;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListJobRunsRequest extends Model
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
     * @var endTime
     */
    public $endTime;

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
     * @var startTime
     */
    public $startTime;

    /**
     * @description The job states.
     *
     * @example ["Running","Submitted"]
     *
     * @var string[]
     */
    public $states;

    /**
     * @description The tags of the job.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'creator'            => 'creator',
        'endTime'            => 'endTime',
        'jobRunDeploymentId' => 'jobRunDeploymentId',
        'jobRunId'           => 'jobRunId',
        'maxResults'         => 'maxResults',
        'name'               => 'name',
        'nextToken'          => 'nextToken',
        'regionId'           => 'regionId',
        'resourceQueueId'    => 'resourceQueueId',
        'startTime'          => 'startTime',
        'states'             => 'states',
        'tags'               => 'tags',
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
        if (null !== $this->endTime) {
            $res['endTime'] = null !== $this->endTime ? $this->endTime->toMap() : null;
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
        if (null !== $this->startTime) {
            $res['startTime'] = null !== $this->startTime ? $this->startTime->toMap() : null;
        }
        if (null !== $this->states) {
            $res['states'] = $this->states;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = endTime::fromMap($map['endTime']);
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
            $model->startTime = startTime::fromMap($map['startTime']);
        }
        if (isset($map['states'])) {
            if (!empty($map['states'])) {
                $model->states = $map['states'];
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
