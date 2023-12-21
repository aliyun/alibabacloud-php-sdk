<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec\inputs;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec\outputs;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec\withSequence;
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
     * @var inputs
     */
    public $inputs;

    /**
     * @var outputs
     */
    public $outputs;

    /**
     * @example 2
     *
     * @var int
     */
    public $parallelism;

    /**
     * @var mixed[][]
     */
    public $pipelines;

    /**
     * @example ”{{inputs.parameters.skip}} == false“
     *
     * @var string
     */
    public $when;

    /**
     * @var string[]
     */
    public $withItems;

    /**
     * @example "{{pipelines.generate.outputs.result}}"
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
            $res['Pipelines'] = $this->pipelines;
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
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Pipelines'])) {
            if (!empty($map['Pipelines'])) {
                $model->pipelines = $map['Pipelines'];
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
