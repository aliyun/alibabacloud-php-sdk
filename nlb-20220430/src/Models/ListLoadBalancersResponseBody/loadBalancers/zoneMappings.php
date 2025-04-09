<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers\zoneMappings\loadBalancerAddresses;

class zoneMappings extends Model
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
        'loadBalancerAddresses' => 'LoadBalancerAddresses',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
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
                $res['LoadBalancerAddresses'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerAddresses as $item1) {
                    $res['LoadBalancerAddresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerAddresses'])) {
            if (!empty($map['LoadBalancerAddresses'])) {
                $model->loadBalancerAddresses = [];
                $n1 = 0;
                foreach ($map['LoadBalancerAddresses'] as $item1) {
                    $model->loadBalancerAddresses[$n1++] = loadBalancerAddresses::fromMap($item1);
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
