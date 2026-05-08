<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest\executePolicy;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest\pipeline;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest\sink;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest\source;

class CreatePipelineRequest extends Model
{
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
     * @var sink
     */
    public $sink;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'description' => 'description',
        'executePolicy' => 'executePolicy',
        'pipeline' => 'pipeline',
        'pipelineName' => 'pipelineName',
        'sink' => 'sink',
        'source' => 'source',
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

        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

        if (isset($map['sink'])) {
            $model->sink = sink::fromMap($map['sink']);
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
