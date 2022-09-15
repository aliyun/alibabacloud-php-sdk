<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\tls;
use AlibabaCloud\Tea\Model;

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
        'tls'                  => 'Tls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerSettings) {
            $res['LoadBalancerSettings'] = null !== $this->loadBalancerSettings ? $this->loadBalancerSettings->toMap() : null;
        }
        if (null !== $this->tls) {
            $res['Tls'] = null !== $this->tls ? $this->tls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayTrafficPolicy
     */
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
