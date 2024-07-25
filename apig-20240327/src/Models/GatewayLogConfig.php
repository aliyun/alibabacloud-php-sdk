<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayLogConfig\slsConfig;
use AlibabaCloud\Tea\Model;

class GatewayLogConfig extends Model
{
    /**
     * @var slsConfig
     */
    public $slsConfig;
    protected $_name = [
        'slsConfig' => 'slsConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsConfig) {
            $res['slsConfig'] = null !== $this->slsConfig ? $this->slsConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayLogConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['slsConfig'])) {
            $model->slsConfig = slsConfig::fromMap($map['slsConfig']);
        }

        return $model;
    }
}
