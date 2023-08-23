<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerEnvironmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerPorts;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\initContainerVolumeMounts;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers\securityContext;
use AlibabaCloud\Tea\Model;

class initContainers extends Model
{
    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description The arguments that correspond to the startup commands of the container. You can specify up to 10 arguments.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The list of commands that you want to run to start the container.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The number of vCPUs that you want to allocate to the container.
     *
     * @example 0.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The number of GPUs that you want to allocate to the container.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The container image.
     *
     * @example nginx
     *
     * @var string
     */
    public $image;

    /**
     * @description The image pulling policy.
     *
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The environment variables of the init container.
     *
     * @var initContainerEnvironmentVars[]
     */
    public $initContainerEnvironmentVars;

    /**
     * @description The ports of the init container.
     *
     * @var initContainerPorts[]
     */
    public $initContainerPorts;

    /**
     * @description Information about the volume mounts of the init container.
     *
     * @var initContainerVolumeMounts[]
     */
    public $initContainerVolumeMounts;

    /**
     * @description The size of the memory. Unit: GiB.
     *
     * @example 1.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the container.
     *
     * @example test-init
     *
     * @var string
     */
    public $name;

    /**
     * @description The working directory.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'securityContext'              => 'SecurityContext',
        'args'                         => 'Args',
        'commands'                     => 'Commands',
        'cpu'                          => 'Cpu',
        'gpu'                          => 'Gpu',
        'image'                        => 'Image',
        'imagePullPolicy'              => 'ImagePullPolicy',
        'initContainerEnvironmentVars' => 'InitContainerEnvironmentVars',
        'initContainerPorts'           => 'InitContainerPorts',
        'initContainerVolumeMounts'    => 'InitContainerVolumeMounts',
        'memory'                       => 'Memory',
        'name'                         => 'Name',
        'workingDir'                   => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
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
            $res['InitContainerEnvironmentVars'] = [];
            if (null !== $this->initContainerEnvironmentVars && \is_array($this->initContainerEnvironmentVars)) {
                $n = 0;
                foreach ($this->initContainerEnvironmentVars as $item) {
                    $res['InitContainerEnvironmentVars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->initContainerPorts) {
            $res['InitContainerPorts'] = [];
            if (null !== $this->initContainerPorts && \is_array($this->initContainerPorts)) {
                $n = 0;
                foreach ($this->initContainerPorts as $item) {
                    $res['InitContainerPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->initContainerVolumeMounts) {
            $res['InitContainerVolumeMounts'] = [];
            if (null !== $this->initContainerVolumeMounts && \is_array($this->initContainerVolumeMounts)) {
                $n = 0;
                foreach ($this->initContainerVolumeMounts as $item) {
                    $res['InitContainerVolumeMounts'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return initContainers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = $map['Args'];
            }
        }
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = $map['Commands'];
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
                $n                                   = 0;
                foreach ($map['InitContainerEnvironmentVars'] as $item) {
                    $model->initContainerEnvironmentVars[$n++] = null !== $item ? initContainerEnvironmentVars::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainerPorts'])) {
            if (!empty($map['InitContainerPorts'])) {
                $model->initContainerPorts = [];
                $n                         = 0;
                foreach ($map['InitContainerPorts'] as $item) {
                    $model->initContainerPorts[$n++] = null !== $item ? initContainerPorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainerVolumeMounts'])) {
            if (!empty($map['InitContainerVolumeMounts'])) {
                $model->initContainerVolumeMounts = [];
                $n                                = 0;
                foreach ($map['InitContainerVolumeMounts'] as $item) {
                    $model->initContainerVolumeMounts[$n++] = null !== $item ? initContainerVolumeMounts::fromMap($item) : $item;
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
