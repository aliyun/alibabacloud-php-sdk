<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CustomContainerConfig extends Model
{
    /**
     * @description 镜像加速类型，取值Default为开启加速，None为关闭加速，默认关闭
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @description 容器启动参数
     *
     * @var string
     */
    public $args;

    /**
     * @description 容器启动命令，等同于 Docker ENTRYPOINT
     *
     * @var string
     */
    public $command;

    /**
     * @description 容器镜像地址，实例值： registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1
     *
     * @var string
     */
    public $image;
    protected $_name = [
        'accelerationType' => 'accelerationType',
        'args'             => 'args',
        'command'          => 'command',
        'image'            => 'image',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationType) {
            $res['accelerationType'] = $this->accelerationType;
        }
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomContainerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accelerationType'])) {
            $model->accelerationType = $map['accelerationType'];
        }
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }
        if (isset($map['command'])) {
            $model->command = $map['command'];
        }
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        return $model;
    }
}
