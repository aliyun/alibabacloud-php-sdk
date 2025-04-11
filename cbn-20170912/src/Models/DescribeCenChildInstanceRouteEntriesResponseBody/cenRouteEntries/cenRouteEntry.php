<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\asPaths;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\communities;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\conflicts;

class cenRouteEntry extends Model
{
    /**
     * @var asPaths
     */
    public $asPaths;

    /**
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @var communities
     */
    public $communities;

    /**
     * @var conflicts
     */
    public $conflicts;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @var string
     */
    public $nextHopRegionId;

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
    public $publishStatus;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'asPaths' => 'AsPaths',
        'cenRouteMapRecords' => 'CenRouteMapRecords',
        'communities' => 'Communities',
        'conflicts' => 'Conflicts',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopInstanceId' => 'NextHopInstanceId',
        'nextHopRegionId' => 'NextHopRegionId',
        'nextHopType' => 'NextHopType',
        'operationalMode' => 'OperationalMode',
        'publishStatus' => 'PublishStatus',
        'routeTableId' => 'RouteTableId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->asPaths) {
            $this->asPaths->validate();
        }
        if (null !== $this->cenRouteMapRecords) {
            $this->cenRouteMapRecords->validate();
        }
        if (null !== $this->communities) {
            $this->communities->validate();
        }
        if (null !== $this->conflicts) {
            $this->conflicts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toArray($noStream) : $this->asPaths;
        }

        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toArray($noStream) : $this->cenRouteMapRecords;
        }

        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toArray($noStream) : $this->communities;
        }

        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toArray($noStream) : $this->conflicts;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
