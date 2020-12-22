<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest\customizeConfig\configs;
use AlibabaCloud\Tea\Model;

class customizeConfig extends Model
{
    /**
     * @description 组件名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 组件配置。
     *
     * @var configs[]
     */
    public $configs;
    protected $_name = [
        'name'    => 'name',
        'configs' => 'configs',
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
        if (null !== $this->configs) {
            $res['configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customizeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
