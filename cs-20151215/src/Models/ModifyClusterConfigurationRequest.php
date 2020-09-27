<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest\configs;
use AlibabaCloud\Tea\Model;

class ModifyClusterConfigurationRequest extends Model
{
    /**
     * @description 配置集合。
     *
     * @var configs
     */
    public $configs;

    /**
     * @description 配置名称。
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'configs' => 'configs',
        'name'    => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['configs'] = null !== $this->configs ? $this->configs->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configs'])) {
            $model->configs = configs::fromMap($map['configs']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
