<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayLogConfig\slsConfig;

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
        if (null !== $this->slsConfig) {
            $this->slsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsConfig) {
            $res['slsConfig'] = null !== $this->slsConfig ? $this->slsConfig->toArray($noStream) : $this->slsConfig;
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
        if (isset($map['slsConfig'])) {
            $model->slsConfig = slsConfig::fromMap($map['slsConfig']);
        }

        return $model;
    }
}
