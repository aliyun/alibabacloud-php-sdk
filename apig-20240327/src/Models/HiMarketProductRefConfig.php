<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketProductRefConfig\apigRefConfig;

class HiMarketProductRefConfig extends Model
{
    /**
     * @var apigRefConfig
     */
    public $apigRefConfig;

    /**
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'apigRefConfig' => 'apigRefConfig',
        'gatewayId' => 'gatewayId',
    ];

    public function validate()
    {
        if (null !== $this->apigRefConfig) {
            $this->apigRefConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apigRefConfig) {
            $res['apigRefConfig'] = null !== $this->apigRefConfig ? $this->apigRefConfig->toArray($noStream) : $this->apigRefConfig;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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
        if (isset($map['apigRefConfig'])) {
            $model->apigRefConfig = apigRefConfig::fromMap($map['apigRefConfig']);
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        return $model;
    }
}
