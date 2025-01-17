<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobRequest\inputs;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobRequest\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobRequest\scheduleConfig;

class SubmitPackageJobRequest extends Model
{
    /**
     * @var inputs[]
     */
    public $inputs;
    /**
     * @var string
     */
    public $name;
    /**
     * @var output
     */
    public $output;
    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'inputs'         => 'Inputs',
        'name'           => 'Name',
        'output'         => 'Output',
        'scheduleConfig' => 'ScheduleConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
                    $model->inputs[$n1++] = inputs::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
