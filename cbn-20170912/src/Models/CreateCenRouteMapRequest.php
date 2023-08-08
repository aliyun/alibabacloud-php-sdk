<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenRouteMapRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example Include
     *
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @description The type of source network instance.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the source region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cenRegionId;

    /**
     * @description The ID of the source network instance.
     *
     * @example Include
     *
     * @var string
     */
    public $cidrMatchMode;

    /**
     * @description The prefix list.
     *
     * @example Include
     *
     * @var string
     */
    public $communityMatchMode;

    /**
     * @description The AS path.
     *
     * @example Additive
     *
     * @var string
     */
    public $communityOperateMode;

    /**
     * @description The priority of the routing policy. Valid values: **1** to **100**. A smaller value indicates a higher priority.
     *
     * >  You cannot specify the same priority for routing policies that apply in the same region and direction. The system matches routes against the match conditions of routing policies in descending order of priority. A smaller value indicates a higher priority. You must set the priorities to proper values.
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The action that is performed on the community. Valid values:
     *
     *   **Additive**: adds the community to the route.
     *   **Replace**: replaces the original community of the route.
     *
     * This parameter specifies the action to be performed when a route meets the match condition.
     * @example VPC
     *
     * @var string[]
     */
    public $destinationChildInstanceTypes;

    /**
     * @description The ID of the destination route table.
     *
     * @example 10.10.10.0/24
     *
     * @var string[]
     */
    public $destinationCidrBlocks;

    /**
     * @description The new priority of the route.
     *
     * Valid values: **1** to **100**. The default priority is **50**. A smaller value indicates a higher priority.
     *
     * This parameter specifies the action to be performed when a route meets the match condition.
     * @example vpc-afrfs434465fdf****
     *
     * @var string[]
     */
    public $destinationInstanceIds;

    /**
     * @description The types of destination network instance to which the routes belong. The following types of network instances are supported:
     *
     *   **VPC**: VPC
     *
     *   **VBR**: VBR
     *
     *   **CCN**: CCN instance
     *
     *   **VPN**: IPsec connection
     *
     **
     *
     **Note** This parameter does not take effect if the IPsec-VPN connection or SSL client is associated with a transit router through a VPN gateway and a VPC. This parameter takes effect only if the IPsec connection is directly connected to the transit router.
     *
     * >  The destination network instance types are valid only if the routing policy is applied to scenarios where routes are advertised from the gateway in the current region to network instances in the current region.
     * @example false
     *
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @description The prefix list against which routes are matched.
     *
     * You must specify the IP addresses in CIDR notation. You can enter at most 32 CIDR blocks.
     * @example vtb-adefrgtr144vf****
     *
     * @var string[]
     */
    public $destinationRouteTableIds;

    /**
     * @description The types of source network instance to which the routes belong. The following types of network instances are supported:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *   **CCN**: CCN instance
     *   **VPN**: VPN gateway or IPsec connection
     *   If the IPsec-VPN connection or SSL client is associated with a VPN gateway, the VPC associated with the VPN gateway must be connected to a transit router, and the VPN gateway must use BGP dynamic routing. Otherwise, this parameter cannot take effect.
     *   This parameter takes effect if the IPsec connection is directly connected to a transit router.
     *
     * You can specify one or more network instance types.
     * @example Permit
     *
     * @var string
     */
    public $mapResult;

    /**
     * @description Specifies whether to exclude the destination network instance IDs. Valid values:
     *
     *   **false** (default value): A route is a match if its destination network instance ID is in the list specified by **DestinationInstanceIds.N**.
     *   **true**: A route meets the match condition if its destination network instance ID is not in the list specified by **DestinationInstanceIds.N**.
     *
     * @example IPv4
     *
     * @var string
     */
    public $matchAddressType;

    /**
     * @description The IDs of the source network instances to which the routes belong. The following network instance types are supported:
     *
     *   VPC
     *   VBR
     *   CCN instance
     *   SAG instance
     *   The ID of the IPsec connection.
     *
     * You can enter at most 32 IDs.
     * @example 65501
     *
     * @var int[]
     */
    public $matchAsns;

    /**
     * @description The community.
     *
     * @example 65501:1
     *
     * @var string[]
     */
    public $matchCommunitySet;

    /**
     * @description The action to be performed on a route that meets all match conditions. Valid values:
     *
     *   **Permit**: the route is permitted.
     *   **Deny**: the route is denied.
     *
     * @example 20
     *
     * @var int
     */
    public $nextPriority;

    /**
     * @description The type of route to be matched against the match condition. The following route types are supported:
     *
     *   **System**: system routes that are automatically generated by the system.
     *   **Custom**: custom routes that are manually added.
     *   **BGP**: routes that are advertised over BGP.
     *
     * You can specify multiple route types.
     * @example 65501:1
     *
     * @var string[]
     */
    public $operateCommunitySet;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The community against which routes are matched.
     *
     * Specify the community in the format of n:m. Valid values of n and m: **1** to **65535**. Each community must comply with the RFC 1997 standard. The RFC 8092 standard that defines Border Gateway Protocol (BGP) large communities is not supported.
     *
     * >  If the configurations of the communities are incorrect, routes may fail to be advertised to your data center.
     * @example 50
     *
     * @var int
     */
    public $preference;

    /**
     * @description The ID of the source route table.
     *
     * @example 65501
     *
     * @var int[]
     */
    public $prependAsPath;

    /**
     * @description The IDs of the source route tables from which routes are evaluated. You can enter at most 32 route table IDs.
     *
     * @example 3
     *
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the route table of the transit router.
     *
     * If you do not specify a route table ID, the routing policy is automatically associated with the default route table of the transit router.
     * @example System
     *
     * @var string[]
     */
    public $routeTypes;

    /**
     * @description The IDs of the destination network instances to which the routes belong. The following network instance types are supported:
     *
     *   VPC
     *   VBR
     *   CCN instance
     *   SAG instance
     *   The ID of the IPsec connection.
     *
     * >  The destination network instance IDs are valid only if the routing policy is applied to scenarios where routes are advertised from the gateway in the current region to network instances in the current region.
     * @example VPC
     *
     * @var string[]
     */
    public $sourceChildInstanceTypes;

    /**
     * @description The ID of the routing policy.
     *
     * @example vpc-adeg3544fdf34vf****
     *
     * @var string[]
     */
    public $sourceInstanceIds;

    /**
     * @description The community set on which actions are performed.
     *
     * Specify the community in the format of n:m. Valid values of n and m: **1** to **65535**. Each community must comply with RFC 1997. The RFC 8092 standard that defines BGP large communities is not supported.
     *
     * >  If the configurations of the communities are incorrect, routes may fail to be advertised to your data center.
     * @example false
     *
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @description The priority of the routing policy that you want to associate with the current one.
     *
     *   This parameter takes effect only when the **MapResult** parameter is set to **Permit**. This way, the permitted route is matched against the next routing policy.
     *   The region and direction of the routing policy to be associated must be the same as those of the current routing policy.
     *   The priority of the next routing policy must be lower than the priority of the current routing policy.
     *
     * @example cn-beijing
     *
     * @var string[]
     */
    public $sourceRegionIds;

    /**
     * @description The ID of the region where the routing policy is applied.
     *
     * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     * @example vtb-adfr233vf34rvd4****
     *
     * @var string[]
     */
    public $sourceRouteTableIds;

    /**
     * @description The type of destination network instance.
     *
     * @example vtb-gw8nx3515m1mbd1z1****
     *
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @description The operation that you want to perform. Set the value to **CreateCenRouteMap**.
     *
     * @example RegionIn
     *
     * @var string
     */
    public $transmitDirection;
    protected $_name = [
        'asPathMatchMode'                    => 'AsPathMatchMode',
        'cenId'                              => 'CenId',
        'cenRegionId'                        => 'CenRegionId',
        'cidrMatchMode'                      => 'CidrMatchMode',
        'communityMatchMode'                 => 'CommunityMatchMode',
        'communityOperateMode'               => 'CommunityOperateMode',
        'description'                        => 'Description',
        'destinationChildInstanceTypes'      => 'DestinationChildInstanceTypes',
        'destinationCidrBlocks'              => 'DestinationCidrBlocks',
        'destinationInstanceIds'             => 'DestinationInstanceIds',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'mapResult'                          => 'MapResult',
        'matchAddressType'                   => 'MatchAddressType',
        'matchAsns'                          => 'MatchAsns',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'nextPriority'                       => 'NextPriority',
        'operateCommunitySet'                => 'OperateCommunitySet',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'preference'                         => 'Preference',
        'prependAsPath'                      => 'PrependAsPath',
        'priority'                           => 'Priority',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'routeTypes'                         => 'RouteTypes',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'transitRouterRouteTableId'          => 'TransitRouterRouteTableId',
        'transmitDirection'                  => 'TransmitDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPathMatchMode) {
            $res['AsPathMatchMode'] = $this->asPathMatchMode;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
        }
        if (null !== $this->cidrMatchMode) {
            $res['CidrMatchMode'] = $this->cidrMatchMode;
        }
        if (null !== $this->communityMatchMode) {
            $res['CommunityMatchMode'] = $this->communityMatchMode;
        }
        if (null !== $this->communityOperateMode) {
            $res['CommunityOperateMode'] = $this->communityOperateMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationChildInstanceTypes) {
            $res['DestinationChildInstanceTypes'] = $this->destinationChildInstanceTypes;
        }
        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = $this->destinationCidrBlocks;
        }
        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = $this->destinationInstanceIds;
        }
        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }
        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = $this->destinationRouteTableIds;
        }
        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }
        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }
        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = $this->matchAsns;
        }
        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = $this->matchCommunitySet;
        }
        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }
        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = $this->operateCommunitySet;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = $this->prependAsPath;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = $this->routeTypes;
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = $this->sourceChildInstanceTypes;
        }
        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = $this->sourceInstanceIds;
        }
        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }
        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = $this->sourceRegionIds;
        }
        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = $this->sourceRouteTableIds;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }
        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenRouteMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPathMatchMode'])) {
            $model->asPathMatchMode = $map['AsPathMatchMode'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
        }
        if (isset($map['CidrMatchMode'])) {
            $model->cidrMatchMode = $map['CidrMatchMode'];
        }
        if (isset($map['CommunityMatchMode'])) {
            $model->communityMatchMode = $map['CommunityMatchMode'];
        }
        if (isset($map['CommunityOperateMode'])) {
            $model->communityOperateMode = $map['CommunityOperateMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationChildInstanceTypes'])) {
            if (!empty($map['DestinationChildInstanceTypes'])) {
                $model->destinationChildInstanceTypes = $map['DestinationChildInstanceTypes'];
            }
        }
        if (isset($map['DestinationCidrBlocks'])) {
            if (!empty($map['DestinationCidrBlocks'])) {
                $model->destinationCidrBlocks = $map['DestinationCidrBlocks'];
            }
        }
        if (isset($map['DestinationInstanceIds'])) {
            if (!empty($map['DestinationInstanceIds'])) {
                $model->destinationInstanceIds = $map['DestinationInstanceIds'];
            }
        }
        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }
        if (isset($map['DestinationRouteTableIds'])) {
            if (!empty($map['DestinationRouteTableIds'])) {
                $model->destinationRouteTableIds = $map['DestinationRouteTableIds'];
            }
        }
        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }
        if (isset($map['MatchAddressType'])) {
            $model->matchAddressType = $map['MatchAddressType'];
        }
        if (isset($map['MatchAsns'])) {
            if (!empty($map['MatchAsns'])) {
                $model->matchAsns = $map['MatchAsns'];
            }
        }
        if (isset($map['MatchCommunitySet'])) {
            if (!empty($map['MatchCommunitySet'])) {
                $model->matchCommunitySet = $map['MatchCommunitySet'];
            }
        }
        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }
        if (isset($map['OperateCommunitySet'])) {
            if (!empty($map['OperateCommunitySet'])) {
                $model->operateCommunitySet = $map['OperateCommunitySet'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['PrependAsPath'])) {
            if (!empty($map['PrependAsPath'])) {
                $model->prependAsPath = $map['PrependAsPath'];
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteTypes'])) {
            if (!empty($map['RouteTypes'])) {
                $model->routeTypes = $map['RouteTypes'];
            }
        }
        if (isset($map['SourceChildInstanceTypes'])) {
            if (!empty($map['SourceChildInstanceTypes'])) {
                $model->sourceChildInstanceTypes = $map['SourceChildInstanceTypes'];
            }
        }
        if (isset($map['SourceInstanceIds'])) {
            if (!empty($map['SourceInstanceIds'])) {
                $model->sourceInstanceIds = $map['SourceInstanceIds'];
            }
        }
        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }
        if (isset($map['SourceRegionIds'])) {
            if (!empty($map['SourceRegionIds'])) {
                $model->sourceRegionIds = $map['SourceRegionIds'];
            }
        }
        if (isset($map['SourceRouteTableIds'])) {
            if (!empty($map['SourceRouteTableIds'])) {
                $model->sourceRouteTableIds = $map['SourceRouteTableIds'];
            }
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }
        if (isset($map['TransmitDirection'])) {
            $model->transmitDirection = $map['TransmitDirection'];
        }

        return $model;
    }
}
