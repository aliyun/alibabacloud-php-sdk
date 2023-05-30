<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponseBody;

use AlibabaCloud\Tea\Model;

class firewallRouteDetailList extends Model
{
    /**
     * @example 192.168.10.0/25
     *
     * @var string
     */
    public $trFirewallRouteDestination;

    /**
     * @example tr-attach-hnxab1y0pxn16p****
     *
     * @var string
     */
    public $trFirewallRouteNexthop;

    /**
     * @example policy-04ecbbc6720d4f90****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;

    /**
     * @example vtb-2zeockxxxorv0mnhz****
     *
     * @var string
     */
    public $trFirewallRouteTableId;
    protected $_name = [
        'trFirewallRouteDestination' => 'TrFirewallRouteDestination',
        'trFirewallRouteNexthop'     => 'TrFirewallRouteNexthop',
        'trFirewallRoutePolicyId'    => 'TrFirewallRoutePolicyId',
        'trFirewallRouteTableId'     => 'TrFirewallRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return firewallRouteDetailList
     */
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
