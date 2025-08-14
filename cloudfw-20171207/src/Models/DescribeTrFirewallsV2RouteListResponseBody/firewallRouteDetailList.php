<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponseBody;

use AlibabaCloud\Dara\Model;

class firewallRouteDetailList extends Model
{
    /**
     * @var string
     */
    public $trFirewallRouteDestination;

    /**
     * @var string
     */
    public $trFirewallRouteNexthop;

    /**
     * @var string
     */
    public $trFirewallRoutePolicyId;

    /**
     * @var string
     */
    public $trFirewallRouteTableId;
    protected $_name = [
        'trFirewallRouteDestination' => 'TrFirewallRouteDestination',
        'trFirewallRouteNexthop' => 'TrFirewallRouteNexthop',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
        'trFirewallRouteTableId' => 'TrFirewallRouteTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trFirewallRouteDestination) {
            $res['TrFirewallRouteDestination'] = $this->trFirewallRouteDestination;
        }

        if (null !== $this->trFirewallRouteNexthop) {
            $res['TrFirewallRouteNexthop'] = $this->trFirewallRouteNexthop;
        }

        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        if (null !== $this->trFirewallRouteTableId) {
            $res['TrFirewallRouteTableId'] = $this->trFirewallRouteTableId;
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
        if (isset($map['TrFirewallRouteDestination'])) {
            $model->trFirewallRouteDestination = $map['TrFirewallRouteDestination'];
        }

        if (isset($map['TrFirewallRouteNexthop'])) {
            $model->trFirewallRouteNexthop = $map['TrFirewallRouteNexthop'];
        }

        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        if (isset($map['TrFirewallRouteTableId'])) {
            $model->trFirewallRouteTableId = $map['TrFirewallRouteTableId'];
        }

        return $model;
    }
}
