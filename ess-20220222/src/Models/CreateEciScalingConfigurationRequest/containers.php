<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\environmentVars;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\livenessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\ports;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\readinessProbe;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\securityContext;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\volumeMounts;
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
     * @description The arguments that correspond to the startup commands of the container. You can specify up to 10 arguments.
     *
     * @var string[]
     */
    public $args;

    /**
     * @description The commands that you want to run in the container when you use the CLI to perform probes.
     *
     * @var string[]
     */
    public $commands;

    /**
     * @description The number of CPU cores in the container.
     *
     * @example 0.25
     *
     * @var float
     */
    public $cpu;

    /**
     * @description Information about environment variables.
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
     *   Always: pulls images each time.
     *   IfNotPresent: pulls images only if no on-premises images are available. On-premises images are preferentially used. If no on-premises images are available, image pulling is performed.
     *   Never: never pulls images. On-premises images are always used.
     *
     * @example Always
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description The memory size of the container. Unit: GiB.
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
     * @description Specifies whether the container allocates buffer resources to standard input streams when the container is running. If you do not specify this parameter, an end-of-file (EOF) error may occur.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description Specifies whether to disconnect standard input streams after a client is disconnected.
     *
     * If you set the StdinOnce parameter to true, standard input streams are connected after the container is started, and remain idle until a client is connected to receive data. After the client is disconnected, streams are also disconnected, and remain disconnected until the container is started again.
     * @example false
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description Specifies whether to enable interaction. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $tty;

    /**
     * @description Information about the volume mount of the container.
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
        'livenessProbe'   => 'LivenessProbe',
        'readinessProbe'  => 'ReadinessProbe',
        'securityContext' => 'SecurityContext',
        'args'            => 'Args',
        'commands'        => 'Commands',
        'cpu'             => 'Cpu',
        'environmentVars' => 'EnvironmentVars',
        'gpu'             => 'Gpu',
        'image'           => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'memory'          => 'Memory',
        'name'            => 'Name',
        'ports'           => 'Ports',
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
