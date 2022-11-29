<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class TemplateStatus extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $observedGeneration;

    /**
     * @var string
     */
    public $observedTime;

    /**
     * @var OutputValue[]
     */
    public $outputs;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var InputVariable[]
     */
    public $variables;
    protected $_name = [
        'message'            => 'message',
        'observedGeneration' => 'observedGeneration',
        'observedTime'       => 'observedTime',
        'outputs'            => 'outputs',
        'phase'              => 'phase',
        'variables'          => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }
        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }
        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }
        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? OutputValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? InputVariable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
