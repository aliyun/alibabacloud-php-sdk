<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DataBonreeSDKConfigModuleConfigValue;
use AlibabaCloud\Tea\Model;

class bonreeSDKConfig extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var DataBonreeSDKConfigModuleConfigValue[]
     */
    public $moduleConfig;
    protected $_name = [
        'enable'       => 'enable',
        'moduleConfig' => 'moduleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->moduleConfig) {
            $res['moduleConfig'] = [];
            if (null !== $this->moduleConfig && \is_array($this->moduleConfig)) {
                foreach ($this->moduleConfig as $key => $val) {
                    $res['moduleConfig'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bonreeSDKConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['moduleConfig'])) {
            $model->moduleConfig = $map['moduleConfig'];
        }

        return $model;
    }
}
