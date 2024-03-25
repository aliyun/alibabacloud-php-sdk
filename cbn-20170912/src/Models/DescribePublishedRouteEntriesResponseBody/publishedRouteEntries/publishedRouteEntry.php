<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry\conflicts;
use AlibabaCloud\Tea\Model;

class publishedRouteEntry extends Model
{
    /**
     * @description The ID of the route table configured on the network instance.
     *
     * @example vtb-il7qut3mjgtlcbpk2****
     *
     * @var string
     */
    public $childInstanceRouteTableId;

    /**
     * @description A list of conflicting routes.
     *
     * @var conflicts
     */
    public $conflicts;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 172.16.0.0/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the instance specified as the next hop in the route.
     *
     * @example ecs-bp18sth14qii3pn****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of the instance specified as the next hop in the route.
     *
     *   **Instance**: ECS instance
     *   **HaVip**: high-availability virtual IP address (HAVIP).
     *   **RouterInterface**: router interface.
     *   **NetworkInterface**: elastic network interface (ENI).
     *   **VpnGateway**: VPN gateway.
     *   **IPv6Gateway**: IPv6 gateway.
     *   **NatGateway**: NAT gateway.
     *   **Attachment**: network instance connection
     *   **service**: cloud service
     *   **VBR**: VBR
     *   **CCN**: CCN instance
     *   **VPC**: VPC
     *   **local**: system route. No next hop is specified.
     *   **TR**: transit router
     *   **BlackHole**: blackhole route. No next hop is specified.
     *   **EcRouterInterface**: router interface for Express Connect
     *   **HealthCheck**: health check
     *   **AS**: access gateway for CCN
     *   **classicLink**: classic network-type instance
     *   **GatewayEndpoint**: gateway endpoint
     *   **CPE**: data center connected to the VBR
     *
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description Indicates whether the route is allowed to be advertised to or withdrawn from the CEN instance. Valid values:
     *
     *   **true**: The route is allowed to be advertised to or withdrawn from the CEN instance.
     *   **false**: The route is not allowed to be advertised to or withdrawn from the CEN instance.
     *
     * @example true
     *
     * @var bool
     */
    public $operationalMode;

    /**
     * @description Indicates whether the route is advertised to the CEN instance. Valid values:
     *
     *   **Published**: The route is advertised to the CEN instance.
     *   **NonPublished**: The route is not advertised to the CEN instance.
     *
     * @example Published
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @description The type of the route. Valid values:
     *
     *   **CEN**: route that is advertised through CEN
     *   **System**: system route
     *   **Custom**: custom route
     *
     * @example System
     *
     * @var string
     */
    public $routeType;
    protected $_name = [
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'conflicts'                 => 'Conflicts',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'nextHopId'                 => 'NextHopId',
        'nextHopType'               => 'NextHopType',
        'operationalMode'           => 'OperationalMode',
        'publishStatus'             => 'PublishStatus',
        'routeType'                 => 'RouteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childInstanceRouteTableId) {
            $res['ChildInstanceRouteTableId'] = $this->childInstanceRouteTableId;
        }
        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toMap() : null;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->operationalMode) {
            $res['OperationalMode'] = $this->operationalMode;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishedRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildInstanceRouteTableId'])) {
            $model->childInstanceRouteTableId = $map['ChildInstanceRouteTableId'];
        }
        if (isset($map['Conflicts'])) {
            $model->conflicts = conflicts::fromMap($map['Conflicts']);
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['OperationalMode'])) {
            $model->operationalMode = $map['OperationalMode'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        return $model;
    }
}
