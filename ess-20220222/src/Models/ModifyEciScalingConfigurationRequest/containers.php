<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\livenessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\readinessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\securityContext;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\volumeMounts;
use AlibabaCloud\Tea\Model;

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
     * @description The container startup arguments. You can specify up to 10 arguments.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The command that you want to run by using the CLI for liveness probing within the container.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The number of vCPUs that you want to allocate to the container.
     *
     * @example 0.25
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
     * @description The number of GPUs that you want to allocate to the container.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The image of the container.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:latest
     *
     * @var string
     */
    public $image;

    /**
     * @description The image pulling policy. Valid values:
     *
     *   Always: Each time instances are created, image pulling is performed.
     *   IfNotPresent: Image pulling is performed as needed. On-premises images are preferentially used. If no on-premises images are available, image pulling is performed.
     *   Never: On-premises images are always used. Image pulling is not performed.
     *
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The commands that you want to run by using the CLI for configuring the postStart callback function within the container.
     *
     * @var string[]
     */
    public $lifecyclePostStartHandlerExecs;

    /**
     * @description The IP address of the host to which you want to send the HTTP GET requests for configuring the postStart callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @description The path to which you want to send the HTTP GET requests for configuring the postStart callback function.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @description The port over which you want to send the HTTP GET requests for configuring the postStart callback function.
     *
     * @example 5050
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP GET requests that you want to send for configuring the postStart callback function. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTPS
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @description The IP address of the host detected by the TCP sockets that you want to use for configuring the postStart callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @description The port detected by the TCP sockets that you want to use for configuring the postStart callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @description The commands that you want to run by using the CLI for configuring the preStop callback function within the container.
     *
     * @var string[]
     */
    public $lifecyclePreStopHandlerExecs;

    /**
     * @description The IP address of the host to which you want to send the HTTP GET requests for configuring the preStop callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @description The path to which you want to send the HTTP GET requests for configuring the preStop callback function.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @description The port over which you want to send the HTTP GET requests for configuring the preStop callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP GET requests that you want to send for configuring the preStop callback function. Valid values:
     *
     *   HTTP
     *   HTTPS
     *
     * @example HTTP
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @description The IP address of the host detected by the TCP sockets that you want to use for configuring the preStop callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @description The port detected by the TCP sockets that you want to use for configuring the preStop callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @description The memory size that you want to allocate to the container. Unit: GiB.
     *
     * @example 0.5
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the container image.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The ports.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description Specifies whether the container allocates buffer resources to standard input streams during its active runtime. If you do not specify this parameter, an end-of-file (EOF) error occurs when standard input streams in the container are read.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether standard input streams remain connected during multiple sessions when StdinOnce is set to true.
     *
     * If StdinOnce is set to true, standard input streams are connected after the container is started, and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected, and remain disconnected until the container is restarted.
     * @example false
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Specifies whether to enable the Interaction feature. Default value: false.
     *
     * If the command is a /bin/bash command, set this parameter to true.
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description The volume mounts of the container.
     *
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @description The working directory of the container.
     *
     * @example /usr/local/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'livenessProbe'                          => 'LivenessProbe',
        'readinessProbe'                         => 'ReadinessProbe',
        'securityContext'                        => 'SecurityContext',
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
        'memory'                                 => 'Memory',
        'name'                                   => 'Name',
        'ports'                                  => 'Ports',
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
        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
        }
        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        }
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
