<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CustomContainerConfigInfo extends Model
{
    /**
     * @var AccelerationInfo
     */
    public $accelerationInfo;

    /**
     * @description 镜像加速类型，取值Default为开启加速，None为关闭加速，默认开启
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

    /**
     * @description ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入
     *
     * @var string
     */
    public $instanceID;
    protected $_name = [
        'accelerationInfo' => 'accelerationInfo',
        'accelerationType' => 'accelerationType',
        'args'             => 'args',
        'command'          => 'command',
        'image'            => 'image',
        'instanceID'       => 'instanceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationInfo) {
            $res['accelerationInfo'] = null !== $this->accelerationInfo ? $this->accelerationInfo->toMap() : null;
        }
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
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomContainerConfigInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accelerationInfo'])) {
            $model->accelerationInfo = AccelerationInfo::fromMap($map['accelerationInfo']);
        }
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
        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }

        return $model;
    }
}
