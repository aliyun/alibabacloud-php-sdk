<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationChildInstanceTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationCidrBlocks;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationInstanceIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationRegionIds;
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

class routeMap extends Model
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
     * @var destinationChildInstanceTypes
     */
    public $destinationChildInstanceTypes;
    /**
     * @var destinationCidrBlocks
     */
    public $destinationCidrBlocks;
    /**
     * @var destinationInstanceIds
     */
    public $destinationInstanceIds;
    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;
    /**
     * @var destinationRegionIds
     */
    public $destinationRegionIds;
    /**
     * @var destinationRouteTableIds
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
     * @var matchAsns
     */
    public $matchAsns;
    /**
     * @var matchCommunitySet
     */
    public $matchCommunitySet;
    /**
     * @var int
     */
    public $nextPriority;
    /**
     * @var operateCommunitySet
     */
    public $operateCommunitySet;
    /**
     * @var int
     */
    public $preference;
    /**
     * @var prependAsPath
     */
    public $prependAsPath;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $routeMapId;
    /**
     * @var routeTypes
     */
    public $routeTypes;
    /**
     * @var sourceChildInstanceTypes
     */
    public $sourceChildInstanceTypes;
    /**
     * @var sourceInstanceIds
     */
    public $sourceInstanceIds;
    /**
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;
    /**
     * @var sourceRegionIds
     */
    public $sourceRegionIds;
    /**
     * @var sourceRouteTableIds
     */
    public $sourceRouteTableIds;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $transitRouterRouteTableId;
    /**
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
        'destinationRegionIds'               => 'DestinationRegionIds',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'mapResult'                          => 'MapResult',
        'matchAddressType'                   => 'MatchAddressType',
        'matchAsns'                          => 'MatchAsns',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'nextPriority'                       => 'NextPriority',
        'operateCommunitySet'                => 'OperateCommunitySet',
        'preference'                         => 'Preference',
        'prependAsPath'                      => 'PrependAsPath',
        'priority'                           => 'Priority',
        'routeMapId'                         => 'RouteMapId',
        'routeTypes'                         => 'RouteTypes',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'status'                             => 'Status',
        'transitRouterRouteTableId'          => 'TransitRouterRouteTableId',
        'transmitDirection'                  => 'TransmitDirection',
    ];

    public function validate()
    {
        if (null !== $this->destinationChildInstanceTypes) {
            $this->destinationChildInstanceTypes->validate();
        }
        if (null !== $this->destinationCidrBlocks) {
            $this->destinationCidrBlocks->validate();
        }
        if (null !== $this->destinationInstanceIds) {
            $this->destinationInstanceIds->validate();
        }
        if (null !== $this->destinationRegionIds) {
            $this->destinationRegionIds->validate();
        }
        if (null !== $this->destinationRouteTableIds) {
            $this->destinationRouteTableIds->validate();
        }
        if (null !== $this->matchAsns) {
            $this->matchAsns->validate();
        }
        if (null !== $this->matchCommunitySet) {
            $this->matchCommunitySet->validate();
        }
        if (null !== $this->operateCommunitySet) {
            $this->operateCommunitySet->validate();
        }
        if (null !== $this->prependAsPath) {
            $this->prependAsPath->validate();
        }
        if (null !== $this->routeTypes) {
            $this->routeTypes->validate();
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $this->sourceChildInstanceTypes->validate();
        }
        if (null !== $this->sourceInstanceIds) {
            $this->sourceInstanceIds->validate();
        }
        if (null !== $this->sourceRegionIds) {
            $this->sourceRegionIds->validate();
        }
        if (null !== $this->sourceRouteTableIds) {
            $this->sourceRouteTableIds->validate();
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
            $res['DestinationChildInstanceTypes'] = null !== $this->destinationChildInstanceTypes ? $this->destinationChildInstanceTypes->toArray($noStream) : $this->destinationChildInstanceTypes;
        }

        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = null !== $this->destinationCidrBlocks ? $this->destinationCidrBlocks->toArray($noStream) : $this->destinationCidrBlocks;
        }

        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = null !== $this->destinationInstanceIds ? $this->destinationInstanceIds->toArray($noStream) : $this->destinationInstanceIds;
        }

        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }

        if (null !== $this->destinationRegionIds) {
            $res['DestinationRegionIds'] = null !== $this->destinationRegionIds ? $this->destinationRegionIds->toArray($noStream) : $this->destinationRegionIds;
        }

        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = null !== $this->destinationRouteTableIds ? $this->destinationRouteTableIds->toArray($noStream) : $this->destinationRouteTableIds;
        }

        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }

        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }

        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = null !== $this->matchAsns ? $this->matchAsns->toArray($noStream) : $this->matchAsns;
        }

        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = null !== $this->matchCommunitySet ? $this->matchCommunitySet->toArray($noStream) : $this->matchCommunitySet;
        }

        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }

        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = null !== $this->operateCommunitySet ? $this->operateCommunitySet->toArray($noStream) : $this->operateCommunitySet;
        }

        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }

        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = null !== $this->prependAsPath ? $this->prependAsPath->toArray($noStream) : $this->prependAsPath;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }

        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = null !== $this->routeTypes ? $this->routeTypes->toArray($noStream) : $this->routeTypes;
        }

        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = null !== $this->sourceChildInstanceTypes ? $this->sourceChildInstanceTypes->toArray($noStream) : $this->sourceChildInstanceTypes;
        }

        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = null !== $this->sourceInstanceIds ? $this->sourceInstanceIds->toArray($noStream) : $this->sourceInstanceIds;
        }

        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }

        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = null !== $this->sourceRegionIds ? $this->sourceRegionIds->toArray($noStream) : $this->sourceRegionIds;
        }

        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = null !== $this->sourceRouteTableIds ? $this->sourceRouteTableIds->toArray($noStream) : $this->sourceRouteTableIds;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
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
            $model->destinationChildInstanceTypes = destinationChildInstanceTypes::fromMap($map['DestinationChildInstanceTypes']);
        }

        if (isset($map['DestinationCidrBlocks'])) {
            $model->destinationCidrBlocks = destinationCidrBlocks::fromMap($map['DestinationCidrBlocks']);
        }

        if (isset($map['DestinationInstanceIds'])) {
            $model->destinationInstanceIds = destinationInstanceIds::fromMap($map['DestinationInstanceIds']);
        }

        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }

        if (isset($map['DestinationRegionIds'])) {
            $model->destinationRegionIds = destinationRegionIds::fromMap($map['DestinationRegionIds']);
        }

        if (isset($map['DestinationRouteTableIds'])) {
            $model->destinationRouteTableIds = destinationRouteTableIds::fromMap($map['DestinationRouteTableIds']);
        }

        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }

        if (isset($map['MatchAddressType'])) {
            $model->matchAddressType = $map['MatchAddressType'];
        }

        if (isset($map['MatchAsns'])) {
            $model->matchAsns = matchAsns::fromMap($map['MatchAsns']);
        }

        if (isset($map['MatchCommunitySet'])) {
            $model->matchCommunitySet = matchCommunitySet::fromMap($map['MatchCommunitySet']);
        }

        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }

        if (isset($map['OperateCommunitySet'])) {
            $model->operateCommunitySet = operateCommunitySet::fromMap($map['OperateCommunitySet']);
        }

        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }

        if (isset($map['PrependAsPath'])) {
            $model->prependAsPath = prependAsPath::fromMap($map['PrependAsPath']);
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }

        if (isset($map['RouteTypes'])) {
            $model->routeTypes = routeTypes::fromMap($map['RouteTypes']);
        }

        if (isset($map['SourceChildInstanceTypes'])) {
            $model->sourceChildInstanceTypes = sourceChildInstanceTypes::fromMap($map['SourceChildInstanceTypes']);
        }

        if (isset($map['SourceInstanceIds'])) {
            $model->sourceInstanceIds = sourceInstanceIds::fromMap($map['SourceInstanceIds']);
        }

        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }

        if (isset($map['SourceRegionIds'])) {
            $model->sourceRegionIds = sourceRegionIds::fromMap($map['SourceRegionIds']);
        }

        if (isset($map['SourceRouteTableIds'])) {
            $model->sourceRouteTableIds = sourceRouteTableIds::fromMap($map['SourceRouteTableIds']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
