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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var bool
     */
    public $operationalMode;

    /**
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @var conflicts
     */
    public $conflicts;

    /**
     * @var communities
     */
    public $communities;

    /**
     * @var asPaths
     */
    public $asPaths;
    protected $_name = [
        'status'               => 'Status',
        'type'                 => 'Type',
        'publishStatus'        => 'PublishStatus',
        'nextHopType'          => 'NextHopType',
        'operationalMode'      => 'OperationalMode',
        'nextHopRegionId'      => 'NextHopRegionId',
        'nextHopInstanceId'    => 'NextHopInstanceId',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'routeTableId'         => 'RouteTableId',
        'cenRouteMapRecords'   => 'CenRouteMapRecords',
        'conflicts'            => 'Conflicts',
        'communities'          => 'Communities',
        'asPaths'              => 'AsPaths',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->operationalMode) {
            $res['OperationalMode'] = $this->operationalMode;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toMap() : null;
        }
        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toMap() : null;
        }
        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toMap() : null;
        }
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['OperationalMode'])) {
            $model->operationalMode = $map['OperationalMode'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['CenRouteMapRecords'])) {
            $model->cenRouteMapRecords = cenRouteMapRecords::fromMap($map['CenRouteMapRecords']);
        }
        if (isset($map['Conflicts'])) {
            $model->conflicts = conflicts::fromMap($map['Conflicts']);
        }
        if (isset($map['Communities'])) {
            $model->communities = communities::fromMap($map['Communities']);
        }
        if (isset($map['AsPaths'])) {
            $model->asPaths = asPaths::fromMap($map['AsPaths']);
        }

        return $model;
    }
}
