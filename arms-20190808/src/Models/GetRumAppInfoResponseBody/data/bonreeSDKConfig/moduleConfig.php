<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DataBonreeSDKConfigModuleConfigDefaultConfigValue;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DataBonreeSDKConfigModuleConfigVersionConfigsValue;
use AlibabaCloud\Tea\Model;

class moduleConfig extends Model
{
    /**
     * @description The default configuration of the application.
     *
     * @var DataBonreeSDKConfigModuleConfigDefaultConfigValue[]
     */
    public $defaultConfig;

    /**
     * @description Indicates whether the configuration is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The version configurations of the application.
     *
     * @var DataBonreeSDKConfigModuleConfigVersionConfigsValue[]
     */
    public $versionConfigs;
    protected $_name = [
        'defaultConfig' => 'defaultConfig',
        'enable' => 'enable',
        'versionConfigs' => 'versionConfigs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultConfig) {
            $res['defaultConfig'] = [];
            if (null !== $this->defaultConfig && \is_array($this->defaultConfig)) {
                foreach ($this->defaultConfig as $key => $val) {
                    $res['defaultConfig'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->versionConfigs) {
            $res['versionConfigs'] = [];
            if (null !== $this->versionConfigs && \is_array($this->versionConfigs)) {
                foreach ($this->versionConfigs as $key => $val) {
                    $res['versionConfigs'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultConfig'])) {
            $model->defaultConfig = $map['defaultConfig'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['versionConfigs'])) {
            $model->versionConfigs = $map['versionConfigs'];
        }

        return $model;
    }
}
