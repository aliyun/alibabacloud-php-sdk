<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeRouteEntryListRequest extends Model
{
    /**
     * @description The destination CIDR blocks of the routes.
     *
     * @var string[]
     */
    public $destCidrBlockList;

    /**
     * @description The destination CIDR block of the route. IPv4 and IPv6 CIDR blocks are supported.
     *
     * @example 192.168.2.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4**
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResult;

    /**
     * @description The ID of the next hop.
     *
     * @example vpn-bp10zyaph5cc8b7c7****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The next hop type. Valid values:
     *
     *   **Instance**: an Elastic Compute Service (ECS) instance. This is the default value.
     *   **HaVip**: a high-availability virtual IP address (HAVIP).
     *   **VpnGateway**: a VPN gateway.
     *   **NatGateway**: a NAT gateway.
     *   **NetworkInterface**: a secondary elastic network interface (ENI).
     *   **RouterInterface**: a router interface.
     *   **IPv6Gateway**: an IPv6 gateway.
     *   **Attachment**: a transit router.
     *   **Ipv4Gateway**: an IPv4 gateway.
     *   **GatewayEndpoint**: a gateway endpoint.
     *   **CenBasic**: CEN does not support transit routers.
     *   **Ecr**: Express Connect Router (ECR).
     *
     * @example Instance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the route table.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the route that you want to query.
     *
     * @example rte-bp1mnnr2al0naomnp****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description The name of the route entry.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description The route type. Valid values:
     *
     *   **Custom**: custom routes.
     *   **System**: system routes.
     *   **BGP**: BGP routes.
     *   **CEN**: Cloud Enterprise Network (CEN) routes.
     *   **ECR**: Express Connect Router (ECR) routes.
     *
     * @example System
     *
     * @var string
     */
    public $routeEntryType;

    /**
     * @description The ID of the route table that you want to query.
     *
     * This parameter is required.
     * @example vtb-bp1r9pvl4xen8s9ju****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description Specifies whether to host the route. If the parameter is empty, the route is not hosted.
     *
     * Set the value to **TR**, which specifies that the route is hosted by a transit router.
     * @example TR
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'destCidrBlockList'    => 'DestCidrBlockList',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'ipVersion'            => 'IpVersion',
        'maxResult'            => 'MaxResult',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
        'routeEntryType'       => 'RouteEntryType',
        'routeTableId'         => 'RouteTableId',
        'serviceType'          => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destCidrBlockList) {
            $res['DestCidrBlockList'] = $this->destCidrBlockList;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteEntryListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestCidrBlockList'])) {
            if (!empty($map['DestCidrBlockList'])) {
                $model->destCidrBlockList = $map['DestCidrBlockList'];
            }
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
