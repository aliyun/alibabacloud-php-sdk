<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class Addon extends Model
{
    /**
     * @description 插件名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 插件配置参数。
     *
     * @var string
     */
    public $config;

    /**
     * @description 是否禁止默认安装。true | false。
     *
     * @var bool
     */
    public $disabled;
    protected $_name = [
        'name'     => 'name',
        'config'   => 'config',
        'disabled' => 'disabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Addon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        return $model;
    }
}
