<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CustomContainerConfig extends Model
{
    /**
     * @example Default
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @example ["-arg1", "value1"]
     *
     * @var string
     */
    public $args;

    /**
     * @example ["/code/myserver"]
     *
     * @var string
     */
    public $command;

    /**
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1
     *
     * @var string
     */
    public $image;

    /**
     * @example cri-xxxxxxxxxx
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example true
     *
     * @var bool
     */
    public $webServerMode;
    protected $_name = [
        'accelerationType' => 'accelerationType',
        'args'             => 'args',
        'command'          => 'command',
        'image'            => 'image',
        'instanceID'       => 'instanceID',
        'webServerMode'    => 'webServerMode',
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
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }
        if (null !== $this->webServerMode) {
            $res['webServerMode'] = $this->webServerMode;
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
        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }
        if (isset($map['webServerMode'])) {
            $model->webServerMode = $map['webServerMode'];
        }

        return $model;
    }
}
