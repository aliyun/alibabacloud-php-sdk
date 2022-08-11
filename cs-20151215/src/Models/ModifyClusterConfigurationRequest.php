<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest\customizeConfig;
use AlibabaCloud\Tea\Model;

class ModifyClusterConfigurationRequest extends Model
{
    /**
     * @var customizeConfig[]
     */
    public $customizeConfig;
    protected $_name = [
        'customizeConfig' => 'customize_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizeConfig) {
            $res['customize_config'] = [];
            if (null !== $this->customizeConfig && \is_array($this->customizeConfig)) {
                $n = 0;
                foreach ($this->customizeConfig as $item) {
                    $res['customize_config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['customize_config'])) {
            if (!empty($map['customize_config'])) {
                $model->customizeConfig = [];
                $n                      = 0;
                foreach ($map['customize_config'] as $item) {
                    $model->customizeConfig[$n++] = null !== $item ? customizeConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
