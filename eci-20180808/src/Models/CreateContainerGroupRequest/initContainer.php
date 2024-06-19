<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\volumeMount;
use AlibabaCloud\Tea\Model;

class initContainer extends Model
{
    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description The arguments that are passed to the startup command of the init container.
     *
     * @example 10
     *
     * @var string[]
     */
    public $arg;

    /**
     * @description The startup commands of the init container.
     *
     * @example sleep
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The number of vCPUs that you want to allocate to the init container.
     *
     * @example 0.5
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The environment variable of the init container.
     *
     * @var environmentVar[]
     */
    public $environmentVar;

    /**
     * @description The number of GPUs that you want to allocate to the init container.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The image of the init container.
     *
     * @example nginx
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
     * @description The memory size that you want to allocate to the init container. Unit: GiB.
     *
     * @example 1.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the init container.
     *
     * @example test-init
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the port.
     *
     * @var port[]
     */
    public $port;

    /**
     * @description The path of the file from which the system retrieves termination messages of the init container when the init container exits.
     *
     * @example /tmp/termination-log
     *
     * @var string
     */
    public $terminationMessagePath;

    /**
     * @description The message notification policy. This parameter is empty by default.
     *
     * @example *****
     *
     * @var string
     */
    public $terminationMessagePolicy;

    /**
     * @description The information about the volumes that you want to mount to the init containers.
     *
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @description The working directory of the init container.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'securityContext'          => 'SecurityContext',
        'arg'                      => 'Arg',
        'command'                  => 'Command',
        'cpu'                      => 'Cpu',
        'environmentVar'           => 'EnvironmentVar',
        'gpu'                      => 'Gpu',
        'image'                    => 'Image',
        'imagePullPolicy'          => 'ImagePullPolicy',
        'memory'                   => 'Memory',
        'name'                     => 'Name',
        'port'                     => 'Port',
        'terminationMessagePath'   => 'TerminationMessagePath',
        'terminationMessagePolicy' => 'TerminationMessagePolicy',
        'volumeMount'              => 'VolumeMount',
        'workingDir'               => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->terminationMessagePath) {
            $res['TerminationMessagePath'] = $this->terminationMessagePath;
        }
        if (null !== $this->terminationMessagePolicy) {
            $res['TerminationMessagePolicy'] = $this->terminationMessagePolicy;
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
     * @return initContainer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TerminationMessagePath'])) {
            $model->terminationMessagePath = $map['TerminationMessagePath'];
        }
        if (isset($map['TerminationMessagePolicy'])) {
            $model->terminationMessagePolicy = $map['TerminationMessagePolicy'];
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
