<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\initContainers\initContainerEnvironmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\initContainers\initContainerPorts;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\initContainers\initContainerVolumeMounts;

class initContainers extends Model
{
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
     * @var string[]
     */
    public $initContainerArgs;
    /**
     * @var string[]
     */
    public $initContainerCommands;
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
     * @var string[]
     */
    public $securityContextCapabilityAdds;
    /**
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;
    /**
     * @var string
     */
    public $securityContextRunAsUser;
    /**
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
        if (\is_array($this->initContainerArgs)) {
            Model::validateArray($this->initContainerArgs);
        }
        if (\is_array($this->initContainerCommands)) {
            Model::validateArray($this->initContainerCommands);
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
        if (\is_array($this->securityContextCapabilityAdds)) {
            Model::validateArray($this->securityContextCapabilityAdds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->initContainerArgs)) {
                $res['InitContainerArgs'] = [];
                $n1                       = 0;
                foreach ($this->initContainerArgs as $item1) {
                    $res['InitContainerArgs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->initContainerCommands) {
            if (\is_array($this->initContainerCommands)) {
                $res['InitContainerCommands'] = [];
                $n1                           = 0;
                foreach ($this->initContainerCommands as $item1) {
                    $res['InitContainerCommands'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->initContainerEnvironmentVars) {
            if (\is_array($this->initContainerEnvironmentVars)) {
                $res['InitContainerEnvironmentVars'] = [];
                $n1                                  = 0;
                foreach ($this->initContainerEnvironmentVars as $item1) {
                    $res['InitContainerEnvironmentVars'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainerPorts) {
            if (\is_array($this->initContainerPorts)) {
                $res['InitContainerPorts'] = [];
                $n1                        = 0;
                foreach ($this->initContainerPorts as $item1) {
                    $res['InitContainerPorts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->initContainerVolumeMounts) {
            if (\is_array($this->initContainerVolumeMounts)) {
                $res['InitContainerVolumeMounts'] = [];
                $n1                               = 0;
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

        if (null !== $this->securityContextCapabilityAdds) {
            if (\is_array($this->securityContextCapabilityAdds)) {
                $res['SecurityContextCapabilityAdds'] = [];
                $n1                                   = 0;
                foreach ($this->securityContextCapabilityAdds as $item1) {
                    $res['SecurityContextCapabilityAdds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->initContainerArgs = [];
                $n1                       = 0;
                foreach ($map['InitContainerArgs'] as $item1) {
                    $model->initContainerArgs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InitContainerCommands'])) {
            if (!empty($map['InitContainerCommands'])) {
                $model->initContainerCommands = [];
                $n1                           = 0;
                foreach ($map['InitContainerCommands'] as $item1) {
                    $model->initContainerCommands[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InitContainerEnvironmentVars'])) {
            if (!empty($map['InitContainerEnvironmentVars'])) {
                $model->initContainerEnvironmentVars = [];
                $n1                                  = 0;
                foreach ($map['InitContainerEnvironmentVars'] as $item1) {
                    $model->initContainerEnvironmentVars[$n1++] = initContainerEnvironmentVars::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainerPorts'])) {
            if (!empty($map['InitContainerPorts'])) {
                $model->initContainerPorts = [];
                $n1                        = 0;
                foreach ($map['InitContainerPorts'] as $item1) {
                    $model->initContainerPorts[$n1++] = initContainerPorts::fromMap($item1);
                }
            }
        }

        if (isset($map['InitContainerVolumeMounts'])) {
            if (!empty($map['InitContainerVolumeMounts'])) {
                $model->initContainerVolumeMounts = [];
                $n1                               = 0;
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

        if (isset($map['SecurityContextCapabilityAdds'])) {
            if (!empty($map['SecurityContextCapabilityAdds'])) {
                $model->securityContextCapabilityAdds = [];
                $n1                                   = 0;
                foreach ($map['SecurityContextCapabilityAdds'] as $item1) {
                    $model->securityContextCapabilityAdds[$n1++] = $item1;
                }
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
