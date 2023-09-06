<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\environmentVar;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\volumeMount;
use AlibabaCloud\Tea\Model;

class container extends Model
{
    /**
     * @description The arguments of the container startup command. You can specify up to 10 arguments.
     *
     * @var string[]
     */
    public $arg;

    /**
     * @description The container startup commands.
     *
     * @var string[]
     */
    public $command;

    /**
     * @description The environment variable of the container.
     *
     * @var environmentVar[]
     */
    public $environmentVar;

    /**
     * @description The number of GPUs of the container.
     *
     * @example 1
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The image of the container.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/ehpc/hpl:latest
     *
     * @var string
     */
    public $image;

    /**
     * @description The data volumes mounted to the container.
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
        'arg'            => 'Arg',
        'command'        => 'Command',
        'environmentVar' => 'EnvironmentVar',
        'gpu'            => 'Gpu',
        'image'          => 'Image',
        'volumeMount'    => 'VolumeMount',
        'workingDir'     => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
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
