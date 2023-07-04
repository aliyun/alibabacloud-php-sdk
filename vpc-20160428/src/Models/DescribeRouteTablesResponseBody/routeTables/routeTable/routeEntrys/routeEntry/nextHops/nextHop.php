<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @description Indicates whether the next hop feature is enabled.
     *
     *   **0**: The next hop feature is disabled.
     *   **1**: The next hop feature is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $enabled;

    /**
     * @description The ID of the next hop.
     *
     * @example ri-2zeo3xzyf38r4urzdpvqw
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of the next hop.
     *
     *   **Instance**: The next hop is an Elastic Compute Service (ECS) instance.
     *   **HaVip**: The next hop is a high-availability virtual IP address (HAVIP).
     *   **VpnGateway**: The next hop is a VPN gateway.
     *   **NatGateway**: The next hop is a NAT gateway.
     *   **NetworkInterface**: The next hop is a secondary elastic network interface (ENI).
     *   **RouterInterface**: The next hop is a router interface.
     *   **IPv6Gateway**: The next hop is an IPv6 gateway.
     *
     * @example HaVip
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The route weight of the next hop.
     *
     * @example 80
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'enabled'     => 'Enabled',
        'nextHopId'   => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
