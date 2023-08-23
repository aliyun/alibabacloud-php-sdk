<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\containers\volumeMounts;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description The commands that are run in the container when you use the CLI to perform probes.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The commands that are run in the container when you use the CLI to perform probes.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The minimum number of consecutive failures for a probe to be considered failed after having been successful.
     *
     * Default value: 3.
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The name of the environment variable.
     *
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @description Indicates whether the container allocates buffer resources to standard input streams when the container runs. If you do not specify this parameter, an end-of-file (EOF) error may occur. Default value: false.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The protocol type of HTTP GET requests when you use HTTP requests to perform probes. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example mysql
     *
     * @var string
     */
    public $image;

    /**
     * @description The number of vCPUs that are allocated to the container.
     *
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The arguments that are passed to the container startup commands. You can specify up to 10 arguments.
     *
     * @var string[]
     */
    public $livenessProbeExecCommands;

    /**
     * @description The exposed ports and protocols of the container.
     *
     * @example 3
     *
     * @var int
     */
    public $livenessProbeFailureThreshold;

    /**
     * @description The port number of TcpSocket.
     *
     * @example /usr/nginx/
     *
     * @var string
     */
    public $livenessProbeHttpGetPath;

    /**
     * @description The number of seconds between the time when the startup of the container ends and the time when the probe starts.
     *
     * @example 80
     *
     * @var int
     */
    public $livenessProbeHttpGetPort;

    /**
     * @description Indicates whether interaction is enabled. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example HTTP
     *
     * @var string
     */
    public $livenessProbeHttpGetScheme;

    /**
     * @description The image pulling policy. Valid values:
     *
     *   Always: Image pulling is performed each time.
     *   IfNotPresent: Image pulling is performed only if on-premises images are unavailable. On-premises images are preferentially used. If no on-premises images are available, image pulling is performed.
     *   Never: On-premises images are always used. Image pulling is not performed.
     *
     * @example 10
     *
     * @var int
     */
    public $livenessProbeInitialDelaySeconds;

    /**
     * @description The protocol type of HTTP GET requests when you use HTTP requests to perform probes. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example 5
     *
     * @var int
     */
    public $livenessProbePeriodSeconds;

    /**
     * @description The user ID (UID) that is used to run the entry point of the container process.
     *
     * @example 1
     *
     * @var int
     */
    public $livenessProbeSuccessThreshold;

    /**
     * @description The working directory of the container.
     *
     * @example 80
     *
     * @var int
     */
    public $livenessProbeTcpSocketPort;

    /**
     * @description The minimum number of consecutive failures for a probe to be considered failed after having been successful.
     *
     * Default value: 3.
     * @example 10
     *
     * @var int
     */
    public $livenessProbeTimeoutSeconds;

    /**
     * @description Indicates whether the root file system is set to the read-only mode. The only valid value is true.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The path to which the system sends an HTTP GET request for a probe.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The port number. Valid values: 1 to 65535.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description The permissions granted to processes in the container. Valid values: NET_ADMIN and NET_RAW.
     *
     * > To use NET_RAW, you need to submit a ticket.
     * @var string[]
     */
    public $readinessProbeExecCommands;

    /**
     * @description The exposed ports and protocols of the container.
     *
     * @example 3
     *
     * @var int
     */
    public $readinessProbeFailureThreshold;

    /**
     * @description The interval at which probes are performed. Default value: 10. Minimum value: 1. Unit: seconds.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $readinessProbeHttpGetPath;

    /**
     * @description The timeout period of a probe. Default value: 1. Minimum value: 1. Unit: seconds.
     *
     * @example /usr/nginx/
     *
     * @var int
     */
    public $readinessProbeHttpGetPort;

    /**
     * @description The minimum number of consecutive successes for a probe to be considered successful after having failed. Default value: 1. Valid value: 1.
     *
     * @example HTTP
     *
     * @var string
     */
    public $readinessProbeHttpGetScheme;

    /**
     * @description The memory size of the container.
     *
     * @example 5
     *
     * @var int
     */
    public $readinessProbeInitialDelaySeconds;

    /**
     * @description Indicates whether standard input streams are disconnected after a client is disconnected. If Stdin is set to true, standard input streams remain connected during multiple sessions.
     *
     * If StdinOnce is set to true, standard input streams are connected after the container is started and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected and remain in the disconnected state until the container is started again.
     * @example 1
     *
     * @var int
     */
    public $readinessProbePeriodSeconds;

    /**
     * @description The port number of TcpSocket.
     *
     * @example 1
     *
     * @var int
     */
    public $readinessProbeSuccessThreshold;

    /**
     * @description The path to which the system sends an HTTP GET request for a probe.
     *
     * @example 8888
     *
     * @var int
     */
    public $readinessProbeTcpSocketPort;

    /**
     * @description The number of seconds between the time when the startup of the container ends and the time when the probe starts.
     *
     * @example 5
     *
     * @var int
     */
    public $readinessProbeTimeoutSeconds;

    /**
     * @description The init containers.
     *
     * @var string[]
     */
    public $securityContextCapabilityAdds;

    /**
     * @description The image of the container.
     *
     * @example true
     *
     * @var bool
     */
    public $securityContextReadOnlyRootFilesystem;

    /**
     * @description The interval at which probes are performed. Default value: 10. Minimum value: 1. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $securityContextRunAsUser;

    /**
     * @description The name of the container.
     *
     * @example true
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description The timeout period of a probe. Default value: 1. Minimum value: 1. Unit: seconds.
     *
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description The number of GPUs.
     *
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description Indicates whether the volume is read-only.
     *
     * Default value: false.
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @description The port to which HTTP GET requests were sent.
     *
     * @example /usr/local/nginx
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args'                                  => 'Args',
        'commands'                              => 'Commands',
        'cpu'                                   => 'Cpu',
        'environmentVars'                       => 'EnvironmentVars',
        'gpu'                                   => 'Gpu',
        'image'                                 => 'Image',
        'imagePullPolicy'                       => 'ImagePullPolicy',
        'livenessProbeExecCommands'             => 'LivenessProbeExecCommands',
        'livenessProbeFailureThreshold'         => 'LivenessProbeFailureThreshold',
        'livenessProbeHttpGetPath'              => 'LivenessProbeHttpGetPath',
        'livenessProbeHttpGetPort'              => 'LivenessProbeHttpGetPort',
        'livenessProbeHttpGetScheme'            => 'LivenessProbeHttpGetScheme',
        'livenessProbeInitialDelaySeconds'      => 'LivenessProbeInitialDelaySeconds',
        'livenessProbePeriodSeconds'            => 'LivenessProbePeriodSeconds',
        'livenessProbeSuccessThreshold'         => 'LivenessProbeSuccessThreshold',
        'livenessProbeTcpSocketPort'            => 'LivenessProbeTcpSocketPort',
        'livenessProbeTimeoutSeconds'           => 'LivenessProbeTimeoutSeconds',
        'memory'                                => 'Memory',
        'name'                                  => 'Name',
        'ports'                                 => 'Ports',
        'readinessProbeExecCommands'            => 'ReadinessProbeExecCommands',
        'readinessProbeFailureThreshold'        => 'ReadinessProbeFailureThreshold',
        'readinessProbeHttpGetPath'             => 'ReadinessProbeHttpGetPath',
        'readinessProbeHttpGetPort'             => 'ReadinessProbeHttpGetPort',
        'readinessProbeHttpGetScheme'           => 'ReadinessProbeHttpGetScheme',
        'readinessProbeInitialDelaySeconds'     => 'ReadinessProbeInitialDelaySeconds',
        'readinessProbePeriodSeconds'           => 'ReadinessProbePeriodSeconds',
        'readinessProbeSuccessThreshold'        => 'ReadinessProbeSuccessThreshold',
        'readinessProbeTcpSocketPort'           => 'ReadinessProbeTcpSocketPort',
        'readinessProbeTimeoutSeconds'          => 'ReadinessProbeTimeoutSeconds',
        'securityContextCapabilityAdds'         => 'SecurityContextCapabilityAdds',
        'securityContextReadOnlyRootFilesystem' => 'SecurityContextReadOnlyRootFilesystem',
        'securityContextRunAsUser'              => 'SecurityContextRunAsUser',
        'stdin'                                 => 'Stdin',
        'stdinOnce'                             => 'StdinOnce',
        'tty'                                   => 'Tty',
        'volumeMounts'                          => 'VolumeMounts',
        'workingDir'                            => 'WorkingDir',
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
