<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry\conflicts;
use AlibabaCloud\Tea\Model;

class publishedRouteEntry extends Model
{
    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $childInstanceRouteTableId;

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
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $routeType;

    /**
     * @var conflicts
     */
    public $conflicts;
    protected $_name = [
        'nextHopId'                 => 'NextHopId',
        'publishStatus'             => 'PublishStatus',
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'nextHopType'               => 'NextHopType',
        'operationalMode'           => 'OperationalMode',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'routeType'                 => 'RouteType',
        'conflicts'                 => 'Conflicts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->childInstanceRouteTableId) {
            $res['ChildInstanceRouteTableId'] = $this->childInstanceRouteTableId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->operationalMode) {
            $res['OperationalMode'] = $this->operationalMode;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishedRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['ChildInstanceRouteTableId'])) {
            $model->childInstanceRouteTableId = $map['ChildInstanceRouteTableId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['OperationalMode'])) {
            $model->operationalMode = $map['OperationalMode'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['Conflicts'])) {
            $model->conflicts = conflicts::fromMap($map['Conflicts']);
        }

        return $model;
    }
}
