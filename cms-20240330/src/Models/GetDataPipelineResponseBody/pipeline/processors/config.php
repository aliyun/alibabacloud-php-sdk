<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\processors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\processors\config\rules;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\processors\config\selector;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\processors\config\target;

class config extends Model
{
    /**
     * @var string[]
     */
    public $applications;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $script;

    /**
     * @var selector
     */
    public $selector;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'applications' => 'applications',
        'expression' => 'expression',
        'fields' => 'fields',
        'rules' => 'rules',
        'script' => 'script',
        'selector' => 'selector',
        'target' => 'target',
    ];

    public function validate()
    {
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (null !== $this->selector) {
            $this->selector->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['applications'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->script) {
            $res['script'] = $this->script;
        }

        if (null !== $this->selector) {
            $res['selector'] = null !== $this->selector ? $this->selector->toArray($noStream) : $this->selector;
        }

        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['applications'])) {
            if (!empty($map['applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['applications'] as $item1) {
                    $model->applications[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['script'])) {
            $model->script = $map['script'];
        }

        if (isset($map['selector'])) {
            $model->selector = selector::fromMap($map['selector']);
        }

        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        return $model;
    }
}
