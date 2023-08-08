<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\asPaths;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\communities;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\conflicts;
use AlibabaCloud\Tea\Model;

class cenRouteEntry extends Model
{
    /**
     * @description The autonomous system (AS) paths of the routes.
     *
     * @var asPaths
     */
    public $asPaths;

    /**
     * @description The routing policy that the routes match.
     *
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @description The community attributes of the route entry.
     *
     * @var communities
     */
    public $communities;

    /**
     * @description A list of overlapping routes.
     *
     * @var conflicts
     */
    public $conflicts;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the instance specified as the next hop in the route.
     *
     * @example vbr-bp13gtbhdp0pfqg6s****
     *
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @description The ID of the region where the instance specified as the next hop in the route belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @description The type of the instance specified as the next hop in the route. Valid values:
     *
     *   **Instance**: Elastic Compute Service (ECS) instance.
     *   **HaVip**: high-availability virtual IP address (HAVIP).
     *   **RouterInterface**: router interface.
     *   **NetworkInterface**: elastic network interface (ENI).
     *   **VpnGateway**: VPN gateway.
     *   **IPv6Gateway**: IPv6 gateway.
     *   **NatGateway**: NAT gateway.
     *   **Attachment**: network instance connection.
     *   **service**: cloud service.
     *   **VBR**: VBR.
     *   **CCN**: CCN instance.
     *   **VPC**: VPC.
     *   **local**: system route. No next hop is specified.
     *   **TR**: transit router.
     *   \*\*BlackHole\*\*: blackhole route. No next hop is specified.
     *   \*\*EcRouterInterface\*\*: router interface for Express Connect
     *   **HealthCheck**: health check.
     *   **AS**: access gateway for CCN.
     *   **classicLink**: classic network-type instance.
     *   **GatewayEndpoint**: gateway endpoint.
     *   **CPE**: data center connected to the VBR.
     *
     * @example VBR
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
     * @description Indicates whether the route is advertised to the CEN instance. Valid values: Valid values:
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
     * @description The ID of the route table.
     *
     * @example vtb-bp1r9pvl4xen8s9ju****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The status of the route. Valid values:
     *
     *   **Active**: available
     *   **Candidate**: standby
     *   **Rejected**: rejected
     *   **Prohibited**: prohibited
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the route. Valid values: Valid values:
     *
     *   **CEN**: advertised by CEN
     *   **System**: system route
     *   **Custom**: custom route
     *
     * @example CEN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'asPaths'              => 'AsPaths',
        'cenRouteMapRecords'   => 'CenRouteMapRecords',
        'communities'          => 'Communities',
        'conflicts'            => 'Conflicts',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopInstanceId'    => 'NextHopInstanceId',
        'nextHopRegionId'      => 'NextHopRegionId',
        'nextHopType'          => 'NextHopType',
        'operationalMode'      => 'OperationalMode',
        'publishStatus'        => 'PublishStatus',
        'routeTableId'         => 'RouteTableId',
        'status'               => 'Status',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toMap() : null;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toMap() : null;
        }
        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toMap() : null;
        }
        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toMap() : null;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
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
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPaths'])) {
            $model->asPaths = asPaths::fromMap($map['AsPaths']);
        }
        if (isset($map['CenRouteMapRecords'])) {
            $model->cenRouteMapRecords = cenRouteMapRecords::fromMap($map['CenRouteMapRecords']);
        }
        if (isset($map['Communities'])) {
            $model->communities = communities::fromMap($map['Communities']);
        }
        if (isset($map['Conflicts'])) {
            $model->conflicts = conflicts::fromMap($map['Conflicts']);
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
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
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
