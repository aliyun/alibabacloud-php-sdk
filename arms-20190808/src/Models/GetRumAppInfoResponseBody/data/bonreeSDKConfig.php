<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig\moduleConfig;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig\samplingConfig;
use AlibabaCloud\Tea\Model;

class bonreeSDKConfig extends Model
{
    /**
     * @description The module configuration.
     *
     * @var moduleConfig
     */
    public $moduleConfig;

    /**
     * @description Sampling configuration.
     *
     * @var samplingConfig
     */
    public $samplingConfig;
    protected $_name = [
        'moduleConfig' => 'moduleConfig',
        'samplingConfig' => 'samplingConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleConfig) {
            $res['moduleConfig'] = null !== $this->moduleConfig ? $this->moduleConfig->toMap() : null;
        }
        if (null !== $this->samplingConfig) {
            $res['samplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toMap() : null;
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
        if (isset($map['moduleConfig'])) {
            $model->moduleConfig = moduleConfig::fromMap($map['moduleConfig']);
        }
        if (isset($map['samplingConfig'])) {
            $model->samplingConfig = samplingConfig::fromMap($map['samplingConfig']);
        }

        return $model;
    }
}
