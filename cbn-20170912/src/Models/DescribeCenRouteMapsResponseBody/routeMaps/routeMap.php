<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationChildInstanceTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationCidrBlocks;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationInstanceIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationRouteTableIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\matchAsns;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\matchCommunitySet;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\operateCommunitySet;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\prependAsPath;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\routeTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceChildInstanceTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceInstanceIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceRegionIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceRouteTableIds;
use AlibabaCloud\Tea\Model;

class routeMap extends Model
{
    /**
     * @var string
     */
    public $routeMapId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transmitDirection;

    /**
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @var string
     */
    public $cenRegionId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $communityOperateMode;

    /**
     * @var string
     */
    public $mapResult;

    /**
     * @var string
     */
    public $communityMatchMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @var int
     */
    public $preference;

    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @var string
     */
    public $cidrMatchMode;

    /**
     * @var int
     */
    public $nextPriority;

    /**
     * @var sourceRegionIds
     */
    public $sourceRegionIds;

    /**
     * @var sourceChildInstanceTypes
     */
    public $sourceChildInstanceTypes;

    /**
     * @var destinationRouteTableIds
     */
    public $destinationRouteTableIds;

    /**
     * @var sourceInstanceIds
     */
    public $sourceInstanceIds;

    /**
     * @var destinationCidrBlocks
     */
    public $destinationCidrBlocks;

    /**
     * @var sourceRouteTableIds
     */
    public $sourceRouteTableIds;

    /**
     * @var matchCommunitySet
     */
    public $matchCommunitySet;

    /**
     * @var prependAsPath
     */
    public $prependAsPath;

    /**
     * @var routeTypes
     */
    public $routeTypes;

    /**
     * @var destinationChildInstanceTypes
     */
    public $destinationChildInstanceTypes;

    /**
     * @var destinationInstanceIds
     */
    public $destinationInstanceIds;

    /**
     * @var matchAsns
     */
    public $matchAsns;

