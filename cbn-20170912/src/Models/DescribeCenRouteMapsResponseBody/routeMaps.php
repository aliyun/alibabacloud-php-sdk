<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody;

use AlibabaCloud\Tea\Model;

class routeMaps extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $matchCommunitySet;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $communityOperateMode;

    /**
     * @var string[]
     */
    public $prependAsPath;

    /**
     * @var string[]
     */
    public $routeTypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $destinationInstanceIds;

    /**
     * @var string[]
     */
    public $matchAsns;

    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @var string[]
     */
    public $operateCommunitySet;

    /**
     * @var int
     */
    public $nextPriority;

    /**
     * @var string
     */
    public $routeMapId;

    /**
     * @var string
     */
    public $transmitDirection;

    /**
     * @var string[]
     */
    public $sourceChildInstanceTypes;

    /**
     * @var string[]
     */
    public $destinationRouteTableIds;

    /**
     * @var string[]
     */
    public $sourceInstanceIds;

    /**
     * @var string
     */
    public $cenRegionId;

    /**
     * @var string[]
     */
    public $destinationCidrBlocks;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string[]
     */
    public $sourceRouteTableIds;

    /**
     * @var string
     */
    public $mapResult;

    /**
     * @var string
     */
    public $communityMatchMode;

    /**
     * @var string[]
     */
    public $destinationChildInstanceTypes;

    /**
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @var int
     */
    public $preference;

    /**
     * @var string
     */
    public $cidrMatchMode;
    protected $_name = [
        'status'                             => 'Status',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'priority'                           => 'Priority',
        'communityOperateMode'               => 'CommunityOperateMode',
        'prependAsPath'                      => 'PrependAsPath',
        'routeTypes'                         => 'RouteTypes',
        'description'                        => 'Description',
        'destinationInstanceIds'             => 'DestinationInstanceIds',
        'matchAsns'                          => 'MatchAsns',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'operateCommunitySet'                => 'OperateCommunitySet',
        'nextPriority'                       => 'NextPriority',
        'routeMapId'                         => 'RouteMapId',
        'transmitDirection'                  => 'TransmitDirection',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'cenRegionId'                        => 'CenRegionId',
        'destinationCidrBlocks'              => 'DestinationCidrBlocks',
        'cenId'                              => 'CenId',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'mapResult'                          => 'MapResult',
        'communityMatchMode'                 => 'CommunityMatchMode',
        'destinationChildInstanceTypes'      => 'DestinationChildInstanceTypes',
        'asPathMatchMode'                    => 'AsPathMatchMode',
        'preference'                         => 'Preference',
        'cidrMatchMode'                      => 'CidrMatchMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }
        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = $this->sourceRegionIds;
        }
        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = $this->matchCommunitySet;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->communityOperateMode) {
            $res['CommunityOperateMode'] = $this->communityOperateMode;
        }
        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = $this->prependAsPath;
        }
        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = $this->routeTypes;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = $this->destinationInstanceIds;
        }
        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = $this->matchAsns;
        }
        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }
        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = $this->operateCommunitySet;
        }
        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = $this->sourceChildInstanceTypes;
        }
        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = $this->destinationRouteTableIds;
        }
        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = $this->sourceInstanceIds;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
        }
        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = $this->destinationCidrBlocks;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = $this->sourceRouteTableIds;
        }
        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }
        if (null !== $this->communityMatchMode) {
            $res['CommunityMatchMode'] = $this->communityMatchMode;
        }
        if (null !== $this->destinationChildInstanceTypes) {
            $res['DestinationChildInstanceTypes'] = $this->destinationChildInstanceTypes;
        }
        if (null !== $this->asPathMatchMode) {
            $res['AsPathMatchMode'] = $this->asPathMatchMode;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->cidrMatchMode) {
            $res['CidrMatchMode'] = $this->cidrMatchMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeMaps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }
        if (isset($map['SourceRegionIds'])) {
            if (!empty($map['SourceRegionIds'])) {
                $model->sourceRegionIds = $map['SourceRegionIds'];
            }
        }
        if (isset($map['MatchCommunitySet'])) {
            if (!empty($map['MatchCommunitySet'])) {
                $model->matchCommunitySet = $map['MatchCommunitySet'];
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['CommunityOperateMode'])) {
            $model->communityOperateMode = $map['CommunityOperateMode'];
        }
        if (isset($map['PrependAsPath'])) {
            if (!empty($map['PrependAsPath'])) {
                $model->prependAsPath = $map['PrependAsPath'];
            }
        }
        if (isset($map['RouteTypes'])) {
            if (!empty($map['RouteTypes'])) {
                $model->routeTypes = $map['RouteTypes'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationInstanceIds'])) {
            if (!empty($map['DestinationInstanceIds'])) {
                $model->destinationInstanceIds = $map['DestinationInstanceIds'];
            }
        }
        if (isset($map['MatchAsns'])) {
            if (!empty($map['MatchAsns'])) {
                $model->matchAsns = $map['MatchAsns'];
            }
        }
        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }
        if (isset($map['OperateCommunitySet'])) {
            if (!empty($map['OperateCommunitySet'])) {
                $model->operateCommunitySet = $map['OperateCommunitySet'];
            }
        }
        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['TransmitDirection'])) {
            $model->transmitDirection = $map['TransmitDirection'];
        }
        if (isset($map['SourceChildInstanceTypes'])) {
            if (!empty($map['SourceChildInstanceTypes'])) {
                $model->sourceChildInstanceTypes = $map['SourceChildInstanceTypes'];
            }
        }
        if (isset($map['DestinationRouteTableIds'])) {
            if (!empty($map['DestinationRouteTableIds'])) {
                $model->destinationRouteTableIds = $map['DestinationRouteTableIds'];
            }
        }
        if (isset($map['SourceInstanceIds'])) {
            if (!empty($map['SourceInstanceIds'])) {
                $model->sourceInstanceIds = $map['SourceInstanceIds'];
            }
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
        }
        if (isset($map['DestinationCidrBlocks'])) {
            if (!empty($map['DestinationCidrBlocks'])) {
                $model->destinationCidrBlocks = $map['DestinationCidrBlocks'];
            }
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['SourceRouteTableIds'])) {
            if (!empty($map['SourceRouteTableIds'])) {
                $model->sourceRouteTableIds = $map['SourceRouteTableIds'];
            }
        }
        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }
        if (isset($map['CommunityMatchMode'])) {
            $model->communityMatchMode = $map['CommunityMatchMode'];
        }
        if (isset($map['DestinationChildInstanceTypes'])) {
            if (!empty($map['DestinationChildInstanceTypes'])) {
                $model->destinationChildInstanceTypes = $map['DestinationChildInstanceTypes'];
            }
        }
        if (isset($map['AsPathMatchMode'])) {
            $model->asPathMatchMode = $map['AsPathMatchMode'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['CidrMatchMode'])) {
            $model->cidrMatchMode = $map['CidrMatchMode'];
        }

        return $model;
    }
}
