<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobResponseBody\job;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertInput;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertOutputGroup;

class config extends Model
{
    /**
     * @var MediaConvertInput[]
     */
    public $inputs;
    /**
     * @var MediaConvertOutputGroup[]
     */
    public $outputGroups;
    /**
     * @var MediaConvertOutput[]
     */
    public $outputs;
    protected $_name = [
        'inputs'       => 'Inputs',
        'outputGroups' => 'OutputGroups',
        'outputs'      => 'Outputs',
    ];

    public function validate()
    {
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (\is_array($this->outputGroups)) {
            Model::validateArray($this->outputGroups);
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['Inputs'] = [];
                $n1            = 0;
                foreach ($this->inputs as $item1) {
                    $res['Inputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputGroups) {
            if (\is_array($this->outputGroups)) {
                $res['OutputGroups'] = [];
                $n1                  = 0;
                foreach ($this->outputGroups as $item1) {
                    $res['OutputGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1             = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n1            = 0;
                foreach ($map['Inputs'] as $item1) {
                    $model->inputs[$n1++] = MediaConvertInput::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputGroups'])) {
            if (!empty($map['OutputGroups'])) {
                $model->outputGroups = [];
                $n1                  = 0;
                foreach ($map['OutputGroups'] as $item1) {
                    $model->outputGroups[$n1++] = MediaConvertOutputGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1             = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1++] = MediaConvertOutput::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
