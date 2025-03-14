<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaConvertJobResponseBody\job;

use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertInput;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputGroup;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The inputs of the transcoding task.
     *
     * @var MediaConvertInput[]
     */
    public $inputs;

    /**
     * @description The output group configurations.
     *
     * @var MediaConvertOutputGroup[]
     */
    public $outputGroups;

    /**
     * @description The output configurations.
     *
     * @var MediaConvertOutput[]
     */
    public $outputs;
    protected $_name = [
        'inputs' => 'Inputs',
        'outputGroups' => 'OutputGroups',
        'outputs' => 'Outputs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputs) {
            $res['Inputs'] = [];
            if (null !== $this->inputs && \is_array($this->inputs)) {
                $n = 0;
                foreach ($this->inputs as $item) {
                    $res['Inputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputGroups) {
            $res['OutputGroups'] = [];
            if (null !== $this->outputGroups && \is_array($this->outputGroups)) {
                $n = 0;
                foreach ($this->outputGroups as $item) {
                    $res['OutputGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n = 0;
                foreach ($map['Inputs'] as $item) {
                    $model->inputs[$n++] = null !== $item ? MediaConvertInput::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputGroups'])) {
            if (!empty($map['OutputGroups'])) {
                $model->outputGroups = [];
                $n = 0;
                foreach ($map['OutputGroups'] as $item) {
                    $model->outputGroups[$n++] = null !== $item ? MediaConvertOutputGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? MediaConvertOutput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
