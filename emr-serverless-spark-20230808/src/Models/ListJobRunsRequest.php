<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\endTime;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\startTime;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest\tags;

class ListJobRunsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationConfigs;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var endTime
     */
    public $endTime;

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
    public $runtimeConfigs;

    /**
     * @var startTime
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $states;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'applicationConfigs' => 'applicationConfigs',
        'creator' => 'creator',
        'endTime' => 'endTime',
        'isWorkflow' => 'isWorkflow',
        'jobRunDeploymentId' => 'jobRunDeploymentId',
        'jobRunId' => 'jobRunId',
        'maxResults' => 'maxResults',
        'minDuration' => 'minDuration',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'regionId' => 'regionId',
        'resourceQueueId' => 'resourceQueueId',
        'runtimeConfigs' => 'runtimeConfigs',
        'startTime' => 'startTime',
        'states' => 'states',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (null !== $this->endTime) {
            $this->endTime->validate();
        }
        if (null !== $this->startTime) {
            $this->startTime->validate();
        }
        if (\is_array($this->states)) {
            Model::validateArray($this->states);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            $res['applicationConfigs'] = $this->applicationConfigs;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = null !== $this->endTime ? $this->endTime->toArray($noStream) : $this->endTime;
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

        if (null !== $this->runtimeConfigs) {
            $res['runtimeConfigs'] = $this->runtimeConfigs;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = null !== $this->startTime ? $this->startTime->toArray($noStream) : $this->startTime;
        }

        if (null !== $this->states) {
            if (\is_array($this->states)) {
                $res['states'] = [];
                $n1 = 0;
                foreach ($this->states as $item1) {
                    $res['states'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['applicationConfigs'])) {
            $model->applicationConfigs = $map['applicationConfigs'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = endTime::fromMap($map['endTime']);
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

        if (isset($map['runtimeConfigs'])) {
            $model->runtimeConfigs = $map['runtimeConfigs'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = startTime::fromMap($map['startTime']);
        }

        if (isset($map['states'])) {
            if (!empty($map['states'])) {
                $model->states = [];
                $n1 = 0;
                foreach ($map['states'] as $item1) {
                    $model->states[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
