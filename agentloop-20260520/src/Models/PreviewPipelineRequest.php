<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PreviewPipelineRequest\pipeline;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PreviewPipelineRequest\source;

class PreviewPipelineRequest extends Model
{
    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var pipeline
     */
    public $pipeline;

    /**
     * @var source
     */
    public $source;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'fromTime',
        'pipeline' => 'pipeline',
        'source' => 'source',
        'toTime' => 'toTime',
    ];

    public function validate()
    {
        if (null !== $this->pipeline) {
            $this->pipeline->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->pipeline) {
            $res['pipeline'] = null !== $this->pipeline ? $this->pipeline->toArray($noStream) : $this->pipeline;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['pipeline']);
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
