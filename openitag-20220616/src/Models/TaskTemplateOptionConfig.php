<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

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
        'options'       => 'Options',
        'preOptions'    => 'PreOptions',
        'rule'          => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultResult) {
            $res['DefaultResult'] = $this->defaultResult;
        }
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preOptions) {
            $res['PreOptions'] = $this->preOptions;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskTemplateOptionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? QuestionOption::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreOptions'])) {
            if (!empty($map['PreOptions'])) {
                $model->preOptions = $map['PreOptions'];
            }
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
