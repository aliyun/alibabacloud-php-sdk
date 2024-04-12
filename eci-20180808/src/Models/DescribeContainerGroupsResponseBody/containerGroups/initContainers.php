<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\currentState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\environmentVars;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\ports;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\previousState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers\volumeMounts;
use AlibabaCloud\Tea\Model;

class initContainers extends Model
{
    /**
     * @description The arguments that are passed to the startup commands of the container.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The startup commands of the containers.
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The number of vCPUs that are allocated to the container.
     *
     * @example 1.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The current container status.
     *
     * @var currentState
     */
    public $currentState;

    /**
     * @description The environment variables of the container.
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
     * @example nginx
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
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The memory size of the init container. Unit: GiB.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the init container.
     *
     * @example Init-xxx
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
     * @description The previous state of the container.
     *
     * @var previousState
     */
    public $previousState;

    /**
     * @description Indicates whether the container passed the readiness probe.
     *
     * @example true
     *
     * @var bool
     */
    public $ready;

    /**
     * @description The number of times the container restarted.
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
     * @description The information about the volumes that are mounted to the init container.
     *
     * @var volumeMounts[]
     */
    public $volumeMounts;

    /**
     * @description The working directory of the container.
     *
     * @example /usr/test
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args'            => 'Args',
        'command'         => 'Command',
        'cpu'             => 'Cpu',
        'currentState'    => 'CurrentState',
        'environmentVars' => 'EnvironmentVars',
        'gpu'             => 'Gpu',
        'image'           => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'memory'          => 'Memory',
        'name'            => 'Name',
        'ports'           => 'Ports',
        'previousState'   => 'PreviousState',
        'ready'           => 'Ready',
        'restartCount'    => 'RestartCount',
        'securityContext' => 'SecurityContext',
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
        if (null !== $this->command) {
            $res['Command'] = $this->command;
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
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
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
     * @return initContainers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = $map['Args'];
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
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
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
