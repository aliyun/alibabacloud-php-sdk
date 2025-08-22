<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DataBonreeSDKConfigModuleConfigDefaultConfigValue;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DataBonreeSDKConfigModuleConfigVersionConfigsValue;

class moduleConfig extends Model
{
    /**
     * @var DataBonreeSDKConfigModuleConfigDefaultConfigValue[]
     */
    public $defaultConfig;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var DataBonreeSDKConfigModuleConfigVersionConfigsValue[]
     */
    public $versionConfigs;
    protected $_name = [
        'defaultConfig' => 'defaultConfig',
        'enable' => 'enable',
        'versionConfigs' => 'versionConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->defaultConfig)) {
            Model::validateArray($this->defaultConfig);
        }
        if (\is_array($this->versionConfigs)) {
            Model::validateArray($this->versionConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultConfig) {
            if (\is_array($this->defaultConfig)) {
                $res['defaultConfig'] = [];
                foreach ($this->defaultConfig as $key1 => $value1) {
                    $res['defaultConfig'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->versionConfigs) {
            if (\is_array($this->versionConfigs)) {
                $res['versionConfigs'] = [];
                foreach ($this->versionConfigs as $key1 => $value1) {
                    $res['versionConfigs'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['defaultConfig'])) {
            if (!empty($map['defaultConfig'])) {
                $model->defaultConfig = [];
                foreach ($map['defaultConfig'] as $key1 => $value1) {
                    $model->defaultConfig[$key1] = DataBonreeSDKConfigModuleConfigDefaultConfigValue::fromMap($value1);
                }
            }
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['versionConfigs'])) {
            if (!empty($map['versionConfigs'])) {
                $model->versionConfigs = [];
                foreach ($map['versionConfigs'] as $key1 => $value1) {
                    $model->versionConfigs[$key1] = DataBonreeSDKConfigModuleConfigVersionConfigsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
