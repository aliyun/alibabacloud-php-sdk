<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer\volumeMount;
use AlibabaCloud\Tea\Model;

class initContainer extends Model
{
    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description The arguments that you want to pass to the startup command of the init container.
     *
     * @example 10
     *
     * @var string[]
     */
    public $arg;

    /**
     * @description The commands that are used to start the init container.
     *
     * @example /bin/sh sleep
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The number of vCPUs that you want to allocate to the init container.
     *
     * @example 2.0
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
     * @description The number of GPUs you want to allocate to the init container.
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
     * @description The image pulling policy. Valid values:
     *
     *   Always: Each time the instance is updated, image pulling is performed.
     *   IfNotPresent: On-premises images are used first. If no on-premises images are available, image pulling is performed.
     *   Never: On-premises images are always used. Image pulling is not performed.
     *
     * @example Onfailure
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The memory size of the init container.
     *
     * @example 4.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The name of the init container.
     *
     * @example init-nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The port number. Valid values: 1 to 65535.
     *
     * @var port[]
     */
    public $port;

    /**
     * @description Specifies whether the init container allocates buffer resources to standard input streams when the init container is running. If you do not specify this parameter, an EOF error may occur when standard input streams in the init container are read. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether standard input streams are disconnected after a client is disconnected. If Stdin is set to true, standard input streams remain connected among multiple sessions. If StdinOnce is set to true, standard input streams are connected after the init container is started, and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected, and remain disconnected until the init container restarts.
     *
     * @example true
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Specifies whether to enable interaction. Default value: false. If the command is a /bin/bash command, set the value to true.
     *
     * @example true
     *
     * @var bool
     */
    public $tty;

    /**
     * @description The information about the volume that you want to mount on the init container.
     *
     * @var volumeMount[]
     */
    public $volumeMount;

    /**
     * @description The working directory of the init container.
     *
     * @example /bin/local/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'securityContext' => 'SecurityContext',
        'arg'             => 'Arg',
        'command'         => 'Command',
        'cpu'             => 'Cpu',
        'environmentVar'  => 'EnvironmentVar',
        'gpu'             => 'Gpu',
        'image'           => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'memory'          => 'Memory',
        'name'            => 'Name',
        'port'            => 'Port',
        'stdin'           => 'Stdin',
        'stdinOnce'       => 'StdinOnce',
        'tty'             => 'Tty',
        'volumeMount'     => 'VolumeMount',
        'workingDir'      => 'WorkingDir',
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
