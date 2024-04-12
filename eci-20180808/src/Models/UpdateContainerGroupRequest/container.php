<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\lifecyclePostStartHandlerHttpGetHttpHeaders;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\lifecyclePreStopHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\volumeMount;
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
     * @description The arguments that you want to pass to the startup command of the container. You can specify up to 10 arguments.
     *
     * @example hello
     *
     * @var string[]
     */
    public $arg;

    /**
     * @description The commands that you want to run to perform the health check.
     *
     * @example echo
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The number of vCPUs that you want to allocate to the container
     *
     * @example 1.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The environment variables for the container.
     *
     * @var environmentVar[]
     */
    public $environmentVar;

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
     * @example jenkins
     *
     * @var string
     */
    public $image;

    /**
     * @description The image pulling policy. Valid values:
     *
     *   Always: Each time the instance is updated, image pulling is performed.
     *   IfNotPresent: On-premises images are used first. If no on-premises images are available, image pulling is performed.
     *   Never: On-premises images are always used. Image pulling is not performed.
     *
     * @example Never
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The commands to be executed in the container when you use the CLI to specify the postStart callback function.
     *
     * @example hide
     *
     * @var string[]
     */
    public $lifecyclePostStartHandlerExec;

    /**
     * @description The IP address of the host that receives the HTTP GET request when you use an HTTP request to specify the postStart callback function.
     *
     * @example hide
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @description The information about the valid HTTP request headers among the generated HTTP request headers.
     *
     * @var lifecyclePostStartHandlerHttpGetHttpHeaders[]
     */
    public $lifecyclePostStartHandlerHttpGetHttpHeaders;

    /**
     * @description The path to which the system sends an HTTP GET request for a health check when you use an HTTP request to specify the postStart callback function.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @description The port to which the system sends the HTTP GET request when you use an HTTP request to specify the postStart callback function.
     *
     * @example 1
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @description The path to which the system sends an HTTP GET request for a health check when you use an HTTP request to specify the postStart callback function.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @description The IP address of the host that receives the TCP socket request when you use a TCP socket request to specify the postStart callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @description The port to which the system sends a TCP socket request for a health check when you use TCP sockets to specify the postStart callback function.
     *
     * @example 1
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @description The commands to be executed in the container when you use the CLI to specify the preStop callback function.
     *
     * @example hide
     *
     * @var string[]
     */
    public $lifecyclePreStopHandlerExec;

    /**
     * @description The IP address of the host that receives the HTTP GET request when you use an HTTP request to specify the preStop callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @description The information about the generated HTTP request header.
     *
     * @var lifecyclePreStopHandlerHttpGetHttpHeader[]
     */
    public $lifecyclePreStopHandlerHttpGetHttpHeader;

    /**
     * @description The path to which the system sends an HTTP GET request for a health check when you use an HTTP request to specify the preSop callback function.
     *
     * @example /healthyz
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @description The port to which the system sends the HTTP GET request for a health check when you use an HTTP request to specify the preStop callback function.
     *
     * @example 1
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @description The protocol type of the HTTP GET request when you use an HTTP request to specify the preStop callback function. Valid values:
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
     * @description The IP address of the host that receives the TCP socket request when you use a TCP socket request to specify the preStop callback function.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @description The port to which the system sends a TCP socket request for a health check when you use TCP sockets to specify the preStop callback function.
     *
     * @example 80
     *
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @description The memory size of the container.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the container.
     *
     * @example jenkins
     *
     * @var string
     */
    public $name;

    /**
     * @description The port to which the system sends an HTTP GET request for a health check.
     *
     * @var port[]
     */
    public $port;

    /**
     * @description Specifies whether the container allocates buffer resources to standard input streams when the container is running. If you do not specify this parameter, an end-of-file (EOF) error may occur when standard input streams in the container are read. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether standard input streams are disconnected after a client is disconnected. If Stdin is set to true, standard input streams remain connected among multiple sessions. If StdinOnce is set to true, standard input streams are connected after the container is started, and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected, and remain disconnected until the container restarts.
     *
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Specifies whether to enable interaction. Default value: false. If the command is a /bin/bash command, set the value to true.
     *
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description Pod volumes that you want to mount into the filesystem of the container.
     *
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @description The working directory of the container.
     *
     * @example /usr/share/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'livenessProbe'                               => 'LivenessProbe',
        'readinessProbe'                              => 'ReadinessProbe',
        'securityContext'                             => 'SecurityContext',
        'arg'                                         => 'Arg',
        'command'                                     => 'Command',
        'cpu'                                         => 'Cpu',
        'environmentVar'                              => 'EnvironmentVar',
        'gpu'                                         => 'Gpu',
        'image'                                       => 'Image',
        'imagePullPolicy'                             => 'ImagePullPolicy',
        'lifecyclePostStartHandlerExec'               => 'LifecyclePostStartHandlerExec',
        'lifecyclePostStartHandlerHttpGetHost'        => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetHttpHeaders' => 'LifecyclePostStartHandlerHttpGetHttpHeaders',
        'lifecyclePostStartHandlerHttpGetPath'        => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetPort'        => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetScheme'      => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerTcpSocketHost'      => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort'      => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerExec'                 => 'LifecyclePreStopHandlerExec',
        'lifecyclePreStopHandlerHttpGetHost'          => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetHttpHeader'    => 'LifecyclePreStopHandlerHttpGetHttpHeader',
        'lifecyclePreStopHandlerHttpGetPath'          => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetPort'          => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetScheme'        => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerTcpSocketHost'        => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort'        => 'LifecyclePreStopHandlerTcpSocketPort',
        'memory'                                      => 'Memory',
        'name'                                        => 'Name',
        'port'                                        => 'Port',
        'stdin'                                       => 'Stdin',
        'stdinOnce'                                   => 'StdinOnce',
        'tty'                                         => 'Tty',
        'volumeMount'                                 => 'VolumeMount',
        'workingDir'                                  => 'WorkingDir',
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
        if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeaders) {
            $res['LifecyclePostStartHandlerHttpGetHttpHeaders'] = [];
            if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeaders && \is_array($this->lifecyclePostStartHandlerHttpGetHttpHeaders)) {
                $n = 0;
                foreach ($this->lifecyclePostStartHandlerHttpGetHttpHeaders as $item) {
                    $res['LifecyclePostStartHandlerHttpGetHttpHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }
        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
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
        if (isset($map['LifecyclePostStartHandlerHttpGetHttpHeaders'])) {
            if (!empty($map['LifecyclePostStartHandlerHttpGetHttpHeaders'])) {
                $model->lifecyclePostStartHandlerHttpGetHttpHeaders = [];
                $n                                                  = 0;
                foreach ($map['LifecyclePostStartHandlerHttpGetHttpHeaders'] as $item) {
                    $model->lifecyclePostStartHandlerHttpGetHttpHeaders[$n++] = null !== $item ? lifecyclePostStartHandlerHttpGetHttpHeaders::fromMap($item) : $item;
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
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }
        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
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
