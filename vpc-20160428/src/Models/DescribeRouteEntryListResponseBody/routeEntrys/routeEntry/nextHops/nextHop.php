<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops\nextHop\nextHopRelatedInfo;
use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @description Indicates whether the route is available. Valid values:
     *
     *   **0**: unavailable
     *   **1**: available
     *
     * >  This parameter is returned if the next hop type is set to **RouterInterface**.
     * @example 1
     *
     * @var int
     */
    public $enabled;

    /**
     * @description The ID of the next hop.
     *
     * @example vpn-bp10zyaph5cc8b7c7****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The region ID of the next hop.
     *
     * >  This parameter is returned if the next hop type is set to **RouterInterface**.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @description The information about the next hop.
     *
     * @var nextHopRelatedInfo
     */
    public $nextHopRelatedInfo;

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
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The weight of the route.
     *
     * >  This parameter is returned if the next hop type is set to **RouterInterface**.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'enabled'            => 'Enabled',
        'nextHopId'          => 'NextHopId',
        'nextHopRegionId'    => 'NextHopRegionId',
        'nextHopRelatedInfo' => 'NextHopRelatedInfo',
        'nextHopType'        => 'NextHopType',
        'weight'             => 'Weight',
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
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopRelatedInfo) {
            $res['NextHopRelatedInfo'] = null !== $this->nextHopRelatedInfo ? $this->nextHopRelatedInfo->toMap() : null;
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
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopRelatedInfo'])) {
            $model->nextHopRelatedInfo = nextHopRelatedInfo::fromMap($map['NextHopRelatedInfo']);
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
