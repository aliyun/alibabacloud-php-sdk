<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @description Indicates whether the route is available. Valid values:
     *
     *   **0**: unavailable
     *   **1**: available
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
     * @description The type of the next hop. Valid values:
     *
     *   **Instance**: an ECS instance
     *   **HaVip**: an HAVIP
     *   **VpnGateway**: a VPN gateway
     *   **NatGateway**: a NAT gateway
     *   **NetworkInterface**: a secondary ENI
     *   **RouterInterface**: a router interface
     *   **IPv6Gateway**: an IPv6 gateway
     *   **Attachment**: a transit router
     *
     * @example HaVip
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The weight of the route.
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
