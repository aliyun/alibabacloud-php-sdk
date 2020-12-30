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
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @var environmentVar[]
     */
    public $environmentVar;

    /**
     * @var bool
     */
    public $tty;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var string[]
     */
    public $arg;

    /**
     * @var bool
     */
    public $stdin;

    /**
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @var bool
     */
    public $stdinOnce;

    /**
     * @var int
     */
    public $lifecyclePreStopHandlerTcpSocketPort;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @var string[]
     */
    public $lifecyclePostStartHandlerExec;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @var port[]
     */
    public $port;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @var lifecyclePostStartHandlerHttpGetHttpHeaders[]
     */
    public $lifecyclePostStartHandlerHttpGetHttpHeaders;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string[]
     */
    public $lifecyclePreStopHandlerExec;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @var lifecyclePreStopHandlerHttpGetHttpHeader[]
     */
    public $lifecyclePreStopHandlerHttpGetHttpHeader;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;
    protected $_name = [
        'readinessProbe'                              => 'ReadinessProbe',
        'securityContext'                             => 'SecurityContext',
        'livenessProbe'                               => 'LivenessProbe',
        'environmentVar'                              => 'EnvironmentVar',
        'tty'                                         => 'Tty',
        'workingDir'                                  => 'WorkingDir',
        'arg'                                         => 'Arg',
        'stdin'                                       => 'Stdin',
        'volumeMount'                                 => 'VolumeMount',
        'imagePullPolicy'                             => 'ImagePullPolicy',
        'stdinOnce'                                   => 'StdinOnce',
        'lifecyclePreStopHandlerTcpSocketPort'        => 'LifecyclePreStopHandlerTcpSocketPort',
        'lifecyclePostStartHandlerHttpGetScheme'      => 'LifecyclePostStartHandlerHttpGetScheme',
        'command'                                     => 'Command',
        'lifecyclePostStartHandlerHttpGetHost'        => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerTcpSocketPort'      => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePostStartHandlerHttpGetPath'        => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerExec'               => 'LifecyclePostStartHandlerExec',
        'lifecyclePreStopHandlerHttpGetPath'          => 'LifecyclePreStopHandlerHttpGetPath',
        'port'                                        => 'Port',
        'lifecyclePreStopHandlerHttpGetScheme'        => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePostStartHandlerHttpGetHttpHeaders' => 'LifecyclePostStartHandlerHttpGetHttpHeaders',
        'lifecyclePostStartHandlerTcpSocketHost'      => 'LifecyclePostStartHandlerTcpSocketHost',
        'gpu'                                         => 'Gpu',
        'lifecyclePreStopHandlerExec'                 => 'LifecyclePreStopHandlerExec',
        'memory'                                      => 'Memory',
        'name'                                        => 'Name',
        'lifecyclePreStopHandlerHttpGetHost'          => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerTcpSocketHost'        => 'LifecyclePreStopHandlerTcpSocketHost',
        'image'                                       => 'Image',
        'lifecyclePreStopHandlerHttpGetPort'          => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetHttpHeader'    => 'LifecyclePreStopHandlerHttpGetHttpHeader',
        'cpu'                                         => 'Cpu',
        'lifecyclePostStartHandlerHttpGetPort'        => 'LifecyclePostStartHandlerHttpGetPort',
    ];

    public function validate()
    {
        Model::validateRequired('readinessProbe', $this->readinessProbe, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
        Model::validateRequired('livenessProbe', $this->livenessProbe, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
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
        if (null !== $this->tty) {
            $res['Tty'] = $this->tty;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
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
        if (null !== $this->imagePullPolicy) {
            $res['ImagePullPolicy'] = $this->imagePullPolicy;
        }
        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
        }
        if (null !== $this->lifecyclePreStopHandlerTcpSocketPort) {
            $res['LifecyclePreStopHandlerTcpSocketPort'] = $this->lifecyclePreStopHandlerTcpSocketPort;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetScheme) {
            $res['LifecyclePostStartHandlerHttpGetScheme'] = $this->lifecyclePostStartHandlerHttpGetScheme;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetHost) {
            $res['LifecyclePostStartHandlerHttpGetHost'] = $this->lifecyclePostStartHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePostStartHandlerTcpSocketPort) {
            $res['LifecyclePostStartHandlerTcpSocketPort'] = $this->lifecyclePostStartHandlerTcpSocketPort;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetPath) {
            $res['LifecyclePostStartHandlerHttpGetPath'] = $this->lifecyclePostStartHandlerHttpGetPath;
        }
        if (null !== $this->lifecyclePostStartHandlerExec) {
            $res['LifecyclePostStartHandlerExec'] = $this->lifecyclePostStartHandlerExec;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetPath) {
            $res['LifecyclePreStopHandlerHttpGetPath'] = $this->lifecyclePreStopHandlerHttpGetPath;
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
        if (null !== $this->lifecyclePreStopHandlerHttpGetScheme) {
            $res['LifecyclePreStopHandlerHttpGetScheme'] = $this->lifecyclePreStopHandlerHttpGetScheme;
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
        if (null !== $this->lifecyclePostStartHandlerTcpSocketHost) {
            $res['LifecyclePostStartHandlerTcpSocketHost'] = $this->lifecyclePostStartHandlerTcpSocketHost;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->lifecyclePreStopHandlerExec) {
            $res['LifecyclePreStopHandlerExec'] = $this->lifecyclePreStopHandlerExec;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetHost) {
            $res['LifecyclePreStopHandlerHttpGetHost'] = $this->lifecyclePreStopHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePreStopHandlerTcpSocketHost) {
            $res['LifecyclePreStopHandlerTcpSocketHost'] = $this->lifecyclePreStopHandlerTcpSocketHost;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetPort) {
            $res['LifecyclePreStopHandlerHttpGetPort'] = $this->lifecyclePreStopHandlerHttpGetPort;
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
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetPort) {
            $res['LifecyclePostStartHandlerHttpGetPort'] = $this->lifecyclePostStartHandlerHttpGetPort;
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
        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
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
        if (isset($map['Tty'])) {
            $model->tty = $map['Tty'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = $map['Arg'];
            }
        }
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
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
        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }
        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
        }
        if (isset($map['LifecyclePreStopHandlerTcpSocketPort'])) {
            $model->lifecyclePreStopHandlerTcpSocketPort = $map['LifecyclePreStopHandlerTcpSocketPort'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetScheme'])) {
            $model->lifecyclePostStartHandlerHttpGetScheme = $map['LifecyclePostStartHandlerHttpGetScheme'];
        }
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = $map['Command'];
            }
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetHost'])) {
            $model->lifecyclePostStartHandlerHttpGetHost = $map['LifecyclePostStartHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePostStartHandlerTcpSocketPort'])) {
            $model->lifecyclePostStartHandlerTcpSocketPort = $map['LifecyclePostStartHandlerTcpSocketPort'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetPath'])) {
            $model->lifecyclePostStartHandlerHttpGetPath = $map['LifecyclePostStartHandlerHttpGetPath'];
        }
        if (isset($map['LifecyclePostStartHandlerExec'])) {
            if (!empty($map['LifecyclePostStartHandlerExec'])) {
                $model->lifecyclePostStartHandlerExec = $map['LifecyclePostStartHandlerExec'];
            }
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetPath'])) {
            $model->lifecyclePreStopHandlerHttpGetPath = $map['LifecyclePreStopHandlerHttpGetPath'];
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
        if (isset($map['LifecyclePreStopHandlerHttpGetScheme'])) {
            $model->lifecyclePreStopHandlerHttpGetScheme = $map['LifecyclePreStopHandlerHttpGetScheme'];
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
        if (isset($map['LifecyclePostStartHandlerTcpSocketHost'])) {
            $model->lifecyclePostStartHandlerTcpSocketHost = $map['LifecyclePostStartHandlerTcpSocketHost'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['LifecyclePreStopHandlerExec'])) {
            if (!empty($map['LifecyclePreStopHandlerExec'])) {
                $model->lifecyclePreStopHandlerExec = $map['LifecyclePreStopHandlerExec'];
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetHost'])) {
            $model->lifecyclePreStopHandlerHttpGetHost = $map['LifecyclePreStopHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePreStopHandlerTcpSocketHost'])) {
            $model->lifecyclePreStopHandlerTcpSocketHost = $map['LifecyclePreStopHandlerTcpSocketHost'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetPort'])) {
            $model->lifecyclePreStopHandlerHttpGetPort = $map['LifecyclePreStopHandlerHttpGetPort'];
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetPort'])) {
            $model->lifecyclePostStartHandlerHttpGetPort = $map['LifecyclePostStartHandlerHttpGetPort'];
        }

        return $model;
    }
}