    /**
     * @var operateCommunitySet
     */
    public $operateCommunitySet;
    protected $_name = [
        'routeMapId'                         => 'RouteMapId',
        'status'                             => 'Status',
        'transmitDirection'                  => 'TransmitDirection',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'cenRegionId'                        => 'CenRegionId',
        'cenId'                              => 'CenId',
        'priority'                           => 'Priority',
        'communityOperateMode'               => 'CommunityOperateMode',
        'mapResult'                          => 'MapResult',
        'communityMatchMode'                 => 'CommunityMatchMode',
        'description'                        => 'Description',
        'asPathMatchMode'                    => 'AsPathMatchMode',
        'preference'                         => 'Preference',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'cidrMatchMode'                      => 'CidrMatchMode',
        'nextPriority'                       => 'NextPriority',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'destinationCidrBlocks'              => 'DestinationCidrBlocks',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'prependAsPath'                      => 'PrependAsPath',
        'routeTypes'                         => 'RouteTypes',
        'destinationChildInstanceTypes'      => 'DestinationChildInstanceTypes',
        'destinationInstanceIds'             => 'DestinationInstanceIds',
        'matchAsns'                          => 'MatchAsns',
        'operateCommunitySet'                => 'OperateCommunitySet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
        }
        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->communityOperateMode) {
            $res['CommunityOperateMode'] = $this->communityOperateMode;
        }
        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }
        if (null !== $this->communityMatchMode) {
            $res['CommunityMatchMode'] = $this->communityMatchMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->asPathMatchMode) {
            $res['AsPathMatchMode'] = $this->asPathMatchMode;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }
        if (null !== $this->cidrMatchMode) {
            $res['CidrMatchMode'] = $this->cidrMatchMode;
        }
        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }
        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = null !== $this->sourceRegionIds ? $this->sourceRegionIds->toMap() : null;
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = null !== $this->sourceChildInstanceTypes ? $this->sourceChildInstanceTypes->toMap() : null;
        }
        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = null !== $this->destinationRouteTableIds ? $this->destinationRouteTableIds->toMap() : null;
        }
        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = null !== $this->sourceInstanceIds ? $this->sourceInstanceIds->toMap() : null;
        }
        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = null !== $this->destinationCidrBlocks ? $this->destinationCidrBlocks->toMap() : null;
        }
        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = null !== $this->sourceRouteTableIds ? $this->sourceRouteTableIds->toMap() : null;
        }
        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = null !== $this->matchCommunitySet ? $this->matchCommunitySet->toMap() : null;
        }
        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = null !== $this->prependAsPath ? $this->prependAsPath->toMap() : null;
        }
        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = null !== $this->routeTypes ? $this->routeTypes->toMap() : null;
        }
        if (null !== $this->destinationChildInstanceTypes) {
            $res['DestinationChildInstanceTypes'] = null !== $this->destinationChildInstanceTypes ? $this->destinationChildInstanceTypes->toMap() : null;
        }
        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = null !== $this->destinationInstanceIds ? $this->destinationInstanceIds->toMap() : null;
        }
        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = null !== $this->matchAsns ? $this->matchAsns->toMap() : null;
        }
        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = null !== $this->operateCommunitySet ? $this->operateCommunitySet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransmitDirection'])) {
            $model->transmitDirection = $map['TransmitDirection'];
        }
        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['CommunityOperateMode'])) {
            $model->communityOperateMode = $map['CommunityOperateMode'];
        }
        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }
        if (isset($map['CommunityMatchMode'])) {
            $model->communityMatchMode = $map['CommunityMatchMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AsPathMatchMode'])) {
            $model->asPathMatchMode = $map['AsPathMatchMode'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }
        if (isset($map['CidrMatchMode'])) {
            $model->cidrMatchMode = $map['CidrMatchMode'];
        }
        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }
        if (isset($map['SourceRegionIds'])) {
            $model->sourceRegionIds = sourceRegionIds::fromMap($map['SourceRegionIds']);
        }
        if (isset($map['SourceChildInstanceTypes'])) {
            $model->sourceChildInstanceTypes = sourceChildInstanceTypes::fromMap($map['SourceChildInstanceTypes']);
        }
        if (isset($map['DestinationRouteTableIds'])) {
            $model->destinationRouteTableIds = destinationRouteTableIds::fromMap($map['DestinationRouteTableIds']);
        }
        if (isset($map['SourceInstanceIds'])) {
            $model->sourceInstanceIds = sourceInstanceIds::fromMap($map['SourceInstanceIds']);
        }
        if (isset($map['DestinationCidrBlocks'])) {
            $model->destinationCidrBlocks = destinationCidrBlocks::fromMap($map['DestinationCidrBlocks']);
        }
        if (isset($map['SourceRouteTableIds'])) {
            $model->sourceRouteTableIds = sourceRouteTableIds::fromMap($map['SourceRouteTableIds']);
        }
        if (isset($map['MatchCommunitySet'])) {
            $model->matchCommunitySet = matchCommunitySet::fromMap($map['MatchCommunitySet']);
        }
        if (isset($map['PrependAsPath'])) {
            $model->prependAsPath = prependAsPath::fromMap($map['PrependAsPath']);
        }
        if (isset($map['RouteTypes'])) {
            $model->routeTypes = routeTypes::fromMap($map['RouteTypes']);
        }
        if (isset($map['DestinationChildInstanceTypes'])) {
            $model->destinationChildInstanceTypes = destinationChildInstanceTypes::fromMap($map['DestinationChildInstanceTypes']);
        }
        if (isset($map['DestinationInstanceIds'])) {
            $model->destinationInstanceIds = destinationInstanceIds::fromMap($map['DestinationInstanceIds']);
        }
        if (isset($map['MatchAsns'])) {
            $model->matchAsns = matchAsns::fromMap($map['MatchAsns']);
        }
        if (isset($map['OperateCommunitySet'])) {
            $model->operateCommunitySet = operateCommunitySet::fromMap($map['OperateCommunitySet']);
        }

        return $model;
    }
}
