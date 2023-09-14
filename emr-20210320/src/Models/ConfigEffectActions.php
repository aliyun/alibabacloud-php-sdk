<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ConfigEffectActions extends Model
{
    /**
     * @description 配置生效动作。
     *
     * @example restart
     *
     * @var string
     */
    public $configEffectAction;

    /**
     * @description 配置生效配置文件。
     *
     * @example null
     *
     * @var string[]
     */
    public $configFiles;
    protected $_name = [
        'configEffectAction' => 'ConfigEffectAction',
        'configFiles'        => 'ConfigFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configEffectAction) {
            $res['ConfigEffectAction'] = $this->configEffectAction;
        }
        if (null !== $this->configFiles) {
            $res['ConfigFiles'] = $this->configFiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigEffectActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigEffectAction'])) {
            $model->configEffectAction = $map['ConfigEffectAction'];
        }
        if (isset($map['ConfigFiles'])) {
            if (!empty($map['ConfigFiles'])) {
                $model->configFiles = $map['ConfigFiles'];
            }
        }

        return $model;
    }
}
