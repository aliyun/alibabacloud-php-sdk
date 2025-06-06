<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ToolsetStatus extends Model
{
    /**
     * @var int
     */
    public $observedGeneration;

    /**
     * @var string
     */
    public $observedTime;

    /**
     * @var mixed[]
     */
    public $outputs;

    /**
     * @var string
     */
    public $phase;
    protected $_name = [
        'observedGeneration' => 'observedGeneration',
        'observedTime' => 'observedTime',
        'outputs' => 'outputs',
        'phase' => 'phase',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }

        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                foreach ($this->outputs as $key1 => $value1) {
                    $res['outputs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
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
        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }

        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                foreach ($map['outputs'] as $key1 => $value1) {
                    $model->outputs[$key1] = $value1;
                }
            }
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        return $model;
    }
}
