<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\volumeMounts;

class containers extends Model
{
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
     * @var string[]
     */
    public $livenessProbeExecCommands;

    /**
     * @var int
     */
    public $livenessProbeFailureThreshold;

    /**
     * @var string
     */
    public $livenessProbeHttpGetPath;

    /**
     * @var int
     */
    public $livenessProbeHttpGetPort;

    /**
     * @var string
     */
    public $livenessProbeHttpGetScheme;

    /**
     * @var int
     */
    public $livenessProbeInitialDelaySeconds;

    /**
     * @var int
     */
    public $livenessProbePeriodSeconds;

    /**
     * @var int
     */
    public $livenessProbeSuccessThreshold;

    /**
     * @var int
     */
    public $livenessProbeTcpSocketPort;

    /**
     * @var int
     */
    public $livenessProbeTimeoutSeconds;

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
     * @var string[]
     */
    public $readinessProbeExecCommands;

    /**
     * @var int
     */
    public $readinessProbeFailureThreshold;

    /**
     * @var string
     */
    public $readinessProbeHttpGetPath;

    /**
     * @var int
     */
    public $readinessProbeHttpGetPort;

    /**
     * @var string
     */
    public $readinessProbeHttpGetScheme;

    /**
     * @var int
     */
    public $readinessProbeInitialDelaySeconds;

    /**
     * @var int
     */
    public $readinessProbePeriodSeconds;

    /**
     * @var int
     */
    public $readinessProbeSuccessThreshold;

    /**
     * @var int
     */
    public $readinessProbeTcpSocketPort;

    /**
     * @var int
     */
    public $readinessProbeTimeoutSeconds;

    /**
     * @var string[]
     */
    public $securityContextCapabilityAdds;

