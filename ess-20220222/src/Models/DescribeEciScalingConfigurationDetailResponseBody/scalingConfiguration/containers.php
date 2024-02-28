<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\containers\volumeMounts;
use AlibabaCloud\Tea\Model;

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
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @example 2
     *
     * @var int
     */
    public $gpu;

    /**
     * @example registry-vpc.aliyuncs.com/eci_open/alpine:3.5
     *
     * @var string
     */
    public $image;

    /**
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @var string[]
     */
    public $lifecyclePostStartHandlerExecs;

    /**
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @var string[]
     */
    public $lifecyclePreStopHandlerExecs;

    /**
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @var string[]
     */
    public $livenessProbeExecCommands;

    /**
     * @example 3
     *
     * @var int
     */
    public $livenessProbeFailureThreshold;

    /**
     * @example /usr/nginx/
     *
     * @var string
     */
    public $livenessProbeHttpGetPath;

    /**
     * @example 8080
     *
     * @var int
     */
    public $livenessProbeHttpGetPort;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $livenessProbeHttpGetScheme;

    /**
     * @example 10
     *
     * @var int
     */
    public $livenessProbeInitialDelaySeconds;

    /**
     * @example 5
     *
     * @var int
     */
    public $livenessProbePeriodSeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $livenessProbeSuccessThreshold;

    /**
     * @example 80
     *
     * @var int
     */
    public $livenessProbeTcpSocketPort;

    /**
     * @example 10
     *
     * @var int
     */
    public $livenessProbeTimeoutSeconds;

    /**
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @example nginx
     *
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
     * @example 3
     *
     * @var int
     */
    public $readinessProbeFailureThreshold;

    /**
     * @example /usr/local
     *
     * @var string
     */
    public $readinessProbeHttpGetPath;

    /**
     * @example 80
     *
     * @var int
     */
    public $readinessProbeHttpGetPort;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $readinessProbeHttpGetScheme;

    /**
     * @example 5
     *
     * @var int
     */
    public $readinessProbeInitialDelaySeconds;

    /**
     * @example 5
     *
     * @var int
     */
    public $readinessProbePeriodSeconds;

    /**
     * @example 1
     *
     * @var int
     */
    public $readinessProbeSuccessThreshold;

    /**
     * @example 80
     *
     * @var int
     */
    public $readinessProbeTcpSocketPort;

    /**
     * @example 5
     *
     * @var int
     */
    public $readinessProbeTimeoutSeconds;

    /**
     * @var string[]
     */
    public $securityContextCapabilityAdds;

    /**
     * @example true
     *
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;

    /**
     * @example 1000
     *
     * @var int
     */
    public $securityContextRunAsUser;

    /**
     * @example true
     *
     * @var bool
     */
    public $stdin;

    /**
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @example true
     *
     * @var bool
     */
    public $tty;

    /**
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @example /usr/local/nginx
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args'                                   => 'Args',
        'commands'                               => 'Commands',
        'cpu'                                    => 'Cpu',
        'environmentVars'                        => 'EnvironmentVars',
        'gpu'                                    => 'Gpu',
        'image'                                  => 'Image',
        'imagePullPolicy'                        => 'ImagePullPolicy',
        'lifecyclePostStartHandlerExecs'         => 'LifecyclePostStartHandlerExecs',
        'lifecyclePostStartHandlerHttpGetHost'   => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetPath'   => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetPort'   => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetScheme' => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerTcpSocketHost' => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort' => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerExecs'           => 'LifecyclePreStopHandlerExecs',
        'lifecyclePreStopHandlerHttpGetHost'     => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetPath'     => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetPort'     => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetScheme'   => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerTcpSocketHost'   => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort'   => 'LifecyclePreStopHandlerTcpSocketPort',
        'livenessProbeExecCommands'              => 'LivenessProbeExecCommands',
        'livenessProbeFailureThreshold'          => 'LivenessProbeFailureThreshold',
        'livenessProbeHttpGetPath'               => 'LivenessProbeHttpGetPath',
        'livenessProbeHttpGetPort'               => 'LivenessProbeHttpGetPort',
        'livenessProbeHttpGetScheme'             => 'LivenessProbeHttpGetScheme',
        'livenessProbeInitialDelaySeconds'       => 'LivenessProbeInitialDelaySeconds',
        'livenessProbePeriodSeconds'             => 'LivenessProbePeriodSeconds',
        'livenessProbeSuccessThreshold'          => 'LivenessProbeSuccessThreshold',
        'livenessProbeTcpSocketPort'             => 'LivenessProbeTcpSocketPort',
        'livenessProbeTimeoutSeconds'            => 'LivenessProbeTimeoutSeconds',
        'memory'                                 => 'Memory',
        'name'                                   => 'Name',
        'ports'                                  => 'Ports',
        'readinessProbeExecCommands'             => 'ReadinessProbeExecCommands',
        'readinessProbeFailureThreshold'         => 'ReadinessProbeFailureThreshold',
        'readinessProbeHttpGetPath'              => 'ReadinessProbeHttpGetPath',
        'readinessProbeHttpGetPort'              => 'ReadinessProbeHttpGetPort',
        'readinessProbeHttpGetScheme'            => 'ReadinessProbeHttpGetScheme',
        'readinessProbeInitialDelaySeconds'      => 'ReadinessProbeInitialDelaySeconds',
        'readinessProbePeriodSeconds'            => 'ReadinessProbePeriodSeconds',
        'readinessProbeSuccessThreshold'         => 'ReadinessProbeSuccessThreshold',
        'readinessProbeTcpSocketPort'            => 'ReadinessProbeTcpSocketPort',
        'readinessProbeTimeoutSeconds'           => 'ReadinessProbeTimeoutSeconds',
        'securityContextCapabilityAdds'          => 'SecurityContextCapabilityAdds',
        'securityContextReadOnlyRootFilesystem'  => 'SecurityContextReadOnlyRootFilesystem',
        'securityContextRunAsUser'               => 'SecurityContextRunAsUser',
        'stdin'                                  => 'Stdin',
        'stdinOnce'                              => 'StdinOnce',
        'tty'                                    => 'Tty',
        'volumeMounts'                           => 'VolumeMounts',
        'workingDir'                             => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->environmentVars) {
            $res['EnvironmentVars'] = [];
            if (null !== $this->environmentVars && \is_array($this->environmentVars)) {
                $n = 0;
                foreach ($this->environmentVars as $item) {
                    $res['EnvironmentVars'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['LifecyclePostStartHandlerExecs'] = $this->lifecyclePostStartHandlerExecs;
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
            $res['LifecyclePreStopHandlerExecs'] = $this->lifecyclePreStopHandlerExecs;
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
            $res['LivenessProbeExecCommands'] = $this->livenessProbeExecCommands;
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
            $res['Ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readinessProbeExecCommands) {
            $res['ReadinessProbeExecCommands'] = $this->readinessProbeExecCommands;
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
            $res['SecurityContextCapabilityAdds'] = $this->securityContextCapabilityAdds;
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
            $res['VolumeMounts'] = [];
            if (null !== $this->volumeMounts && \is_array($this->volumeMounts)) {
                $n = 0;
                foreach ($this->volumeMounts as $item) {
                    $res['VolumeMounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n                      = 0;
                foreach ($map['EnvironmentVars'] as $item) {
                    $model->environmentVars[$n++] = null !== $item ? environmentVars::fromMap($item) : $item;
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
                $model->lifecyclePostStartHandlerExecs = $map['LifecyclePostStartHandlerExecs'];
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
                $model->lifecyclePreStopHandlerExecs = $map['LifecyclePreStopHandlerExecs'];
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
                $model->livenessProbeExecCommands = $map['LivenessProbeExecCommands'];
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
                $n            = 0;
                foreach ($map['Ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReadinessProbeExecCommands'])) {
            if (!empty($map['ReadinessProbeExecCommands'])) {
                $model->readinessProbeExecCommands = $map['ReadinessProbeExecCommands'];
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
                $model->securityContextCapabilityAdds = $map['SecurityContextCapabilityAdds'];
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
                $n                   = 0;
                foreach ($map['VolumeMounts'] as $item) {
                    $model->volumeMounts[$n++] = null !== $item ? volumeMounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
