<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody\zoneMappings\loadBalancerAddresses;
use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The IP address of the ALB instance.
     *
     * @var loadBalancerAddresses[]
     */
    public $loadBalancerAddresses;

    /**
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone of an ALB instance.
     *
     * @example vsw-bp12mw1f8k3jgy****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the ALB instance.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/189196.html) operation to query the most recent zone list.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'loadBalancerAddresses' => 'LoadBalancerAddresses',
        'status'                => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
