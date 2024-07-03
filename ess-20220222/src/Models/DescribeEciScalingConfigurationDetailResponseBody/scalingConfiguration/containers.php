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
     * @description The arguments that are passed to the container startup commands.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The container startup commands.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The number of vCPUs that are allocated to the elastic container instance.
     *
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The environment variables.
     *
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @description The number of GPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The container image.
     *
     * @example registry-vpc.aliyuncs.com/eci_open/alpine:3.5
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
     * @description The commands that are run by using a CLI for configuring the postStart callback function within the container.
     *
     * @var string[]
     */
    public $lifecyclePostStartHandlerExecs;

    /**
     * @description The IP address of the host to the HTTP GET requests for configuring the postStart callback function are sent.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @description The path to the HTTP GET requests for configuring the postStart callback function are sent.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @description The port over which the HTTP GET requests for configuring the postStart callback function are sent.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP Get requests that are used for configuring the postStart callback function.
     *
     * @example HTTP
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @description The IP address of the host detected by the TCP sockets that are used for configuring the postStart callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @description The port detected by the TCP sockets that are used for configuring the postStart callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @description The commands that are run by using a CLI for configuring the preStop callback function within the container.
     *
     * @var string[]
     */
    public $lifecyclePreStopHandlerExecs;

    /**
     * @description The IP address of the host to which the HTTP GET requests for configuring the preStop callback function are sent.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @description The path to which the HTTP GET requests for configuring the preStop callback function are sent.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @description The port over which the HTTP GET requests for configuring the preStop callback function are sent.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP Get requests that are used for configuring the preStop callback function.
     *
     * @example HTTP
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @description The IP address of the host detected by the TCP sockets that are used for configuring the preStop callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @description The port detected by the TCP sockets that are used for configuring the preStop callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @description The commands that are run in the container when you use a CLI to perform liveness probes.
     *
     * @var string[]
     */
    public $livenessProbeExecCommands;

    /**
     * @description The minimum number of consecutive failures before a successful liveness probe is considered failed.
     *
     * Default value: 3.
     * @example 3
     *
     * @var int
     */
    public $livenessProbeFailureThreshold;

    /**
     * @description The path to which HTTP Get requests are sent when you use the HTTP requests to perform liveness probes.
     *
     * @example /usr/nginx/
     *
     * @var string
     */
    public $livenessProbeHttpGetPath;

    /**
     * @description The port detected by HTTP Get requests when you use the HTTP requests to perform liveness probes.
     *
     * @example 8080
     *
     * @var int
     */
    public $livenessProbeHttpGetPort;

    /**
     * @description The protocol type of HTTP GET requests when you use the HTTP requests to perform liveness probes. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTP
     *
     * @var string
     */
    public $livenessProbeHttpGetScheme;

    /**
     * @description The number of seconds that elapses from the startup of the container to the start time of a liveness probe.
     *
     * @example 10
     *
     * @var int
     */
    public $livenessProbeInitialDelaySeconds;

    /**
     * @description The interval at which liveness probes are performed. Unit: seconds. Default value: 10. Minimum value: 1.
     *
     * @example 5
     *
     * @var int
     */
    public $livenessProbePeriodSeconds;

    /**
     * @description The minimum number of consecutive successes before a failed liveness probe is considered successful. Default value: 1. Valid value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $livenessProbeSuccessThreshold;

    /**
     * @description The port detected by TCP sockets when you use the TCP sockets to perform liveness probes.
     *
     * @example 80
     *
     * @var int
     */
    public $livenessProbeTcpSocketPort;

    /**
     * @description The timeout period of a liveness probe. Default value: 1. Minimum value: 1. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $livenessProbeTimeoutSeconds;

    /**
     * @description The memory size.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The container name.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The exposed ports and protocols.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description The commands that are run in the container when you use a CLI to perform readiness probes.
     *
     * @var string[]
     */
    public $readinessProbeExecCommands;

    /**
     * @description The minimum number of consecutive failures before a successful readiness probe is considered failed.
     *
     * Default value: 3.
     * @example 3
     *
     * @var int
     */
    public $readinessProbeFailureThreshold;

    /**
     * @description The path to which HTTP Get requests are sent when you use the HTTP requests to perform readiness probes.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $readinessProbeHttpGetPath;

    /**
     * @description The path to which HTTP Get requests are sent when you use the HTTP Get requests to perform readiness probes.
     *
     * @example 80
     *
     * @var int
     */
    public $readinessProbeHttpGetPort;

    /**
     * @description The protocol type of HTTP GET requests when you use the HTTP requests to perform readiness probes. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTP
     *
     * @var string
     */
    public $readinessProbeHttpGetScheme;

    /**
     * @description The number of seconds that elapses from the startup of the container to the start time of a readiness probe.
     *
     * @example 5
     *
     * @var int
     */
    public $readinessProbeInitialDelaySeconds;

    /**
     * @description The interval at which readiness probes are performed. Unit: seconds. Default value: 10. Minimum value: 1.
     *
     * @example 5
     *
     * @var int
     */
    public $readinessProbePeriodSeconds;

    /**
     * @description The minimum number of consecutive successes before a failed readiness probe is considered successful. Default value: 1. Valid value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $readinessProbeSuccessThreshold;

    /**
     * @description The port detected by TCP sockets when you use the TCP sockets to perform readiness probes.
     *
     * @example 80
     *
     * @var int
     */
    public $readinessProbeTcpSocketPort;

    /**
     * @description The timeout period of a readiness probe. Default value: 1. Minimum value: 1. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $readinessProbeTimeoutSeconds;

    /**
     * @description The permissions that are granted to the processes in the container. Valid values: NET_ADMIN and NET_RAW.
     *
     * @var string[]
     */
    public $securityContextCapabilityAdds;

    /**
     * @description Indicates whether the root file system on which the container runs is read-only. Valid value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;

    /**
     * @description The ID of the user that runs the entry point of the container process.
     *
     * @example 1000
     *
     * @var int
     */
    public $securityContextRunAsUser;

    /**
     * @description Indicates whether the container allocates buffer resources to standard input streams when the container is running. If this parameter is not specified, an end-of-file (EOF) error may occur when standard input streams in the container are read. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Indicates whether standard input streams are disconnected after a client is disconnected. If Stdin is set to true, standard input streams remain connected among multiple sessions.
     *
     * If StdinOnce is set to true, standard input streams are connected after the container is started, and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected, and remain disconnected until the container restarts.
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Specifies whether to enable the Interaction feature. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $tty;

    /**
     * @description The volumes that are mounted to the container.
     *
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @description The working directory in the container.
     *
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
