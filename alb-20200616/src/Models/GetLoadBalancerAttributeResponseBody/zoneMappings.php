<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings\loadBalancerAddresses;
use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of the vSwitch in the zone. Each zone can contain only one vSwitch and one subnet.
     *
     * @var loadBalancerAddresses[]
     */
    public $loadBalancerAddresses;

    /**
     * @description The type of IPv6 address that is used by the ALB instance. Valid values:
     *
     *   **Internet:** The ALB instance uses a public IP address. The domain name of the ALB instance is resolved to the public IP address. Therefore, the ALB instance can be accessed over the Internet.
     *   **Intranet:** The ALB instance uses a private IP address. The domain name of the ALB instance is resolved to the private IP address. Therefore, the ALB instance can be accessed over the VPC in which the ALB instance is deployed.
     *
     * @example vsw-bp12mw1f8k3jgy****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'loadBalancerAddresses' => 'LoadBalancerAddresses',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerAddresses) {
            $res['LoadBalancerAddresses'] = [];
            if (null !== $this->loadBalancerAddresses && \is_array($this->loadBalancerAddresses)) {
                $n = 0;
                foreach ($this->loadBalancerAddresses as $item) {
                    $res['LoadBalancerAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerAddresses'])) {
            if (!empty($map['LoadBalancerAddresses'])) {
                $model->loadBalancerAddresses = [];
                $n                            = 0;
                foreach ($map['LoadBalancerAddresses'] as $item) {
                    $model->loadBalancerAddresses[$n++] = null !== $item ? loadBalancerAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
