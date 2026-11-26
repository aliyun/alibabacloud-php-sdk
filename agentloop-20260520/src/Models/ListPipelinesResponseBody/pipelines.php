<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\executePolicy;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\pipeline;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\sink;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\source;

class pipelines extends Model
{
    /**
     * @var int
     */
    public $committedWatermark;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var executePolicy
     */
    public $executePolicy;

    /**
     * @var string
     */
    public $lastRunId;

    /**
     * @var string
     */
    public $lastRunStatus;

    /**
     * @var int
     */
    public $nextTriggerTime;

    /**
     * @var string
     */
    public $pausedReason;

    /**
     * @var pipeline
     */
    public $pipeline;

    /**
     * @var string
     */
    public $pipelineKind;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var sink
     */
    public $sink;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'committedWatermark' => 'committedWatermark',
        'createTime' => 'createTime',
        'description' => 'description',
        'executePolicy' => 'executePolicy',
        'lastRunId' => 'lastRunId',
        'lastRunStatus' => 'lastRunStatus',
        'nextTriggerTime' => 'nextTriggerTime',
        'pausedReason' => 'pausedReason',
        'pipeline' => 'pipeline',
        'pipelineKind' => 'pipelineKind',
        'pipelineName' => 'pipelineName',
        'regionId' => 'regionId',
        'scheduleStatus' => 'scheduleStatus',
        'scheduleType' => 'scheduleType',
        'sink' => 'sink',
        'source' => 'source',
        'updateTime' => 'updateTime',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->executePolicy) {
            $this->executePolicy->validate();
        }
        if (null !== $this->pipeline) {
            $this->pipeline->validate();
        }
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->committedWatermark) {
            $res['committedWatermark'] = $this->committedWatermark;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executePolicy) {
            $res['executePolicy'] = null !== $this->executePolicy ? $this->executePolicy->toArray($noStream) : $this->executePolicy;
        }

        if (null !== $this->lastRunId) {
            $res['lastRunId'] = $this->lastRunId;
        }

        if (null !== $this->lastRunStatus) {
            $res['lastRunStatus'] = $this->lastRunStatus;
        }

        if (null !== $this->nextTriggerTime) {
            $res['nextTriggerTime'] = $this->nextTriggerTime;
        }

        if (null !== $this->pausedReason) {
            $res['pausedReason'] = $this->pausedReason;
        }

        if (null !== $this->pipeline) {
            $res['pipeline'] = null !== $this->pipeline ? $this->pipeline->toArray($noStream) : $this->pipeline;
        }

        if (null !== $this->pipelineKind) {
            $res['pipelineKind'] = $this->pipelineKind;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->scheduleStatus) {
            $res['scheduleStatus'] = $this->scheduleStatus;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['committedWatermark'])) {
            $model->committedWatermark = $map['committedWatermark'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executePolicy'])) {
            $model->executePolicy = executePolicy::fromMap($map['executePolicy']);
        }

        if (isset($map['lastRunId'])) {
            $model->lastRunId = $map['lastRunId'];
        }

        if (isset($map['lastRunStatus'])) {
            $model->lastRunStatus = $map['lastRunStatus'];
        }

        if (isset($map['nextTriggerTime'])) {
            $model->nextTriggerTime = $map['nextTriggerTime'];
        }

        if (isset($map['pausedReason'])) {
            $model->pausedReason = $map['pausedReason'];
        }

        if (isset($map['pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['pipeline']);
        }

        if (isset($map['pipelineKind'])) {
            $model->pipelineKind = $map['pipelineKind'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['scheduleStatus'])) {
            $model->scheduleStatus = $map['scheduleStatus'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['sink'])) {
            $model->sink = sink::fromMap($map['sink']);
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
