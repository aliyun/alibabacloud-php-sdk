<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class TaskTemplateOptionConfig extends Model
{
    /**
     * @var string
     */
    public $defaultResult;

    /**
     * @var QuestionOption[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $preOptions;

    /**
     * @var string
     */
    public $rule;
    protected $_name = [
        'defaultResult' => 'DefaultResult',
        'options' => 'Options',
        'preOptions' => 'PreOptions',
        'rule' => 'Rule',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->preOptions)) {
            Model::validateArray($this->preOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultResult) {
            $res['DefaultResult'] = $this->defaultResult;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preOptions) {
            if (\is_array($this->preOptions)) {
                $res['PreOptions'] = [];
                $n1 = 0;
                foreach ($this->preOptions as $item1) {
                    $res['PreOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
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
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1] = QuestionOption::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PreOptions'])) {
            if (!empty($map['PreOptions'])) {
                $model->preOptions = [];
                $n1 = 0;
                foreach ($map['PreOptions'] as $item1) {
                    $model->preOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
