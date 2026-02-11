<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor\container\environmentVars;

class container extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $arg;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageRegistryOptions;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'appId' => 'AppId',
        'arg' => 'Arg',
        'command' => 'Command',
        'environmentVars' => 'EnvironmentVars',
        'image' => 'Image',
        'imageRegistryOptions' => 'ImageRegistryOptions',
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
        if (\is_array($this->environmentVars)) {
            Model::validateArray($this->environmentVars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->arg) {
            if (\is_array($this->arg)) {
                $res['Arg'] = [];
                $n1 = 0;
                foreach ($this->arg as $item1) {
                    $res['Arg'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->environmentVars) {
            if (\is_array($this->environmentVars)) {
                $res['EnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->environmentVars as $item1) {
                    $res['EnvironmentVars'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imageRegistryOptions) {
            $res['ImageRegistryOptions'] = $this->imageRegistryOptions;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = [];
                $n1 = 0;
                foreach ($map['Arg'] as $item1) {
                    $model->arg[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n1 = 0;
                foreach ($map['EnvironmentVars'] as $item1) {
                    $model->environmentVars[$n1] = environmentVars::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['ImageRegistryOptions'])) {
            $model->imageRegistryOptions = $map['ImageRegistryOptions'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
