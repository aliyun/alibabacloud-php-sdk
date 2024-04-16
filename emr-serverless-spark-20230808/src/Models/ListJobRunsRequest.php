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
     * @description 创建用户Uid。
     *
     * @example 1509789347011222
     *
     * @var string
     */
    public $creator;

    /**
     * @var endTime
     */
    public $endTime;

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
     * @var startTime
     */
    public $startTime;

    /**
     * @description 作业状态。
     *
     * @example ["Running","Submitted"]
     *
     * @var string[]
     */
    public $states;

    /**
     * @description 标签。
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'creator'         => 'creator',
        'endTime'         => 'endTime',
        'jobRunId'        => 'jobRunId',
        'maxResults'      => 'maxResults',
        'name'            => 'name',
        'nextToken'       => 'nextToken',
        'regionId'        => 'regionId',
        'resourceQueueId' => 'resourceQueueId',
        'startTime'       => 'startTime',
        'states'          => 'states',
        'tags'            => 'tags',
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
