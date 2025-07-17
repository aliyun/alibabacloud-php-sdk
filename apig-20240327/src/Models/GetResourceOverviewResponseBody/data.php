<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\api;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\gateway;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description API information.
     *
     * @var api
     */
    public $api;

    /**
     * @description Gateway information.
     *
     * @var gateway
     */
    public $gateway;
    protected $_name = [
        'api' => 'api',
        'gateway' => 'gateway',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = null !== $this->api ? $this->api->toMap() : null;
        }
        if (null !== $this->gateway) {
            $res['gateway'] = null !== $this->gateway ? $this->gateway->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
