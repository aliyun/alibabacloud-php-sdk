<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiFallbackConfig;
use AlibabaCloud\Tea\Model;

class policyConfigs extends Model
{
    /**
     * @var aiFallbackConfig
     */
    public $aiFallbackConfig;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example AiFallback
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aiFallbackConfig' => 'aiFallbackConfig',
        'enable' => 'enable',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiFallbackConfig) {
            $res['aiFallbackConfig'] = null !== $this->aiFallbackConfig ? $this->aiFallbackConfig->toMap() : null;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aiFallbackConfig'])) {
            $model->aiFallbackConfig = aiFallbackConfig::fromMap($map['aiFallbackConfig']);
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
