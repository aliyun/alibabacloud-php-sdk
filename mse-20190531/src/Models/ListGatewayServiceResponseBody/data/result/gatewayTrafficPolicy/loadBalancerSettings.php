<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings\consistentHashLBConfig;
use AlibabaCloud\Tea\Model;

class loadBalancerSettings extends Model
{
    /**
     * @description The consistent hashing settings.
     *
     * @var consistentHashLBConfig
     */
    public $consistentHashLBConfig;

    /**
     * @description The load balancing type.
     *
     *   ROUND_ROBIN
     *   LEAST_CONN
     *   RANDOM
     *   CONSISTENT_HASH
     *
     * @example RANDOM
     *
     * @var string
     */
    public $loadbalancerType;

    /**
     * @description The prefetch time of the least connection load balancing.
     *
     * @example 10
     *
     * @var int
     */
    public $warmupDuration;
    protected $_name = [
        'consistentHashLBConfig' => 'ConsistentHashLBConfig',
        'loadbalancerType' => 'LoadbalancerType',
        'warmupDuration' => 'WarmupDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistentHashLBConfig) {
            $res['ConsistentHashLBConfig'] = null !== $this->consistentHashLBConfig ? $this->consistentHashLBConfig->toMap() : null;
        }
        if (null !== $this->loadbalancerType) {
            $res['LoadbalancerType'] = $this->loadbalancerType;
        }
        if (null !== $this->warmupDuration) {
            $res['WarmupDuration'] = $this->warmupDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsistentHashLBConfig'])) {
            $model->consistentHashLBConfig = consistentHashLBConfig::fromMap($map['ConsistentHashLBConfig']);
        }
        if (isset($map['LoadbalancerType'])) {
            $model->loadbalancerType = $map['LoadbalancerType'];
        }
        if (isset($map['WarmupDuration'])) {
            $model->warmupDuration = $map['WarmupDuration'];
        }

        return $model;
    }
}
