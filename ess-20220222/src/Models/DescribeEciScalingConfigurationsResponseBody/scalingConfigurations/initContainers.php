<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\initContainers\initContainerEnvironmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\initContainers\initContainerPorts;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\initContainers\initContainerVolumeMounts;
use AlibabaCloud\Tea\Model;

class initContainers extends Model
{
    /**
     * @description The number of vCPUs per init container.
     *
     * @example 0.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The number of GPUs per init container.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The image of the init container.
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
     * @description The container startup arguments.
     *
     * @var string[]
     */
    public $initContainerArgs;

    /**
     * @description The container startup commands.
     *
     * @var string[]
     */
    public $initContainerCommands;

    /**
     * @description The environment variables.
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
     * @description The volumes that are mounted to the init container.
     *
     * @var initContainerVolumeMounts[]
     */
    public $initContainerVolumeMounts;

    /**
     * @description The memory size per init container.
     *
     * @example 1.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the init container.
     *
     * @example test-init
     *
     * @var string
     */
    public $name;

    /**
     * @description The permissions that are granted to the processes in the init container. Valid values: NET_ADMIN and NET_RAW.
     *
     * >  To use NET_RAW, you must submit a ticket.
     * @var string[]
     */
    public $securityContextCapabilityAdds;

    /**
     * @description Indicates whether the root file system is read-only. Valid value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;

    /**
     * @description The ID of the user that runs the init container.
     *
     * @example 587
     *
     * @var string
     */
    public $securityContextRunAsUser;

    /**
     * @description The working directory.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'cpu'                                   => 'Cpu',
        'gpu'                                   => 'Gpu',
        'image'                                 => 'Image',
        'imagePullPolicy'                       => 'ImagePullPolicy',
        'initContainerArgs'                     => 'InitContainerArgs',
        'initContainerCommands'                 => 'InitContainerCommands',
        'initContainerEnvironmentVars'          => 'InitContainerEnvironmentVars',
        'initContainerPorts'                    => 'InitContainerPorts',
        'initContainerVolumeMounts'             => 'InitContainerVolumeMounts',
        'memory'                                => 'Memory',
        'name'                                  => 'Name',
        'securityContextCapabilityAdds'         => 'SecurityContextCapabilityAdds',
        'securityContextReadOnlyRootFilesystem' => 'SecurityContextReadOnlyRootFilesystem',
        'securityContextRunAsUser'              => 'SecurityContextRunAsUser',
        'workingDir'                            => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->initContainerArgs) {
            $res['InitContainerArgs'] = $this->initContainerArgs;
        }
        if (null !== $this->initContainerCommands) {
            $res['InitContainerCommands'] = $this->initContainerCommands;
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
        if (null !== $this->securityContextCapabilityAdds) {
            $res['SecurityContextCapabilityAdds'] = $this->securityContextCapabilityAdds;
        }
        if (null !== $this->securityContextReadOnlyRootFilesystem) {
            $res['SecurityContextReadOnlyRootFilesystem'] = $this->securityContextReadOnlyRootFilesystem;
        }
        if (null !== $this->securityContextRunAsUser) {
            $res['SecurityContextRunAsUser'] = $this->securityContextRunAsUser;
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
        if (isset($map['InitContainerArgs'])) {
            if (!empty($map['InitContainerArgs'])) {
                $model->initContainerArgs = $map['InitContainerArgs'];
            }
        }
        if (isset($map['InitContainerCommands'])) {
            if (!empty($map['InitContainerCommands'])) {
                $model->initContainerCommands = $map['InitContainerCommands'];
            }
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
        if (isset($map['SecurityContextCapabilityAdds'])) {
            if (!empty($map['SecurityContextCapabilityAdds'])) {
                $model->securityContextCapabilityAdds = $map['SecurityContextCapabilityAdds'];
            }
        }
        if (isset($map['SecurityContextReadOnlyRootFilesystem'])) {
            $model->securityContextReadOnlyRootFilesystem = $map['SecurityContextReadOnlyRootFilesystem'];
        }
        if (isset($map['SecurityContextRunAsUser'])) {
            $model->securityContextRunAsUser = $map['SecurityContextRunAsUser'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
