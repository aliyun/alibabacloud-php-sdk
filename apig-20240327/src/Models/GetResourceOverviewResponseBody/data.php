<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\api;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\gateway;

class data extends Model
{
    /**
     * @var api
     */
    public $api;

    /**
     * @var gateway
     */
    public $gateway;
    protected $_name = [
        'api' => 'api',
        'gateway' => 'gateway',
    ];

    public function validate()
    {
        if (null !== $this->api) {
            $this->api->validate();
        }
        if (null !== $this->gateway) {
            $this->gateway->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = null !== $this->api ? $this->api->toArray($noStream) : $this->api;
        }

        if (null !== $this->gateway) {
            $res['gateway'] = null !== $this->gateway ? $this->gateway->toArray($noStream) : $this->gateway;
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
        if (isset($map['api'])) {
            $model->api = api::fromMap($map['api']);
        }

        if (isset($map['gateway'])) {
            $model->gateway = gateway::fromMap($map['gateway']);
        }

        return $model;
    }
}
