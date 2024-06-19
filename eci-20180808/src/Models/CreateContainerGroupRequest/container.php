<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\lifecyclePostStartHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\lifecyclePreStopHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\volumeMount;
use AlibabaCloud\Tea\Model;

class container extends Model
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
     * @description The arguments that are passed to the startup command of the container. You can specify up to 10 arguments.
     *
     * @example 100
     *
     * @var string[]
     */
    public $arg;

    /**
     * @description The commands to be executed in containers when you use a CLI to perform health checks.
     *
     * >  When you configure ReadinessProbe-related parameters, you can select only one of the HttpGet, Exec, and TcpSocket check methods.
     * @example sleep
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The number of vCPUs that are allocated to the container.
     *
     * @example 0.25
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The environment variables of the container.
     *
     * @var environmentVar[]
     */
    public $environmentVar;

    /**
     * @description Specifies whether to hide the information about environment variables when you query the details of an elastic container instance. Valid values:
     *
     *   false
     *   true If environment variables contain sensitive information, you can set this parameter to true to improve security of the information.
     *
     * @example false
     *
     * @var bool
     */
    public $environmentVarHide;

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
     * This parameter is required.
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:latest
     *
     * @var string
     */
    public $image;

    /**
     * @description The policy that you want to use to pull images. Valid values:
     *
     *   Always: Each time instances are created, image pulling is performed.
     *   IfNotPresent: On-premises images are preferentially used. If no on-premises images are available, image pulling is performed.
     *   Never: On-premises images are always used. Image pulling is not performed.
     *
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The commands to be executed in containers when you use a CLI to specify a postStart hook.
     *
     * @example ["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]
     *
     * @var string[]
     */
    public $lifecyclePostStartHandlerExec;

    /**
     * @description The IP address of the host that receives the HTTP GET request when you use an HTTP request to specify a postStart hook.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @description The HTTP GET request header.
     *
     * @var lifecyclePostStartHandlerHttpGetHttpHeader[]
     */
    public $lifecyclePostStartHandlerHttpGetHttpHeader;

    /**
     * @description The path to which the system sends an HTTP GET request for a health check when you use an HTTP request to specify a postStart hook.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @description The port to which the system sends an HTTP GET request when you use an HTTP request to specify a postStart hook.
     *
     * @example 5050
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @description The protocol type of HTTP GET requests when you use HTTP requests to specify a postStart hook. Valid values:
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
     * @description The IP address of the host that receives the TCP socket request when you use a TCP socket request to specify a postStart hook.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @description The port to which the system sends a TCP socket request for a health check when you use TCP sockets to specify a postStart hook.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @description The commands to be executed in containers when you use a CLI to specify a preStop hook.
     *
     * @example ["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]
     *
     * @var string[]
     */
    public $lifecyclePreStopHandlerExec;

    /**
     * @description The IP address of the host that receives the HTTP GET request when you use an HTTP request to specify a preStop hook.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @description The HTTP GET request header.
     *
     * @var lifecyclePreStopHandlerHttpGetHttpHeader[]
     */
    public $lifecyclePreStopHandlerHttpGetHttpHeader;

    /**
     * @description The path to which the system sends an HTTP GET request for a health check when you use an HTTP request to specify a preSop hook.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @description The port to which the system sends an HTTP GET request for a health check when you use HTTP requests to specify a preStop hook.
     *
     * @example 88
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP GET request when you use an HTTP request to specify a preStop hook. Valid values:
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
     * @description The IP address of the host that receives the TCP socket request when you use a TCP socket request to specify a preStop hook.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @description The port to which the system sends a TCP socket request for a health check when you use TCP sockets to specify a preStop hook.
     *
     * @example 90
     *
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @description The memory size of the container. Unit: GiB.
     *
     * @example 0.5
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the container.
     *
     * This parameter is required.
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The port to which the system sends an HTTP GET request for a health check when you use HTTP requests to perform health checks.
     *
     * >  When you configure LivenessProbe-related parameters, you can select only one of the HttpGet, Exec, and TcpSocket check methods.
     * @var port[]
     */
    public $port;

    /**
     * @var bool
     */
    public $securityContextPrivileged;

    /**
     * @description The user group that runs the container.
     *
     * @example 3000
     *
     * @var int
     */
    public $securityContextRunAsGroup;

    /**
     * @description Specifies whether to run the container as a non-root user.
     *
     * @example true
     *
     * @var bool
     */
    public $securityContextRunAsNonRoot;

    /**
     * @description Specifies whether the container allocates buffer resources to standard input streams when the container is running. If you do not specify this parameter, an end-of-file (EOF) error may occur when standard input streams in the container are read. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether standard input streams are disconnected from multiple sessions after a client is disconnected.\\
     * If StdinOnce is set to true, standard input streams are connected after the container is started, and remain idle until a client is connected to receive data. After the client is disconnected, standard input streams are also disconnected, and remain disconnected until the container restarts.
     * @example false
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description The path of the file from which the system retrieves termination messages of the container when the container exits.
     *
     * @example /tmp/termination-log
     *
     * @var string
     */
    public $terminationMessagePath;

    /**
     * @description The message notification policy. This parameter is empty by default. Only Message Service (MNS) queue message notifications can be sent.
     *
     * @example FallbackToLogsOnError
     *
     * @var string
     */
    public $terminationMessagePolicy;

    /**
     * @description Specifies whether to enable interaction. Default value: false.
     *
     * If the command is a /bin/bash command, set the value to true.
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description The information about the volume that you want to mount on the container.
     *
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @description The working directory of the container.
     *
     * @example /usr/local/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'livenessProbe'                              => 'LivenessProbe',
        'readinessProbe'                             => 'ReadinessProbe',
        'securityContext'                            => 'SecurityContext',
        'arg'                                        => 'Arg',
        'command'                                    => 'Command',
        'cpu'                                        => 'Cpu',
        'environmentVar'                             => 'EnvironmentVar',
        'environmentVarHide'                         => 'EnvironmentVarHide',
        'gpu'                                        => 'Gpu',
        'image'                                      => 'Image',
        'imagePullPolicy'                            => 'ImagePullPolicy',
        'lifecyclePostStartHandlerExec'              => 'LifecyclePostStartHandlerExec',
        'lifecyclePostStartHandlerHttpGetHost'       => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetHttpHeader' => 'LifecyclePostStartHandlerHttpGetHttpHeader',
        'lifecyclePostStartHandlerHttpGetPath'       => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetPort'       => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetScheme'     => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerTcpSocketHost'     => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort'     => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerExec'                => 'LifecyclePreStopHandlerExec',
        'lifecyclePreStopHandlerHttpGetHost'         => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetHttpHeader'   => 'LifecyclePreStopHandlerHttpGetHttpHeader',
        'lifecyclePreStopHandlerHttpGetPath'         => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetPort'         => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetScheme'       => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerTcpSocketHost'       => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort'       => 'LifecyclePreStopHandlerTcpSocketPort',
        'memory'                                     => 'Memory',
        'name'                                       => 'Name',
        'port'                                       => 'Port',
        'securityContextPrivileged'                  => 'SecurityContextPrivileged',
        'securityContextRunAsGroup'                  => 'SecurityContextRunAsGroup',
        'securityContextRunAsNonRoot'                => 'SecurityContextRunAsNonRoot',
        'stdin'                                      => 'Stdin',
        'stdinOnce'                                  => 'StdinOnce',
        'terminationMessagePath'                     => 'TerminationMessagePath',
        'terminationMessagePolicy'                   => 'TerminationMessagePolicy',
        'tty'                                        => 'Tty',
        'volumeMount'                                => 'VolumeMount',
        'workingDir'                                 => 'WorkingDir',
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
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->environmentVar) {
            $res['EnvironmentVar'] = [];
            if (null !== $this->environmentVar && \is_array($this->environmentVar)) {
                $n = 0;
                foreach ($this->environmentVar as $item) {
                    $res['EnvironmentVar'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentVarHide) {
            $res['EnvironmentVarHide'] = $this->environmentVarHide;
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
        if (null !== $this->lifecyclePostStartHandlerExec) {
            $res['LifecyclePostStartHandlerExec'] = $this->lifecyclePostStartHandlerExec;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetHost) {
            $res['LifecyclePostStartHandlerHttpGetHost'] = $this->lifecyclePostStartHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeader) {
            $res['LifecyclePostStartHandlerHttpGetHttpHeader'] = [];
            if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeader && \is_array($this->lifecyclePostStartHandlerHttpGetHttpHeader)) {
                $n = 0;
                foreach ($this->lifecyclePostStartHandlerHttpGetHttpHeader as $item) {
                    $res['LifecyclePostStartHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->lifecyclePreStopHandlerExec) {
            $res['LifecyclePreStopHandlerExec'] = $this->lifecyclePreStopHandlerExec;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetHost) {
            $res['LifecyclePreStopHandlerHttpGetHost'] = $this->lifecyclePreStopHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader) {
            $res['LifecyclePreStopHandlerHttpGetHttpHeader'] = [];
            if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader && \is_array($this->lifecyclePreStopHandlerHttpGetHttpHeader)) {
                $n = 0;
                foreach ($this->lifecyclePreStopHandlerHttpGetHttpHeader as $item) {
                    $res['LifecyclePreStopHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->port) {
            $res['Port'] = [];
            if (null !== $this->port && \is_array($this->port)) {
                $n = 0;
                foreach ($this->port as $item) {
                    $res['Port'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityContextPrivileged) {
            $res['SecurityContextPrivileged'] = $this->securityContextPrivileged;
        }
        if (null !== $this->securityContextRunAsGroup) {
            $res['SecurityContextRunAsGroup'] = $this->securityContextRunAsGroup;
        }
        if (null !== $this->securityContextRunAsNonRoot) {
            $res['SecurityContextRunAsNonRoot'] = $this->securityContextRunAsNonRoot;
        }
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }
        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
        }
        if (null !== $this->terminationMessagePath) {
            $res['TerminationMessagePath'] = $this->terminationMessagePath;
        }
        if (null !== $this->terminationMessagePolicy) {
            $res['TerminationMessagePolicy'] = $this->terminationMessagePolicy;
        }
        if (null !== $this->tty) {
            $res['Tty'] = $this->tty;
        }
        if (null !== $this->volumeMount) {
            $res['VolumeMount'] = [];
            if (null !== $this->volumeMount && \is_array($this->volumeMount)) {
                $n = 0;
                foreach ($this->volumeMount as $item) {
                    $res['VolumeMount'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return container
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
        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = $map['Arg'];
            }
        }
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = $map['Command'];
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n                     = 0;
                foreach ($map['EnvironmentVar'] as $item) {
                    $model->environmentVar[$n++] = null !== $item ? environmentVar::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentVarHide'])) {
            $model->environmentVarHide = $map['EnvironmentVarHide'];
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
        if (isset($map['LifecyclePostStartHandlerExec'])) {
            if (!empty($map['LifecyclePostStartHandlerExec'])) {
                $model->lifecyclePostStartHandlerExec = $map['LifecyclePostStartHandlerExec'];
            }
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetHost'])) {
            $model->lifecyclePostStartHandlerHttpGetHost = $map['LifecyclePostStartHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetHttpHeader'])) {
            if (!empty($map['LifecyclePostStartHandlerHttpGetHttpHeader'])) {
                $model->lifecyclePostStartHandlerHttpGetHttpHeader = [];
                $n                                                 = 0;
                foreach ($map['LifecyclePostStartHandlerHttpGetHttpHeader'] as $item) {
                    $model->lifecyclePostStartHandlerHttpGetHttpHeader[$n++] = null !== $item ? lifecyclePostStartHandlerHttpGetHttpHeader::fromMap($item) : $item;
                }
            }
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
        if (isset($map['LifecyclePreStopHandlerExec'])) {
            if (!empty($map['LifecyclePreStopHandlerExec'])) {
                $model->lifecyclePreStopHandlerExec = $map['LifecyclePreStopHandlerExec'];
            }
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetHost'])) {
            $model->lifecyclePreStopHandlerHttpGetHost = $map['LifecyclePreStopHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
            if (!empty($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
                $model->lifecyclePreStopHandlerHttpGetHttpHeader = [];
                $n                                               = 0;
                foreach ($map['LifecyclePreStopHandlerHttpGetHttpHeader'] as $item) {
                    $model->lifecyclePreStopHandlerHttpGetHttpHeader[$n++] = null !== $item ? lifecyclePreStopHandlerHttpGetHttpHeader::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Port'])) {
            if (!empty($map['Port'])) {
                $model->port = [];
                $n           = 0;
                foreach ($map['Port'] as $item) {
                    $model->port[$n++] = null !== $item ? port::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityContextPrivileged'])) {
            $model->securityContextPrivileged = $map['SecurityContextPrivileged'];
        }
        if (isset($map['SecurityContextRunAsGroup'])) {
            $model->securityContextRunAsGroup = $map['SecurityContextRunAsGroup'];
        }
        if (isset($map['SecurityContextRunAsNonRoot'])) {
            $model->securityContextRunAsNonRoot = $map['SecurityContextRunAsNonRoot'];
        }
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }
        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
        }
        if (isset($map['TerminationMessagePath'])) {
            $model->terminationMessagePath = $map['TerminationMessagePath'];
        }
        if (isset($map['TerminationMessagePolicy'])) {
            $model->terminationMessagePolicy = $map['TerminationMessagePolicy'];
        }
        if (isset($map['Tty'])) {
            $model->tty = $map['Tty'];
        }
        if (isset($map['VolumeMount'])) {
            if (!empty($map['VolumeMount'])) {
                $model->volumeMount = [];
                $n                  = 0;
                foreach ($map['VolumeMount'] as $item) {
                    $model->volumeMount[$n++] = null !== $item ? volumeMount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
