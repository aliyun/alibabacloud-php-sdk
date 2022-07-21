<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ContainerSpec extends Model
{
    /**
     * @description 命令参数
     *
     * @var string[]
     */
    public $args;

    /**
     * @description 用户命令
     *
     * @var string[]
     */
    public $command;

    /**
     * @description 环境变量
     *
     * @var EnvVar[]
     */
    public $env;

    /**
     * @description 容器镜像地址
     *
     * @var string
     */
    public $image;

    /**
     * @description 容器名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 容器资源
     *
     * @var ResourceRequirements
     */
    public $resources;

    /**
     * @description 容器内工作目录
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'args'       => 'Args',
        'command'    => 'Command',
        'env'        => 'Env',
        'image'      => 'Image',
        'name'       => 'Name',
        'resources'  => 'Resources',
        'workingDir' => 'WorkingDir',
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
        if (null !== $this->env) {
            $res['Env'] = [];
            if (null !== $this->env && \is_array($this->env)) {
                $n = 0;
                foreach ($this->env as $item) {
                    $res['Env'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContainerSpec
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
        if (isset($map['Env'])) {
            if (!empty($map['Env'])) {
                $model->env = [];
                $n          = 0;
                foreach ($map['Env'] as $item) {
                    $model->env[$n++] = null !== $item ? EnvVar::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Resources'])) {
            $model->resources = ResourceRequirements::fromMap($map['Resources']);
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
