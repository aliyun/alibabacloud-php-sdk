<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\lifecyclePostStartHandlerHttpGetHttpHeaders;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\lifecyclePreStopHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\volumeMount;

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
     * @var string[]
     */
    public $arg;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var environmentVar[]
     */
    public $environmentVar;

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
    public $lifecyclePostStartHandlerExec;

    /**
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @var lifecyclePostStartHandlerHttpGetHttpHeaders[]
     */
    public $lifecyclePostStartHandlerHttpGetHttpHeaders;

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
    public $lifecyclePreStopHandlerExec;

    /**
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @var lifecyclePreStopHandlerHttpGetHttpHeader[]
     */
    public $lifecyclePreStopHandlerHttpGetHttpHeader;

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
     * @var port[]
     */
    public $port;

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
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'livenessProbe' => 'LivenessProbe',
        'readinessProbe' => 'ReadinessProbe',
        'securityContext' => 'SecurityContext',
        'arg' => 'Arg',
        'command' => 'Command',
        'cpu' => 'Cpu',
        'environmentVar' => 'EnvironmentVar',
        'gpu' => 'Gpu',
        'image' => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'lifecyclePostStartHandlerExec' => 'LifecyclePostStartHandlerExec',
        'lifecyclePostStartHandlerHttpGetHost' => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetHttpHeaders' => 'LifecyclePostStartHandlerHttpGetHttpHeaders',
        'lifecyclePostStartHandlerHttpGetPath' => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetPort' => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetScheme' => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerTcpSocketHost' => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort' => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerExec' => 'LifecyclePreStopHandlerExec',
        'lifecyclePreStopHandlerHttpGetHost' => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetHttpHeader' => 'LifecyclePreStopHandlerHttpGetHttpHeader',
        'lifecyclePreStopHandlerHttpGetPath' => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetPort' => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetScheme' => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerTcpSocketHost' => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort' => 'LifecyclePreStopHandlerTcpSocketPort',
        'memory' => 'Memory',
        'name' => 'Name',
        'port' => 'Port',
        'stdin' => 'Stdin',
        'stdinOnce' => 'StdinOnce',
        'tty' => 'Tty',
        'volumeMount' => 'VolumeMount',
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
        if (\is_array($this->arg)) {
            Model::validateArray($this->arg);
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->environmentVar)) {
            Model::validateArray($this->environmentVar);
        }
        if (\is_array($this->lifecyclePostStartHandlerExec)) {
            Model::validateArray($this->lifecyclePostStartHandlerExec);
        }
        if (\is_array($this->lifecyclePostStartHandlerHttpGetHttpHeaders)) {
            Model::validateArray($this->lifecyclePostStartHandlerHttpGetHttpHeaders);
        }
        if (\is_array($this->lifecyclePreStopHandlerExec)) {
            Model::validateArray($this->lifecyclePreStopHandlerExec);
        }
        if (\is_array($this->lifecyclePreStopHandlerHttpGetHttpHeader)) {
            Model::validateArray($this->lifecyclePreStopHandlerHttpGetHttpHeader);
        }
        if (\is_array($this->port)) {
            Model::validateArray($this->port);
        }
        if (\is_array($this->volumeMount)) {
            Model::validateArray($this->volumeMount);
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

        if (null !== $this->arg) {
            if (\is_array($this->arg)) {
                $res['Arg'] = [];
                $n1 = 0;
                foreach ($this->arg as $item1) {
                    $res['Arg'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->environmentVar) {
            if (\is_array($this->environmentVar)) {
                $res['EnvironmentVar'] = [];
                $n1 = 0;
                foreach ($this->environmentVar as $item1) {
                    $res['EnvironmentVar'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->lifecyclePostStartHandlerExec)) {
                $res['LifecyclePostStartHandlerExec'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePostStartHandlerExec as $item1) {
                    $res['LifecyclePostStartHandlerExec'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetHost) {
            $res['LifecyclePostStartHandlerHttpGetHost'] = $this->lifecyclePostStartHandlerHttpGetHost;
        }

        if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeaders) {
            if (\is_array($this->lifecyclePostStartHandlerHttpGetHttpHeaders)) {
                $res['LifecyclePostStartHandlerHttpGetHttpHeaders'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePostStartHandlerHttpGetHttpHeaders as $item1) {
                    $res['LifecyclePostStartHandlerHttpGetHttpHeaders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->lifecyclePreStopHandlerExec)) {
                $res['LifecyclePreStopHandlerExec'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePreStopHandlerExec as $item1) {
                    $res['LifecyclePreStopHandlerExec'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetHost) {
            $res['LifecyclePreStopHandlerHttpGetHost'] = $this->lifecyclePreStopHandlerHttpGetHost;
        }

        if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader) {
            if (\is_array($this->lifecyclePreStopHandlerHttpGetHttpHeader)) {
                $res['LifecyclePreStopHandlerHttpGetHttpHeader'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePreStopHandlerHttpGetHttpHeader as $item1) {
                    $res['LifecyclePreStopHandlerHttpGetHttpHeader'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->port)) {
                $res['Port'] = [];
                $n1 = 0;
                foreach ($this->port as $item1) {
                    $res['Port'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->volumeMount)) {
                $res['VolumeMount'] = [];
                $n1 = 0;
                foreach ($this->volumeMount as $item1) {
                    $res['VolumeMount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = [];
                $n1 = 0;
                foreach ($map['Arg'] as $item1) {
                    $model->arg[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n1 = 0;
                foreach ($map['EnvironmentVar'] as $item1) {
                    $model->environmentVar[$n1++] = environmentVar::fromMap($item1);
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
                $model->lifecyclePostStartHandlerExec = [];
                $n1 = 0;
                foreach ($map['LifecyclePostStartHandlerExec'] as $item1) {
                    $model->lifecyclePostStartHandlerExec[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetHost'])) {
            $model->lifecyclePostStartHandlerHttpGetHost = $map['LifecyclePostStartHandlerHttpGetHost'];
        }

        if (isset($map['LifecyclePostStartHandlerHttpGetHttpHeaders'])) {
            if (!empty($map['LifecyclePostStartHandlerHttpGetHttpHeaders'])) {
                $model->lifecyclePostStartHandlerHttpGetHttpHeaders = [];
                $n1 = 0;
                foreach ($map['LifecyclePostStartHandlerHttpGetHttpHeaders'] as $item1) {
                    $model->lifecyclePostStartHandlerHttpGetHttpHeaders[$n1++] = lifecyclePostStartHandlerHttpGetHttpHeaders::fromMap($item1);
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
                $model->lifecyclePreStopHandlerExec = [];
                $n1 = 0;
                foreach ($map['LifecyclePreStopHandlerExec'] as $item1) {
                    $model->lifecyclePreStopHandlerExec[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetHost'])) {
            $model->lifecyclePreStopHandlerHttpGetHost = $map['LifecyclePreStopHandlerHttpGetHost'];
        }

        if (isset($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
            if (!empty($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
                $model->lifecyclePreStopHandlerHttpGetHttpHeader = [];
                $n1 = 0;
                foreach ($map['LifecyclePreStopHandlerHttpGetHttpHeader'] as $item1) {
                    $model->lifecyclePreStopHandlerHttpGetHttpHeader[$n1++] = lifecyclePreStopHandlerHttpGetHttpHeader::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Port'] as $item1) {
                    $model->port[$n1++] = port::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['VolumeMount'] as $item1) {
                    $model->volumeMount[$n1++] = volumeMount::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
