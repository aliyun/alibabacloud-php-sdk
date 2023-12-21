<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\Node;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\Node;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\Node\spec\withSequence;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\NodeIO;
use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @var string[]
     */
    public $dependencies;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasPipelines;

    /**
     * @var NodeIO
     */
    public $inputs;

    /**
     * @var NodeIO
     */
    public $outputs;

    /**
     * @example 8
     *
     * @var int
     */
    public $parallelism;

    /**
     * @var Node[]
     */
    public $pipelines;

    /**
     * @example {{inputs.parameters.parentInput}} == 12
     *
     * @var string
     */
    public $when;

    /**
     * @var string[]
     */
    public $withItems;

    /**
     * @example {{pipelines.step1.outputs.parameters.outputparam}}
     *
     * @var string
     */
    public $withParam;

    /**
     * @var withSequence
     */
    public $withSequence;
    protected $_name = [
        'dependencies' => 'Dependencies',
        'hasPipelines' => 'HasPipelines',
        'inputs'       => 'Inputs',
        'outputs'      => 'Outputs',
        'parallelism'  => 'Parallelism',
        'pipelines'    => 'Pipelines',
        'when'         => 'When',
        'withItems'    => 'WithItems',
        'withParam'    => 'WithParam',
        'withSequence' => 'WithSequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencies) {
            $res['Dependencies'] = $this->dependencies;
        }
        if (null !== $this->hasPipelines) {
            $res['HasPipelines'] = $this->hasPipelines;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toMap() : null;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->pipelines) {
            $res['Pipelines'] = [];
            if (null !== $this->pipelines && \is_array($this->pipelines)) {
                $n = 0;
                foreach ($this->pipelines as $item) {
                    $res['Pipelines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->when) {
            $res['When'] = $this->when;
        }
        if (null !== $this->withItems) {
            $res['WithItems'] = $this->withItems;
        }
        if (null !== $this->withParam) {
            $res['WithParam'] = $this->withParam;
        }
        if (null !== $this->withSequence) {
            $res['WithSequence'] = null !== $this->withSequence ? $this->withSequence->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = $map['Dependencies'];
            }
        }
        if (isset($map['HasPipelines'])) {
            $model->hasPipelines = $map['HasPipelines'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = NodeIO::fromMap($map['Inputs']);
        }
        if (isset($map['Outputs'])) {
            $model->outputs = NodeIO::fromMap($map['Outputs']);
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Pipelines'])) {
            if (!empty($map['Pipelines'])) {
                $model->pipelines = [];
                $n                = 0;
                foreach ($map['Pipelines'] as $item) {
                    $model->pipelines[$n++] = null !== $item ? Node::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['When'])) {
            $model->when = $map['When'];
        }
        if (isset($map['WithItems'])) {
            if (!empty($map['WithItems'])) {
                $model->withItems = $map['WithItems'];
            }
        }
        if (isset($map['WithParam'])) {
            $model->withParam = $map['WithParam'];
        }
        if (isset($map['WithSequence'])) {
            $model->withSequence = withSequence::fromMap($map['WithSequence']);
        }

        return $model;
    }
}
