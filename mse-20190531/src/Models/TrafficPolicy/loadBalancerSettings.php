<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;

use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings\consistentHashLBConfig;
use AlibabaCloud\Tea\Model;

class loadBalancerSettings extends Model
{
    /**
     * @description 一致性hash相关配置
     *
     * @var consistentHashLBConfig
     */
    public $consistentHashLBConfig;

    /**
     * @description 负载均衡类型，枚举类可为ROUND_ROBIN, LEAST_CONN,RANDOM, CONSISTENT_HASH
     *
     * @var string
     */
    public $loadbalancerType;
    protected $_name = [
        'consistentHashLBConfig' => 'ConsistentHashLBConfig',
        'loadbalancerType'       => 'LoadbalancerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistentHashLBConfig) {
            $res['ConsistentHashLBConfig'] = null !== $this->consistentHashLBConfig ? $this->consistentHashLBConfig->toMap() : null;
        }
        if (null !== $this->loadbalancerType) {
            $res['LoadbalancerType'] = $this->loadbalancerType;
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

        return $model;
    }
}
