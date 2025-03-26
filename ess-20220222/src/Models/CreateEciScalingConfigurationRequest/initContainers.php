<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerEnvironmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerPorts;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerVolumeMounts;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\securityContext;

class initContainers extends Model
{
    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string[]
     */
    public $commands;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @var initContainerEnvironmentVars[]
     */
    public $initContainerEnvironmentVars;

    /**
     * @var initContainerPorts[]
     */
    public $initContainerPorts;

    /**
     * @var initContainerVolumeMounts[]
     */
    public $initContainerVolumeMounts;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'securityContext' => 'SecurityContext',
        'args' => 'Args',
        'commands' => 'Commands',
        'cpu' => 'Cpu',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'initContainerEnvironmentVars' => 'InitContainerEnvironmentVars',
        'initContainerPorts' => 'InitContainerPorts',
        'initContainerVolumeMounts' => 'InitContainerVolumeMounts',
        'memory' => 'Memory',
        'name' => 'Name',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->securityContext) {
            $this->securityContext->validate();
        }
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->initContainerEnvironmentVars)) {
            Model::validateArray($this->initContainerEnvironmentVars);
        }
        if (\is_array($this->initContainerPorts)) {
            Model::validateArray($this->initContainerPorts);
        }
        if (\is_array($this->initContainerVolumeMounts)) {
            Model::validateArray($this->initContainerVolumeMounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toArray($noStream) : $this->securityContext;
        }

        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['Args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['Args'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imagePullPolicy) {
            $res['ImagePullPolicy'] = $this->imagePullPolicy;
        }

        if (null !== $this->initContainerEnvironmentVars) {
            if (\is_array($this->initContainerEnvironmentVars)) {
                $res['InitContainerEnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->initContainerEnvironmentVars as $item1) {
                    $res['InitContainerEnvironmentVars'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainerPorts) {
            if (\is_array($this->initContainerPorts)) {
                $res['InitContainerPorts'] = [];
                $n1 = 0;
                foreach ($this->initContainerPorts as $item1) {
                    $res['InitContainerPorts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainerVolumeMounts) {
            if (\is_array($this->initContainerVolumeMounts)) {
                $res['InitContainerVolumeMounts'] = [];
                $n1 = 0;
                foreach ($this->initContainerVolumeMounts as $item1) {
                    $res['InitContainerVolumeMounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }

        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['Args'] as $item1) {
                    $model->args[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }

        if (isset($map['InitContainerEnvironmentVars'])) {
            if (!empty($map['InitContainerEnvironmentVars'])) {
                $model->initContainerEnvironmentVars = [];
                $n1 = 0;
                foreach ($map['InitContainerEnvironmentVars'] as $item1) {
                    $model->initContainerEnvironmentVars[$n1++] = initContainerEnvironmentVars::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainerPorts'])) {
            if (!empty($map['InitContainerPorts'])) {
                $model->initContainerPorts = [];
                $n1 = 0;
                foreach ($map['InitContainerPorts'] as $item1) {
                    $model->initContainerPorts[$n1++] = initContainerPorts::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainerVolumeMounts'])) {
            if (!empty($map['InitContainerVolumeMounts'])) {
                $model->initContainerVolumeMounts = [];
                $n1 = 0;
                foreach ($map['InitContainerVolumeMounts'] as $item1) {
                    $model->initContainerVolumeMounts[$n1++] = initContainerVolumeMounts::fromMap($item1);
                }
            }
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
