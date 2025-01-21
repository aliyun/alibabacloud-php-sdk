<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig\moduleConfig;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig\samplingConfig;

class bonreeSDKConfig extends Model
{
    /**
     * @var moduleConfig
     */
    public $moduleConfig;
    /**
     * @var samplingConfig
     */
    public $samplingConfig;
    protected $_name = [
        'moduleConfig'   => 'moduleConfig',
        'samplingConfig' => 'samplingConfig',
    ];

    public function validate()
    {
        if (null !== $this->moduleConfig) {
            $this->moduleConfig->validate();
        }
        if (null !== $this->samplingConfig) {
            $this->samplingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleConfig) {
            $res['moduleConfig'] = null !== $this->moduleConfig ? $this->moduleConfig->toArray($noStream) : $this->moduleConfig;
        }

        if (null !== $this->samplingConfig) {
            $res['samplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toArray($noStream) : $this->samplingConfig;
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
        if (isset($map['moduleConfig'])) {
            $model->moduleConfig = moduleConfig::fromMap($map['moduleConfig']);
        }

        if (isset($map['samplingConfig'])) {
            $model->samplingConfig = samplingConfig::fromMap($map['samplingConfig']);
        }

        return $model;
    }
}
