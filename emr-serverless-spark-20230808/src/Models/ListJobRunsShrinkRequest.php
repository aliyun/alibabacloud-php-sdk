<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListJobRunsShrinkRequest extends Model
{
    /**
     * @description 创建用户Uid。
     *
     * @example 1509789347011222
     *
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $endTimeShrink;

    /**
     * @description 作业id。
     *
     * @example j-xxx
     *
     * @var string
     */
    public $jobRunId;

    /**
     * @description 一次获取的最大记录数。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 作业名称。
     *
     * @example emr-spark-demo-job
     *
     * @var string
     */
    public $name;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dev_queue
     *
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $startTimeShrink;

    /**
     * @description 作业状态。
     *
     * @example ["Running","Submitted"]
     *
     * @var string
     */
    public $statesShrink;

    /**
     * @description 标签。
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'creator'         => 'creator',
        'endTimeShrink'   => 'endTime',
        'jobRunId'        => 'jobRunId',
        'maxResults'      => 'maxResults',
        'name'            => 'name',
        'nextToken'       => 'nextToken',
        'regionId'        => 'regionId',
        'resourceQueueId' => 'resourceQueueId',
        'startTimeShrink' => 'startTime',
        'statesShrink'    => 'states',
        'tagsShrink'      => 'tags',
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
