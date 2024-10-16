<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersResponseBody\loadBalancers\zoneMappings\loadBalancerAddresses;
use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @var loadBalancerAddresses[]
     */
    public $loadBalancerAddresses;

    /**
     * @example vsw-2zemule5dz7okwqfv****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-g
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
