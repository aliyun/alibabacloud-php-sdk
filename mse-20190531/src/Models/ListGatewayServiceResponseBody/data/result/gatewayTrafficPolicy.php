<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\tls;

class gatewayTrafficPolicy extends Model
{
    /**
     * @var loadBalancerSettings
     */
    public $loadBalancerSettings;

    /**
     * @var tls
     */
    public $tls;
    protected $_name = [
        'loadBalancerSettings' => 'LoadBalancerSettings',
        'tls' => 'Tls',
    ];

    public function validate()
    {
        if (null !== $this->loadBalancerSettings) {
            $this->loadBalancerSettings->validate();
        }
        if (null !== $this->tls) {
            $this->tls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerSettings) {
            $res['LoadBalancerSettings'] = null !== $this->loadBalancerSettings ? $this->loadBalancerSettings->toArray($noStream) : $this->loadBalancerSettings;
        }

        if (null !== $this->tls) {
            $res['Tls'] = null !== $this->tls ? $this->tls->toArray($noStream) : $this->tls;
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
        if (isset($map['LoadBalancerSettings'])) {
            $model->loadBalancerSettings = loadBalancerSettings::fromMap($map['LoadBalancerSettings']);
        }

        if (isset($map['Tls'])) {
            $model->tls = tls::fromMap($map['Tls']);
        }

        return $model;
    }
}
