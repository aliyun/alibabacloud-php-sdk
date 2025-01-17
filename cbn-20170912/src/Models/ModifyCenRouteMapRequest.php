<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ModifyCenRouteMapRequest extends Model
{
    /**
     * @var string
     */
    public $asPathMatchMode;
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
    public $cidrMatchMode;
    /**
     * @var string
     */
    public $communityMatchMode;
    /**
     * @var string
     */
    public $communityOperateMode;
    /**
     * @var string
     */
    public $description;
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
    public $destinationInstanceIds;
    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;
    /**
     * @var string[]
     */
    public $destinationRegionIds;
    /**
     * @var string[]
     */
    public $destinationRouteTableIds;
    /**
     * @var string
     */
    public $mapResult;
    /**
     * @var string
     */
    public $matchAddressType;
    /**
     * @var int[]
     */
    public $matchAsns;
    /**
     * @var string[]
     */
    public $matchCommunitySet;
    /**
     * @var int
     */
    public $nextPriority;
    /**
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
     * @var int
     */
    public $preference;
    /**
     * @var int[]
     */
    public $prependAsPath;
    /**
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
     * @var string
     */
    public $routeMapId;
    /**
     * @var string[]
     */
    public $routeTypes;
    /**
     * @var string[]
     */
    public $sourceChildInstanceTypes;
    /**
     * @var string[]
     */
    public $sourceInstanceIds;
    /**
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;
    /**
     * @var string[]
     */
    public $sourceRegionIds;
    /**
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
        'destinationRegionIds'               => 'DestinationRegionIds',
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
        if (\is_array($this->destinationChildInstanceTypes)) {
            Model::validateArray($this->destinationChildInstanceTypes);
        }
        if (\is_array($this->destinationCidrBlocks)) {
            Model::validateArray($this->destinationCidrBlocks);
        }
        if (\is_array($this->destinationInstanceIds)) {
            Model::validateArray($this->destinationInstanceIds);
        }
        if (\is_array($this->destinationRegionIds)) {
            Model::validateArray($this->destinationRegionIds);
        }
        if (\is_array($this->destinationRouteTableIds)) {
            Model::validateArray($this->destinationRouteTableIds);
        }
        if (\is_array($this->matchAsns)) {
            Model::validateArray($this->matchAsns);
        }
        if (\is_array($this->matchCommunitySet)) {
            Model::validateArray($this->matchCommunitySet);
        }
        if (\is_array($this->operateCommunitySet)) {
            Model::validateArray($this->operateCommunitySet);
        }
        if (\is_array($this->prependAsPath)) {
            Model::validateArray($this->prependAsPath);
        }
        if (\is_array($this->routeTypes)) {
            Model::validateArray($this->routeTypes);
        }
        if (\is_array($this->sourceChildInstanceTypes)) {
            Model::validateArray($this->sourceChildInstanceTypes);
        }
        if (\is_array($this->sourceInstanceIds)) {
            Model::validateArray($this->sourceInstanceIds);
        }
        if (\is_array($this->sourceRegionIds)) {
            Model::validateArray($this->sourceRegionIds);
        }
        if (\is_array($this->sourceRouteTableIds)) {
            Model::validateArray($this->sourceRouteTableIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->destinationChildInstanceTypes)) {
                $res['DestinationChildInstanceTypes'] = [];
                $n1                                   = 0;
                foreach ($this->destinationChildInstanceTypes as $item1) {
                    $res['DestinationChildInstanceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->destinationCidrBlocks) {
            if (\is_array($this->destinationCidrBlocks)) {
                $res['DestinationCidrBlocks'] = [];
                $n1                           = 0;
                foreach ($this->destinationCidrBlocks as $item1) {
                    $res['DestinationCidrBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->destinationInstanceIds) {
            if (\is_array($this->destinationInstanceIds)) {
                $res['DestinationInstanceIds'] = [];
                $n1                            = 0;
                foreach ($this->destinationInstanceIds as $item1) {
                    $res['DestinationInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }

        if (null !== $this->destinationRegionIds) {
            if (\is_array($this->destinationRegionIds)) {
                $res['DestinationRegionIds'] = [];
                $n1                          = 0;
                foreach ($this->destinationRegionIds as $item1) {
                    $res['DestinationRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->destinationRouteTableIds) {
            if (\is_array($this->destinationRouteTableIds)) {
                $res['DestinationRouteTableIds'] = [];
                $n1                              = 0;
                foreach ($this->destinationRouteTableIds as $item1) {
                    $res['DestinationRouteTableIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }

        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }

        if (null !== $this->matchAsns) {
            if (\is_array($this->matchAsns)) {
                $res['MatchAsns'] = [];
                $n1               = 0;
                foreach ($this->matchAsns as $item1) {
                    $res['MatchAsns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->matchCommunitySet) {
            if (\is_array($this->matchCommunitySet)) {
                $res['MatchCommunitySet'] = [];
                $n1                       = 0;
                foreach ($this->matchCommunitySet as $item1) {
                    $res['MatchCommunitySet'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }

        if (null !== $this->operateCommunitySet) {
            if (\is_array($this->operateCommunitySet)) {
                $res['OperateCommunitySet'] = [];
                $n1                         = 0;
                foreach ($this->operateCommunitySet as $item1) {
                    $res['OperateCommunitySet'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->prependAsPath)) {
                $res['PrependAsPath'] = [];
                $n1                   = 0;
                foreach ($this->prependAsPath as $item1) {
                    $res['PrependAsPath'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->routeTypes)) {
                $res['RouteTypes'] = [];
                $n1                = 0;
                foreach ($this->routeTypes as $item1) {
                    $res['RouteTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceChildInstanceTypes) {
            if (\is_array($this->sourceChildInstanceTypes)) {
                $res['SourceChildInstanceTypes'] = [];
                $n1                              = 0;
                foreach ($this->sourceChildInstanceTypes as $item1) {
                    $res['SourceChildInstanceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceInstanceIds) {
            if (\is_array($this->sourceInstanceIds)) {
                $res['SourceInstanceIds'] = [];
                $n1                       = 0;
                foreach ($this->sourceInstanceIds as $item1) {
                    $res['SourceInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }

        if (null !== $this->sourceRegionIds) {
            if (\is_array($this->sourceRegionIds)) {
                $res['SourceRegionIds'] = [];
                $n1                     = 0;
                foreach ($this->sourceRegionIds as $item1) {
                    $res['SourceRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceRouteTableIds) {
            if (\is_array($this->sourceRouteTableIds)) {
                $res['SourceRouteTableIds'] = [];
                $n1                         = 0;
                foreach ($this->sourceRouteTableIds as $item1) {
                    $res['SourceRouteTableIds'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->destinationChildInstanceTypes = [];
                $n1                                   = 0;
                foreach ($map['DestinationChildInstanceTypes'] as $item1) {
                    $model->destinationChildInstanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DestinationCidrBlocks'])) {
            if (!empty($map['DestinationCidrBlocks'])) {
                $model->destinationCidrBlocks = [];
                $n1                           = 0;
                foreach ($map['DestinationCidrBlocks'] as $item1) {
                    $model->destinationCidrBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DestinationInstanceIds'])) {
            if (!empty($map['DestinationInstanceIds'])) {
                $model->destinationInstanceIds = [];
                $n1                            = 0;
                foreach ($map['DestinationInstanceIds'] as $item1) {
                    $model->destinationInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }

        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = [];
                $n1                          = 0;
                foreach ($map['DestinationRegionIds'] as $item1) {
                    $model->destinationRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DestinationRouteTableIds'])) {
            if (!empty($map['DestinationRouteTableIds'])) {
                $model->destinationRouteTableIds = [];
                $n1                              = 0;
                foreach ($map['DestinationRouteTableIds'] as $item1) {
                    $model->destinationRouteTableIds[$n1++] = $item1;
                }
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
                $model->matchAsns = [];
                $n1               = 0;
                foreach ($map['MatchAsns'] as $item1) {
                    $model->matchAsns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MatchCommunitySet'])) {
            if (!empty($map['MatchCommunitySet'])) {
                $model->matchCommunitySet = [];
                $n1                       = 0;
                foreach ($map['MatchCommunitySet'] as $item1) {
                    $model->matchCommunitySet[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }

        if (isset($map['OperateCommunitySet'])) {
            if (!empty($map['OperateCommunitySet'])) {
                $model->operateCommunitySet = [];
                $n1                         = 0;
                foreach ($map['OperateCommunitySet'] as $item1) {
                    $model->operateCommunitySet[$n1++] = $item1;
                }
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
                $model->prependAsPath = [];
                $n1                   = 0;
                foreach ($map['PrependAsPath'] as $item1) {
                    $model->prependAsPath[$n1++] = $item1;
                }
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
                $model->routeTypes = [];
                $n1                = 0;
                foreach ($map['RouteTypes'] as $item1) {
                    $model->routeTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceChildInstanceTypes'])) {
            if (!empty($map['SourceChildInstanceTypes'])) {
                $model->sourceChildInstanceTypes = [];
                $n1                              = 0;
                foreach ($map['SourceChildInstanceTypes'] as $item1) {
                    $model->sourceChildInstanceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceInstanceIds'])) {
            if (!empty($map['SourceInstanceIds'])) {
                $model->sourceInstanceIds = [];
                $n1                       = 0;
                foreach ($map['SourceInstanceIds'] as $item1) {
                    $model->sourceInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }

        if (isset($map['SourceRegionIds'])) {
            if (!empty($map['SourceRegionIds'])) {
                $model->sourceRegionIds = [];
                $n1                     = 0;
                foreach ($map['SourceRegionIds'] as $item1) {
                    $model->sourceRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceRouteTableIds'])) {
            if (!empty($map['SourceRouteTableIds'])) {
                $model->sourceRouteTableIds = [];
                $n1                         = 0;
                foreach ($map['SourceRouteTableIds'] as $item1) {
                    $model->sourceRouteTableIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