    /**
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;

    /**
     * @var int
     */
    public $securityContextRunAsUser;

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
        'livenessProbeExecCommands' => 'LivenessProbeExecCommands',
        'livenessProbeFailureThreshold' => 'LivenessProbeFailureThreshold',
        'livenessProbeHttpGetPath' => 'LivenessProbeHttpGetPath',
        'livenessProbeHttpGetPort' => 'LivenessProbeHttpGetPort',
        'livenessProbeHttpGetScheme' => 'LivenessProbeHttpGetScheme',
        'livenessProbeInitialDelaySeconds' => 'LivenessProbeInitialDelaySeconds',
        'livenessProbePeriodSeconds' => 'LivenessProbePeriodSeconds',
        'livenessProbeSuccessThreshold' => 'LivenessProbeSuccessThreshold',
        'livenessProbeTcpSocketPort' => 'LivenessProbeTcpSocketPort',
        'livenessProbeTimeoutSeconds' => 'LivenessProbeTimeoutSeconds',
        'memory' => 'Memory',
        'name' => 'Name',
        'ports' => 'Ports',
        'readinessProbeExecCommands' => 'ReadinessProbeExecCommands',
        'readinessProbeFailureThreshold' => 'ReadinessProbeFailureThreshold',
        'readinessProbeHttpGetPath' => 'ReadinessProbeHttpGetPath',
        'readinessProbeHttpGetPort' => 'ReadinessProbeHttpGetPort',
        'readinessProbeHttpGetScheme' => 'ReadinessProbeHttpGetScheme',
        'readinessProbeInitialDelaySeconds' => 'ReadinessProbeInitialDelaySeconds',
        'readinessProbePeriodSeconds' => 'ReadinessProbePeriodSeconds',
        'readinessProbeSuccessThreshold' => 'ReadinessProbeSuccessThreshold',
        'readinessProbeTcpSocketPort' => 'ReadinessProbeTcpSocketPort',
        'readinessProbeTimeoutSeconds' => 'ReadinessProbeTimeoutSeconds',
        'securityContextCapabilityAdds' => 'SecurityContextCapabilityAdds',
        'securityContextReadOnlyRootFilesystem' => 'SecurityContextReadOnlyRootFilesystem',
        'securityContextRunAsUser' => 'SecurityContextRunAsUser',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'volumeMounts' => 'VolumeMounts',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
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
        if (\is_array($this->livenessProbeExecCommands)) {
            Model::validateArray($this->livenessProbeExecCommands);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->readinessProbeExecCommands)) {
            Model::validateArray($this->readinessProbeExecCommands);
        }
        if (\is_array($this->securityContextCapabilityAdds)) {
            Model::validateArray($this->securityContextCapabilityAdds);
        }
        if (\is_array($this->volumeMounts)) {
            Model::validateArray($this->volumeMounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->livenessProbeExecCommands) {
            if (\is_array($this->livenessProbeExecCommands)) {
                $res['LivenessProbeExecCommands'] = [];
                $n1 = 0;
                foreach ($this->livenessProbeExecCommands as $item1) {
                    $res['LivenessProbeExecCommands'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->livenessProbeFailureThreshold) {
            $res['LivenessProbeFailureThreshold'] = $this->livenessProbeFailureThreshold;
        }

        if (null !== $this->livenessProbeHttpGetPath) {
            $res['LivenessProbeHttpGetPath'] = $this->livenessProbeHttpGetPath;
        }

        if (null !== $this->livenessProbeHttpGetPort) {
            $res['LivenessProbeHttpGetPort'] = $this->livenessProbeHttpGetPort;
        }

        if (null !== $this->livenessProbeHttpGetScheme) {
            $res['LivenessProbeHttpGetScheme'] = $this->livenessProbeHttpGetScheme;
        }

        if (null !== $this->livenessProbeInitialDelaySeconds) {
            $res['LivenessProbeInitialDelaySeconds'] = $this->livenessProbeInitialDelaySeconds;
        }

        if (null !== $this->livenessProbePeriodSeconds) {
            $res['LivenessProbePeriodSeconds'] = $this->livenessProbePeriodSeconds;
        }

        if (null !== $this->livenessProbeSuccessThreshold) {
            $res['LivenessProbeSuccessThreshold'] = $this->livenessProbeSuccessThreshold;
        }

        if (null !== $this->livenessProbeTcpSocketPort) {
            $res['LivenessProbeTcpSocketPort'] = $this->livenessProbeTcpSocketPort;
        }

        if (null !== $this->livenessProbeTimeoutSeconds) {
            $res['LivenessProbeTimeoutSeconds'] = $this->livenessProbeTimeoutSeconds;
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

        if (null !== $this->readinessProbeExecCommands) {
            if (\is_array($this->readinessProbeExecCommands)) {
                $res['ReadinessProbeExecCommands'] = [];
                $n1 = 0;
                foreach ($this->readinessProbeExecCommands as $item1) {
                    $res['ReadinessProbeExecCommands'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->readinessProbeFailureThreshold) {
            $res['ReadinessProbeFailureThreshold'] = $this->readinessProbeFailureThreshold;
        }

        if (null !== $this->readinessProbeHttpGetPath) {
            $res['ReadinessProbeHttpGetPath'] = $this->readinessProbeHttpGetPath;
        }

        if (null !== $this->readinessProbeHttpGetPort) {
            $res['ReadinessProbeHttpGetPort'] = $this->readinessProbeHttpGetPort;
        }

        if (null !== $this->readinessProbeHttpGetScheme) {
            $res['ReadinessProbeHttpGetScheme'] = $this->readinessProbeHttpGetScheme;
        }

        if (null !== $this->readinessProbeInitialDelaySeconds) {
            $res['ReadinessProbeInitialDelaySeconds'] = $this->readinessProbeInitialDelaySeconds;
        }

        if (null !== $this->readinessProbePeriodSeconds) {
            $res['ReadinessProbePeriodSeconds'] = $this->readinessProbePeriodSeconds;
        }

        if (null !== $this->readinessProbeSuccessThreshold) {
            $res['ReadinessProbeSuccessThreshold'] = $this->readinessProbeSuccessThreshold;
        }

        if (null !== $this->readinessProbeTcpSocketPort) {
            $res['ReadinessProbeTcpSocketPort'] = $this->readinessProbeTcpSocketPort;
        }

        if (null !== $this->readinessProbeTimeoutSeconds) {
            $res['ReadinessProbeTimeoutSeconds'] = $this->readinessProbeTimeoutSeconds;
        }

        if (null !== $this->securityContextCapabilityAdds) {
            if (\is_array($this->securityContextCapabilityAdds)) {
                $res['SecurityContextCapabilityAdds'] = [];
                $n1 = 0;
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

        if (isset($map['LivenessProbeExecCommands'])) {
            if (!empty($map['LivenessProbeExecCommands'])) {
                $model->livenessProbeExecCommands = [];
                $n1 = 0;
                foreach ($map['LivenessProbeExecCommands'] as $item1) {
                    $model->livenessProbeExecCommands[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LivenessProbeFailureThreshold'])) {
            $model->livenessProbeFailureThreshold = $map['LivenessProbeFailureThreshold'];
        }

        if (isset($map['LivenessProbeHttpGetPath'])) {
            $model->livenessProbeHttpGetPath = $map['LivenessProbeHttpGetPath'];
        }

        if (isset($map['LivenessProbeHttpGetPort'])) {
            $model->livenessProbeHttpGetPort = $map['LivenessProbeHttpGetPort'];
        }

        if (isset($map['LivenessProbeHttpGetScheme'])) {
            $model->livenessProbeHttpGetScheme = $map['LivenessProbeHttpGetScheme'];
        }

        if (isset($map['LivenessProbeInitialDelaySeconds'])) {
            $model->livenessProbeInitialDelaySeconds = $map['LivenessProbeInitialDelaySeconds'];
        }

        if (isset($map['LivenessProbePeriodSeconds'])) {
            $model->livenessProbePeriodSeconds = $map['LivenessProbePeriodSeconds'];
        }

        if (isset($map['LivenessProbeSuccessThreshold'])) {
            $model->livenessProbeSuccessThreshold = $map['LivenessProbeSuccessThreshold'];
        }

        if (isset($map['LivenessProbeTcpSocketPort'])) {
            $model->livenessProbeTcpSocketPort = $map['LivenessProbeTcpSocketPort'];
        }

        if (isset($map['LivenessProbeTimeoutSeconds'])) {
            $model->livenessProbeTimeoutSeconds = $map['LivenessProbeTimeoutSeconds'];
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

        if (isset($map['ReadinessProbeExecCommands'])) {
            if (!empty($map['ReadinessProbeExecCommands'])) {
                $model->readinessProbeExecCommands = [];
                $n1 = 0;
                foreach ($map['ReadinessProbeExecCommands'] as $item1) {
                    $model->readinessProbeExecCommands[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ReadinessProbeFailureThreshold'])) {
            $model->readinessProbeFailureThreshold = $map['ReadinessProbeFailureThreshold'];
        }

        if (isset($map['ReadinessProbeHttpGetPath'])) {
            $model->readinessProbeHttpGetPath = $map['ReadinessProbeHttpGetPath'];
        }

        if (isset($map['ReadinessProbeHttpGetPort'])) {
            $model->readinessProbeHttpGetPort = $map['ReadinessProbeHttpGetPort'];
        }

        if (isset($map['ReadinessProbeHttpGetScheme'])) {
            $model->readinessProbeHttpGetScheme = $map['ReadinessProbeHttpGetScheme'];
        }

        if (isset($map['ReadinessProbeInitialDelaySeconds'])) {
            $model->readinessProbeInitialDelaySeconds = $map['ReadinessProbeInitialDelaySeconds'];
        }

        if (isset($map['ReadinessProbePeriodSeconds'])) {
            $model->readinessProbePeriodSeconds = $map['ReadinessProbePeriodSeconds'];
        }

        if (isset($map['ReadinessProbeSuccessThreshold'])) {
            $model->readinessProbeSuccessThreshold = $map['ReadinessProbeSuccessThreshold'];
        }

        if (isset($map['ReadinessProbeTcpSocketPort'])) {
            $model->readinessProbeTcpSocketPort = $map['ReadinessProbeTcpSocketPort'];
        }

        if (isset($map['ReadinessProbeTimeoutSeconds'])) {
            $model->readinessProbeTimeoutSeconds = $map['ReadinessProbeTimeoutSeconds'];
        }

        if (isset($map['SecurityContextCapabilityAdds'])) {
            if (!empty($map['SecurityContextCapabilityAdds'])) {
                $model->securityContextCapabilityAdds = [];
                $n1 = 0;
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
