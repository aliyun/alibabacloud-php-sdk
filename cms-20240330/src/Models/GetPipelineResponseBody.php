<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\executePolicy;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\pipeline;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\sink;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\source;

class GetPipelineResponseBody extends Model
{
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
     * @var pipeline
     */
    public $pipeline;

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
    public $requestId;

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
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'executePolicy' => 'executePolicy',
        'pipeline' => 'pipeline',
        'pipelineName' => 'pipelineName',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'sink' => 'sink',
        'source' => 'source',
        'updateTime' => 'updateTime',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executePolicy) {
            $res['executePolicy'] = null !== $this->executePolicy ? $this->executePolicy->toArray($noStream) : $this->executePolicy;
        }

        if (null !== $this->pipeline) {
            $res['pipeline'] = null !== $this->pipeline ? $this->pipeline->toArray($noStream) : $this->pipeline;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executePolicy'])) {
            $model->executePolicy = executePolicy::fromMap($map['executePolicy']);
        }

        if (isset($map['pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['pipeline']);
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
