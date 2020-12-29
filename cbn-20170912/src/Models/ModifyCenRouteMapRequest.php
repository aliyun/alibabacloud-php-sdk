<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ModifyCenRouteMapRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenRegionId;

    /**
     * @var string
     */
    public $routeMapId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $mapResult;

    /**
     * @var int
     */
    public $nextPriority;

    /**
     * @var string
     */
    public $cidrMatchMode;

    /**
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @var string
     */
    public $communityMatchMode;

    /**
     * @var string
     */
    public $communityOperateMode;

    /**
     * @var int
     */
    public $preference;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @var string
     */
    public $gatewayZoneId;

    /**
     * @var string
     */
    public $matchAddressType;

    /**
     * @var string[]
     */
    public $sourceInstanceIds;

    /**
     * @var string[]
     */
    public $destinationInstanceIds;

    /**
     * @var string[]
     */
    public $sourceRouteTableIds;

    /**
     * @var string[]
     */
    public $destinationRouteTableIds;

    /**
     * @var string[]
     */
    public $sourceRegionIds;

    /**
     * @var string[]
     */
    public $sourceChildInstanceTypes;

    /**
     * @var string[]
     */
    public $destinationChildInstanceTypes;

    /**
     * @var string[]
     */
    public $destinationCidrBlocks;

    /**
     * @var string[]
     */
    public $routeTypes;

    /**
     * @var int[]
     */
    public $matchAsns;

    /**
     * @var string[]
     */
    public $matchCommunitySet;

    /**
     * @var string[]
     */
    public $operateCommunitySet;

    /**
     * @var int[]
     */
    public $prependAsPath;

    /**
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @var string[]
     */
    public $sourceZoneIds;

    /**
     * @var string[]
     */
    public $originalRouteTableIds;
    protected $_name = [
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'cenId'                              => 'CenId',
        'cenRegionId'                        => 'CenRegionId',
        'routeMapId'                         => 'RouteMapId',
        'description'                        => 'Description',
        'mapResult'                          => 'MapResult',
        'nextPriority'                       => 'NextPriority',
        'cidrMatchMode'                      => 'CidrMatchMode',
        'asPathMatchMode'                    => 'AsPathMatchMode',
        'communityMatchMode'                 => 'CommunityMatchMode',
        'communityOperateMode'               => 'CommunityOperateMode',
        'preference'                         => 'Preference',
        'priority'                           => 'Priority',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'gatewayZoneId'                      => 'GatewayZoneId',
        'matchAddressType'                   => 'MatchAddressType',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'destinationInstanceIds'             => 'DestinationInstanceIds',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'destinationChildInstanceTypes'      => 'DestinationChildInstanceTypes',
        'destinationCidrBlocks'              => 'DestinationCidrBlocks',
        'routeTypes'                         => 'RouteTypes',
        'matchAsns'                          => 'MatchAsns',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'operateCommunitySet'                => 'OperateCommunitySet',
        'prependAsPath'                      => 'PrependAsPath',
        'destinationRegionIds'               => 'DestinationRegionIds',
        'sourceZoneIds'                      => 'SourceZoneIds',
        'originalRouteTableIds'              => 'OriginalRouteTableIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
        }
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }
        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }
        if (null !== $this->cidrMatchMode) {
            $res['CidrMatchMode'] = $this->cidrMatchMode;
        }
        if (null !== $this->asPathMatchMode) {
            $res['AsPathMatchMode'] = $this->asPathMatchMode;
        }
        if (null !== $this->communityMatchMode) {
            $res['CommunityMatchMode'] = $this->communityMatchMode;
        }
        if (null !== $this->communityOperateMode) {
            $res['CommunityOperateMode'] = $this->communityOperateMode;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }
        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }
        if (null !== $this->gatewayZoneId) {
            $res['GatewayZoneId'] = $this->gatewayZoneId;
        }
        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }
        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = $this->sourceInstanceIds;
        }
        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = $this->destinationInstanceIds;
        }
        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = $this->sourceRouteTableIds;
        }
        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = $this->destinationRouteTableIds;
        }
        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = $this->sourceRegionIds;
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = $this->sourceChildInstanceTypes;
        }
        if (null !== $this->destinationChildInstanceTypes) {
            $res['DestinationChildInstanceTypes'] = $this->destinationChildInstanceTypes;
        }
        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = $this->destinationCidrBlocks;
        }
        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = $this->routeTypes;
        }
        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = $this->matchAsns;
        }
        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = $this->matchCommunitySet;
        }
        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = $this->operateCommunitySet;
        }
        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = $this->prependAsPath;
        }
        if (null !== $this->destinationRegionIds) {
            $res['DestinationRegionIds'] = $this->destinationRegionIds;
        }
        if (null !== $this->sourceZoneIds) {
            $res['SourceZoneIds'] = $this->sourceZoneIds;
        }
        if (null !== $this->originalRouteTableIds) {
            $res['OriginalRouteTableIds'] = $this->originalRouteTableIds;
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }
        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }
        if (isset($map['CidrMatchMode'])) {
            $model->cidrMatchMode = $map['CidrMatchMode'];
        }
        if (isset($map['AsPathMatchMode'])) {
            $model->asPathMatchMode = $map['AsPathMatchMode'];
        }
        if (isset($map['CommunityMatchMode'])) {
            $model->communityMatchMode = $map['CommunityMatchMode'];
        }
        if (isset($map['CommunityOperateMode'])) {
            $model->communityOperateMode = $map['CommunityOperateMode'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }
        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }
        if (isset($map['GatewayZoneId'])) {
            $model->gatewayZoneId = $map['GatewayZoneId'];
        }
        if (isset($map['MatchAddressType'])) {
            $model->matchAddressType = $map['MatchAddressType'];
        }
        if (isset($map['SourceInstanceIds'])) {
            if (!empty($map['SourceInstanceIds'])) {
                $model->sourceInstanceIds = $map['SourceInstanceIds'];
            }
        }
        if (isset($map['DestinationInstanceIds'])) {
            if (!empty($map['DestinationInstanceIds'])) {
                $model->destinationInstanceIds = $map['DestinationInstanceIds'];
            }
        }
        if (isset($map['SourceRouteTableIds'])) {
            if (!empty($map['SourceRouteTableIds'])) {
                $model->sourceRouteTableIds = $map['SourceRouteTableIds'];
            }
        }
        if (isset($map['DestinationRouteTableIds'])) {
            if (!empty($map['DestinationRouteTableIds'])) {
                $model->destinationRouteTableIds = $map['DestinationRouteTableIds'];
            }
        }
        if (isset($map['SourceRegionIds'])) {
            if (!empty($map['SourceRegionIds'])) {
                $model->sourceRegionIds = $map['SourceRegionIds'];
            }
        }
        if (isset($map['SourceChildInstanceTypes'])) {
            if (!empty($map['SourceChildInstanceTypes'])) {
                $model->sourceChildInstanceTypes = $map['SourceChildInstanceTypes'];
            }
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
        if (isset($map['RouteTypes'])) {
            if (!empty($map['RouteTypes'])) {
                $model->routeTypes = $map['RouteTypes'];
            }
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
        if (isset($map['OperateCommunitySet'])) {
            if (!empty($map['OperateCommunitySet'])) {
                $model->operateCommunitySet = $map['OperateCommunitySet'];
            }
        }
        if (isset($map['PrependAsPath'])) {
            if (!empty($map['PrependAsPath'])) {
                $model->prependAsPath = $map['PrependAsPath'];
            }
        }
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = $map['DestinationRegionIds'];
            }
        }
        if (isset($map['SourceZoneIds'])) {
            if (!empty($map['SourceZoneIds'])) {
                $model->sourceZoneIds = $map['SourceZoneIds'];
            }
        }
        if (isset($map['OriginalRouteTableIds'])) {
            if (!empty($map['OriginalRouteTableIds'])) {
                $model->originalRouteTableIds = $map['OriginalRouteTableIds'];
            }
        }

        return $model;
    }
}
