<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\componentConfig\component;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\componentConfig\output;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\componentConfig\variable;

class componentConfig extends Model
{
    /**
     * @var component[]
     */
    public $component;

    /**
     * @var output[]
     */
    public $output;

    /**
     * @var variable[]
     */
    public $variable;
    protected $_name = [
        'component' => 'component',
        'output' => 'output',
        'variable' => 'variable',
    ];

    public function validate()
    {
        if (\is_array($this->component)) {
            Model::validateArray($this->component);
        }
        if (\is_array($this->output)) {
            Model::validateArray($this->output);
        }
        if (\is_array($this->variable)) {
            Model::validateArray($this->variable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            if (\is_array($this->component)) {
                $res['component'] = [];
                $n1 = 0;
                foreach ($this->component as $item1) {
                    $res['component'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->output) {
            if (\is_array($this->output)) {
                $res['output'] = [];
                $n1 = 0;
                foreach ($this->output as $item1) {
                    $res['output'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->variable) {
            if (\is_array($this->variable)) {
                $res['variable'] = [];
                $n1 = 0;
                foreach ($this->variable as $item1) {
                    $res['variable'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['component'])) {
            if (!empty($map['component'])) {
                $model->component = [];
                $n1 = 0;
                foreach ($map['component'] as $item1) {
                    $model->component[$n1] = component::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['output'])) {
            if (!empty($map['output'])) {
                $model->output = [];
                $n1 = 0;
                foreach ($map['output'] as $item1) {
                    $model->output[$n1] = output::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['variable'])) {
            if (!empty($map['variable'])) {
                $model->variable = [];
                $n1 = 0;
                foreach ($map['variable'] as $item1) {
                    $model->variable[$n1] = variable::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
