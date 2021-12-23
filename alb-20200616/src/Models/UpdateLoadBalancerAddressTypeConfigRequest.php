<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAddressTypeConfigRequest\zoneMappings;
use AlibabaCloud\Tea\Model;

class UpdateLoadBalancerAddressTypeConfigRequest extends Model
{
    /**
     * @description 目标网络类型
     *
     * @var string
     */
    public $addressType;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 是否只预检此次请求
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description 实例id
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 可用区及交换机映射列表
     *
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressType'    => 'AddressType',
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'zoneMappings'   => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoadBalancerAddressTypeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
