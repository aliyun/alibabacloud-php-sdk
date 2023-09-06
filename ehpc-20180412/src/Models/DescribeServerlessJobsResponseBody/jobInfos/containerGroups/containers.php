<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\currentState;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\environmentVars;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\livenessProbe;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\ports;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\previousState;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\readinessProbe;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\securityContext;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\containers\volumeMounts;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description The startup parameter of the container.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The startup command of the container.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The number of vCPUs of the container.
     *
     * @example 2.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The current status of the container.
     *
     * @var currentState
     */
    public $currentState;

    /**
     * @description The environment variables.
     *
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The image of the container.
     *
     * @example HPL
     *
     * @var string
     */
    public $image;

    /**
     * @description The policy for image pulling. Valid values:
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
     * @description The liveness probe of the container.
     *
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @description The memory size of the instance. Unit: GiB.
     *
     * @example 4.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The container name.
     *
     * @example HPL
     *
     * @var string
     */
    public $name;

    /**
     * @description The exposed ports and protocols of the container.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description The previous status of the container.
     *
     * @var previousState
     */
    public $previousState;

    /**
     * @description The readiness probe that is used to check whether the container is ready to serve a request.
     *
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @description Indicates whether the container passed the readiness probe.
     *
     * @example true
     *
     * @var bool
     */
    public $ready;

    /**
     * @description The number of times that the instance worker restarted.
     *
     * @example 5
     *
     * @var int
     */
    public $restartCount;

    /**
     * @description The security context of the container.
     *
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description Indicates whether the container allocates buffer resources to standard input streams when the container runs. If you do not specify this parameter, an EOF error may occur when standard input streams in the init container are read. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Indicates whether the container runtime closes the stdin channel after the stdin channel has been opened by a single attach session. If stdin is true, the stdin stream remains open across multiple attach sessions. If StdinOnce is set to true, stdin is opened on container start, remains empty until the first client attaches to stdin, and then is open and receives data until the client disconnects. When the client disconnects, stdin is closed and remains closed until the container is restarted.
     *
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Indicates whether interaction is enabled. Default value: false. If the value of the Command parameter is /bin/bash, the value of this parameter must be set to true.
     *
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description Information about the mounted volumes.
     *
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @description The working directory.
     *
     * @example /usr/local/nginx
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args'            => 'Args',
        'commands'        => 'Commands',
        'cpu'             => 'Cpu',
        'currentState'    => 'CurrentState',
        'environmentVars' => 'EnvironmentVars',
        'gpu'             => 'Gpu',
        'image'           => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'livenessProbe'   => 'LivenessProbe',
        'memory'          => 'Memory',
        'name'            => 'Name',
        'ports'           => 'Ports',
        'previousState'   => 'PreviousState',
        'readinessProbe'  => 'ReadinessProbe',
        'ready'           => 'Ready',
        'restartCount'    => 'RestartCount',
        'securityContext' => 'SecurityContext',
        'stdin'           => 'Stdin',
        'stdinOnce'       => 'StdinOnce',
        'tty'             => 'Tty',
        'volumeMounts'    => 'VolumeMounts',
        'workingDir'      => 'WorkingDir',
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
        if (null !== $this->currentState) {
            $res['CurrentState'] = null !== $this->currentState ? $this->currentState->toMap() : null;
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
        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
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
        if (null !== $this->previousState) {
            $res['PreviousState'] = null !== $this->previousState ? $this->previousState->toMap() : null;
        }
        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
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
        if (isset($map['CurrentState'])) {
            $model->currentState = currentState::fromMap($map['CurrentState']);
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
        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
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
        if (isset($map['PreviousState'])) {
            $model->previousState = previousState::fromMap($map['PreviousState']);
        }
        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
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
