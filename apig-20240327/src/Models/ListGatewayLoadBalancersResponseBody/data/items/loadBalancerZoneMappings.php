<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\loadBalancerZoneMappings\loadBalancerAddresses;

class loadBalancerZoneMappings extends Model
{
    /**
     * @var loadBalancerAddresses[]
     */
    public $loadBalancerAddresses;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'loadBalancerAddresses' => 'loadBalancerAddresses',
        'status' => 'status',
        'vSwitchId' => 'vSwitchId',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancerAddresses)) {
            Model::validateArray($this->loadBalancerAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerAddresses) {
            if (\is_array($this->loadBalancerAddresses)) {
                $res['loadBalancerAddresses'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerAddresses as $item1) {
                    $res['loadBalancerAddresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['loadBalancerAddresses'])) {
            if (!empty($map['loadBalancerAddresses'])) {
                $model->loadBalancerAddresses = [];
                $n1 = 0;
                foreach ($map['loadBalancerAddresses'] as $item1) {
                    $model->loadBalancerAddresses[$n1] = loadBalancerAddresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
