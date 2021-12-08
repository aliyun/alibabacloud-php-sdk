<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\tlsSetting;
use AlibabaCloud\Tea\Model;

class TrafficPolicy extends Model
{
    /**
     * @description 负载均衡相关配置
     *
     * @var loadBalancerSettings
     */
    public $loadBalancerSettings;

    /**
     * @description tls相关配置
     *
     * @var tlsSetting
     */
    public $tlsSetting;
    protected $_name = [
        'loadBalancerSettings' => 'LoadBalancerSettings',
        'tlsSetting'           => 'TlsSetting',
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
        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = null !== $this->tlsSetting ? $this->tlsSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrafficPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerSettings'])) {
            $model->loadBalancerSettings = loadBalancerSettings::fromMap($map['LoadBalancerSettings']);
        }
        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = tlsSetting::fromMap($map['TlsSetting']);
        }

        return $model;
    }
}
