<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\environmentVar;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\volumeMount;

class container extends Model
{
    /**
     * @var string[]
     */
    public $arg;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var environmentVar[]
     */
    public $environmentVar;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $image;

    /**
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'arg' => 'Arg',
        'command' => 'Command',
        'environmentVar' => 'EnvironmentVar',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'volumeMount' => 'VolumeMount',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (\is_array($this->arg)) {
            Model::validateArray($this->arg);
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->environmentVar)) {
            Model::validateArray($this->environmentVar);
        }
        if (\is_array($this->volumeMount)) {
            Model::validateArray($this->volumeMount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arg) {
            if (\is_array($this->arg)) {
                $res['Arg'] = [];
                $n1 = 0;
                foreach ($this->arg as $item1) {
                    $res['Arg'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->environmentVar) {
            if (\is_array($this->environmentVar)) {
                $res['EnvironmentVar'] = [];
                $n1 = 0;
                foreach ($this->environmentVar as $item1) {
                    $res['EnvironmentVar'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->volumeMount) {
            if (\is_array($this->volumeMount)) {
                $res['VolumeMount'] = [];
                $n1 = 0;
                foreach ($this->volumeMount as $item1) {
                    $res['VolumeMount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
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
        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = [];
                $n1 = 0;
                foreach ($map['Arg'] as $item1) {
                    $model->arg[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n1 = 0;
                foreach ($map['EnvironmentVar'] as $item1) {
                    $model->environmentVar[$n1++] = environmentVar::fromMap($item1);
                }
            }
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['VolumeMount'])) {
            if (!empty($map['VolumeMount'])) {
                $model->volumeMount = [];
                $n1 = 0;
                foreach ($map['VolumeMount'] as $item1) {
                    $model->volumeMount[$n1++] = volumeMount::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
