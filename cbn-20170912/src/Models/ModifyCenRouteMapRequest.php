<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ModifyCenRouteMapRequest extends Model
{
    /**
     * @description The AS paths against which routes are matched.
     *
     * > Only the AS-SEQUENCE parameter is supported. The AS-SET, AS-CONFED-SEQUENCE, and AS-CONFED-SET parameters are not supported. In other words, only the AS number list is supported. Sets and sub-lists are not supported.
     * @example Include
     *
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @description The ID of the routing policy.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description 22
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cenRegionId;

    /**
     * @description vtb-adfg53c322v****
     *
     * @example Include
     *
     * @var string
     */
    public $cidrMatchMode;

    /**
     * @description The description of the routing policy.
     *
     * The description cannot start with `http://` or `https://`. It must start with a letter and can contain letters, digits, hyphens (-), periods (.), and underscores (\_).
     * @example Include
     *
     * @var string
     */
    public $communityMatchMode;

    /**
     * @description The match method that is used to match routes against the AS paths. Valid values:
     *
     *   **Include**: fuzzy match. A route meets the match condition if the AS path of the route overlaps with the AS paths specified in the match condition.
     *   **Complete**: exact match. A route is a match only if the AS path of the route is the same as an AS path specified in the match condition.
     *
     * @example Additive
     *
     * @var string
     */
    public $communityOperateMode;

    /**
     * @description cn-beijing
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description VPC
     *
     * @example VPC
     *
     * @var string[]
     */
    public $destinationChildInstanceTypes;

    /**
     * @description The ID of the request.
     *
     * @example 10.10.10.0/24
     *
     * @var string[]
     */
    public $destinationCidrBlocks;

    /**
     * @description vtb-acdbvtbr342cd****
     *
     * @example vpc-avcdsg34ds****
     *
     * @var string[]
     */
    public $destinationInstanceIds;

    /**
     * @description System
     *
     * @example false
     *
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @description The IDs of the destination network instances to which the routes belong. The following network instance types are supported:
     *
     *   VPC
     *   VBR
     *   CCN instance
     *   SAG instance
     *   The ID of the IPsec-VPN connection.
     *
     * > The destination instance IDs take effect only when Direction is set to Export from Regional Gateway and the destination instances are deployed in the current region.
     * @example vtb-adfg53c322v****
     *
     * @var string[]
     */
    public $destinationRouteTableIds;

    /**
     * @description Specifies whether to exclude the destination network instance IDs. Valid values:
     *
     *   **false** (default value): A route is a match if its destination network instance ID is in the list specified by **DestinationInstanceIds.N**.
     *   **true**: A route meets the match condition if its destination network instance ID is not in the list specified by **DestinationInstanceIds.N**.
     *
     * @example Permit
     *
     * @var string
     */
    public $mapResult;

    /**
     * @description cn-beijing
     *
     * @example IPv4
     *
     * @var string
     */
    public $matchAddressType;

    /**
     * @description The ID of the CEN instance.
     *
     * @example 65501
     *
     * @var int[]
     */
    public $matchAsns;

    /**
     * @description The ID of the routing policy.
     *
     * @example 65501:1
     *
     * @var string[]
     */
    public $matchCommunitySet;

    /**
     * @description 10.10.10.0/24
     *
     * @example 20
     *
     * @var int
     */
    public $nextPriority;

    /**
     * @description The action to be performed on a route that meets all match conditions. Valid values:
     *
     *   **Permit**: the route is permitted.
     *   **Deny**: the route is denied.
     *
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
     * Specify the community in the format of n:m. Valid values of n and m: **1** to **65535**. Each community must comply with the RFC 1997 standard. The RFC 8092 standard that defines BGP large communities is not supported.
     *
     **
     *
     **If the configurations of the communities are incorrect, routes may fail to be advertised to your data center.
     *
     * @example 22
     *
     * @var int
     */
    public $preference;

    /**
     * @description The match method that is used to match routes against the prefix list. Valid values:
     *
     *   **Include**: fuzzy match. A route is a match if the route prefix is included in the match conditions.
     *
     * For example, if you set the match condition to 10.10.0.0/16 and fuzzy match is enabled, the route whose prefix is 10.10.1.0/24 is a match.
     *
     *   **Complete**: exact match. A route is a match only if the route prefix is the same as the prefix specified in the match condition.
     *
     * For example, if you set the match condition to 10.10.0.0/16 and exact match is enabled, a route is a match only if the prefix is 10.10.0.0/16.
     * @example 65501
     *
     * @var int[]
     */
    public $prependAsPath;

    /**
     * @description VPC
     *
     * @example 10
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
     * @description vpc-avcdsg34ds****
     *
     * @example cenrmap-abcdedfghij****
     *
     * @var string
     */
    public $routeMapId;

    /**
     * @description Modifies a routing policy of a Cloud Enterprise Network (CEN) instance.
     *
     * @example System
     *
     * @var string[]
     */
    public $routeTypes;

    /**
     * @description The AS paths that are prepended by using an action statement when regional gateways receive or advertise routes.
     *
     * The AS paths vary based on the direction in which the routing policy is applied:
     *
     *   If AS paths are prepended to a routing policy that is applied in the inbound direction, you must specify source network instance IDs and the source region in the match condition. In addition, the source region must be the same as the region where the routing policy is applied.
     *   If AS paths are prepended to a routing policy that is applied in the outbound direction, you must specify destination network instance IDs in the match condition.
     *
     * This parameter specifies the action to be performed when a route meets the match condition.
     * @example VPC
     *
     * @var string[]
     */
    public $sourceChildInstanceTypes;

    /**
     * @description 20
     *
     * @example vpc-afsfdf5435vcvc****
     *
     * @var string[]
     */
    public $sourceInstanceIds;

    /**
     * @description The IDs of the destination route tables to which the routes belong. You can enter at most 32 route table IDs.
     *
     * > The destination route table IDs take effect only when Direction is set to Export from Regional Gateway and the destination route tables belong to network instances deployed in the current region.
     * @example false
     *
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @description The IDs of the source route tables to which the routes belong. You can enter at most 32 route table IDs.
     *
     * @example cn-beijing
     *
     * @var string[]
     */
    public $sourceRegionIds;

    /**
     * @description The action that is performed on the community. Valid values:
     *
     *   **Additive**: adds the community to the route.
     *   **Replace**: replaces the original community of the route.
     *
     * This parameter specifies the action to be performed when a route meets the match condition.
     * @example vtb-acdbvtbr342cd****
     *
     * @var string[]
     */
    public $sourceRouteTableIds;
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
        'routeMapId'                         => 'RouteMapId',
        'routeTypes'                         => 'RouteTypes',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
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
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCenRouteMapRequest
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
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
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

        return $model;
    }
}
