<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\livenessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\readinessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\securityContext;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\volumeMounts;

class containers extends Model
{
    /**
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @var readinessProbe
     */
    public $readinessProbe;

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
     * @var environmentVars[]
     */
    public $environmentVars;

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
    public $lifecyclePostStartHandlerExecs;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @var string[]
     */
    public $lifecyclePreStopHandlerExecs;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var bool
     */
    public $stdin;

    /**
     * @var bool
     */
    public $stdinOnce;

    /**
     * @var bool
     */
    public $tty;

    /**
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'livenessProbe' => 'LivenessProbe',
        'readinessProbe' => 'ReadinessProbe',
        'securityContext' => 'SecurityContext',
        'args' => 'Args',
        'commands' => 'Commands',
        'cpu' => 'Cpu',
        'environmentVars' => 'EnvironmentVars',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'lifecyclePostStartHandlerExecs' => 'LifecyclePostStartHandlerExecs',
        'lifecyclePostStartHandlerHttpGetHost' => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetPath' => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetPort' => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetScheme' => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerTcpSocketHost' => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort' => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerExecs' => 'LifecyclePreStopHandlerExecs',
        'lifecyclePreStopHandlerHttpGetHost' => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetPath' => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetPort' => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetScheme' => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerTcpSocketHost' => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort' => 'LifecyclePreStopHandlerTcpSocketPort',
        'memory' => 'Memory',
        'name' => 'Name',
        'ports' => 'Ports',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'volumeMounts' => 'VolumeMounts',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->livenessProbe) {
            $this->livenessProbe->validate();
        }
        if (null !== $this->readinessProbe) {
            $this->readinessProbe->validate();
        }
        if (null !== $this->securityContext) {
            $this->securityContext->validate();
        }
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->environmentVars)) {
            Model::validateArray($this->environmentVars);
        }
        if (\is_array($this->lifecyclePostStartHandlerExecs)) {
            Model::validateArray($this->lifecyclePostStartHandlerExecs);
        }
        if (\is_array($this->lifecyclePreStopHandlerExecs)) {
            Model::validateArray($this->lifecyclePreStopHandlerExecs);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->volumeMounts)) {
            Model::validateArray($this->volumeMounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toArray($noStream) : $this->livenessProbe;
        }

        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toArray($noStream) : $this->readinessProbe;
        }

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

        if (null !== $this->environmentVars) {
            if (\is_array($this->environmentVars)) {
                $res['EnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->environmentVars as $item1) {
                    $res['EnvironmentVars'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->lifecyclePostStartHandlerExecs) {
            if (\is_array($this->lifecyclePostStartHandlerExecs)) {
                $res['LifecyclePostStartHandlerExecs'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePostStartHandlerExecs as $item1) {
                    $res['LifecyclePostStartHandlerExecs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetHost) {
            $res['LifecyclePostStartHandlerHttpGetHost'] = $this->lifecyclePostStartHandlerHttpGetHost;
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetPath) {
            $res['LifecyclePostStartHandlerHttpGetPath'] = $this->lifecyclePostStartHandlerHttpGetPath;
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetPort) {
            $res['LifecyclePostStartHandlerHttpGetPort'] = $this->lifecyclePostStartHandlerHttpGetPort;
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetScheme) {
            $res['LifecyclePostStartHandlerHttpGetScheme'] = $this->lifecyclePostStartHandlerHttpGetScheme;
        }

        if (null !== $this->lifecyclePostStartHandlerTcpSocketHost) {
            $res['LifecyclePostStartHandlerTcpSocketHost'] = $this->lifecyclePostStartHandlerTcpSocketHost;
        }

        if (null !== $this->lifecyclePostStartHandlerTcpSocketPort) {
            $res['LifecyclePostStartHandlerTcpSocketPort'] = $this->lifecyclePostStartHandlerTcpSocketPort;
        }

        if (null !== $this->lifecyclePreStopHandlerExecs) {
            if (\is_array($this->lifecyclePreStopHandlerExecs)) {
                $res['LifecyclePreStopHandlerExecs'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePreStopHandlerExecs as $item1) {
                    $res['LifecyclePreStopHandlerExecs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetHost) {
            $res['LifecyclePreStopHandlerHttpGetHost'] = $this->lifecyclePreStopHandlerHttpGetHost;
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetPath) {
            $res['LifecyclePreStopHandlerHttpGetPath'] = $this->lifecyclePreStopHandlerHttpGetPath;
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetPort) {
            $res['LifecyclePreStopHandlerHttpGetPort'] = $this->lifecyclePreStopHandlerHttpGetPort;
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetScheme) {
            $res['LifecyclePreStopHandlerHttpGetScheme'] = $this->lifecyclePreStopHandlerHttpGetScheme;
        }

        if (null !== $this->lifecyclePreStopHandlerTcpSocketHost) {
            $res['LifecyclePreStopHandlerTcpSocketHost'] = $this->lifecyclePreStopHandlerTcpSocketHost;
        }

        if (null !== $this->lifecyclePreStopHandlerTcpSocketPort) {
            $res['LifecyclePreStopHandlerTcpSocketPort'] = $this->lifecyclePreStopHandlerTcpSocketPort;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }

        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
        }

        if (null !== $this->tty) {
            $res['Tty'] = $this->tty;
        }

        if (null !== $this->volumeMounts) {
            if (\is_array($this->volumeMounts)) {
                $res['VolumeMounts'] = [];
                $n1 = 0;
                foreach ($this->volumeMounts as $item1) {
                    $res['VolumeMounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
        }

        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }

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

        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n1 = 0;
                foreach ($map['EnvironmentVars'] as $item1) {
                    $model->environmentVars[$n1++] = environmentVars::fromMap($item1);
                }
            }
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

        if (isset($map['LifecyclePostStartHandlerExecs'])) {
            if (!empty($map['LifecyclePostStartHandlerExecs'])) {
                $model->lifecyclePostStartHandlerExecs = [];
                $n1 = 0;
                foreach ($map['LifecyclePostStartHandlerExecs'] as $item1) {
                    $model->lifecyclePostStartHandlerExecs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetHost'])) {
            $model->lifecyclePostStartHandlerHttpGetHost = $map['LifecyclePostStartHandlerHttpGetHost'];
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetPath'])) {
            $model->lifecyclePostStartHandlerHttpGetPath = $map['LifecyclePostStartHandlerHttpGetPath'];
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetPort'])) {
            $model->lifecyclePostStartHandlerHttpGetPort = $map['LifecyclePostStartHandlerHttpGetPort'];
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetScheme'])) {
            $model->lifecyclePostStartHandlerHttpGetScheme = $map['LifecyclePostStartHandlerHttpGetScheme'];
        }

        if (isset($map['LifecyclePostStartHandlerTcpSocketHost'])) {
            $model->lifecyclePostStartHandlerTcpSocketHost = $map['LifecyclePostStartHandlerTcpSocketHost'];
        }

        if (isset($map['LifecyclePostStartHandlerTcpSocketPort'])) {
            $model->lifecyclePostStartHandlerTcpSocketPort = $map['LifecyclePostStartHandlerTcpSocketPort'];
        }

        if (isset($map['LifecyclePreStopHandlerExecs'])) {
            if (!empty($map['LifecyclePreStopHandlerExecs'])) {
                $model->lifecyclePreStopHandlerExecs = [];
                $n1 = 0;
                foreach ($map['LifecyclePreStopHandlerExecs'] as $item1) {
                    $model->lifecyclePreStopHandlerExecs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetHost'])) {
            $model->lifecyclePreStopHandlerHttpGetHost = $map['LifecyclePreStopHandlerHttpGetHost'];
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetPath'])) {
            $model->lifecyclePreStopHandlerHttpGetPath = $map['LifecyclePreStopHandlerHttpGetPath'];
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetPort'])) {
            $model->lifecyclePreStopHandlerHttpGetPort = $map['LifecyclePreStopHandlerHttpGetPort'];
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetScheme'])) {
            $model->lifecyclePreStopHandlerHttpGetScheme = $map['LifecyclePreStopHandlerHttpGetScheme'];
        }

        if (isset($map['LifecyclePreStopHandlerTcpSocketHost'])) {
            $model->lifecyclePreStopHandlerTcpSocketHost = $map['LifecyclePreStopHandlerTcpSocketHost'];
        }

        if (isset($map['LifecyclePreStopHandlerTcpSocketPort'])) {
            $model->lifecyclePreStopHandlerTcpSocketPort = $map['LifecyclePreStopHandlerTcpSocketPort'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1++] = ports::fromMap($item1);
                }
            }
        }

        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }

        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
        }

        if (isset($map['Tty'])) {
            $model->tty = $map['Tty'];
        }

        if (isset($map['VolumeMounts'])) {
            if (!empty($map['VolumeMounts'])) {
                $model->volumeMounts = [];
                $n1 = 0;
                foreach ($map['VolumeMounts'] as $item1) {
                    $model->volumeMounts[$n1++] = volumeMounts::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
