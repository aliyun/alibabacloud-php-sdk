<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\outputs;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\processors;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\sinks;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineRequest\source;

class UpdateDataPipelineRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expectedVersion;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var processors[]
     */
    public $processors;

    /**
     * @var sinks[]
     */
    public $sinks;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'description' => 'description',
        'expectedVersion' => 'expectedVersion',
        'kind' => 'kind',
        'outputs' => 'outputs',
        'processors' => 'processors',
        'sinks' => 'sinks',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        if (\is_array($this->sinks)) {
            Model::validateArray($this->sinks);
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

        if (null !== $this->expectedVersion) {
            $res['expectedVersion'] = $this->expectedVersion;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    $res['processors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sinks) {
            if (\is_array($this->sinks)) {
                $res['sinks'] = [];
                $n1 = 0;
                foreach ($this->sinks as $item1) {
                    $res['sinks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['expectedVersion'])) {
            $model->expectedVersion = $map['expectedVersion'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    $model->processors[$n1] = processors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sinks'])) {
            if (!empty($map['sinks'])) {
                $model->sinks = [];
                $n1 = 0;
                foreach ($map['sinks'] as $item1) {
                    $model->sinks[$n1] = sinks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
