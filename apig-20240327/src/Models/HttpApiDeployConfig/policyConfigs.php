<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiFallbackConfig;

class policyConfigs extends Model
{
    /**
     * @var aiFallbackConfig
     */
    public $aiFallbackConfig;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aiFallbackConfig' => 'aiFallbackConfig',
        'enable' => 'enable',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->aiFallbackConfig) {
            $this->aiFallbackConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiFallbackConfig) {
            $res['aiFallbackConfig'] = null !== $this->aiFallbackConfig ? $this->aiFallbackConfig->toArray($noStream) : $this->aiFallbackConfig;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
