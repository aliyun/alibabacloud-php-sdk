<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\publishedRouteEntry\conflicts;

class publishedRouteEntry extends Model
{
    /**
     * @var string
     */
    public $childInstanceRouteTableId;

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
    public $nextHopId;

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
    public $routeType;
    protected $_name = [
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'conflicts' => 'Conflicts',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopId' => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'operationalMode' => 'OperationalMode',
        'publishStatus' => 'PublishStatus',
        'routeType' => 'RouteType',
    ];

    public function validate()
    {
        if (null !== $this->conflicts) {
            $this->conflicts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childInstanceRouteTableId) {
            $res['ChildInstanceRouteTableId'] = $this->childInstanceRouteTableId;
        }

        if (null !== $this->conflicts) {
            $res['Conflicts'] = null !== $this->conflicts ? $this->conflicts->toArray($noStream) : $this->conflicts;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
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

        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
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
        if (isset($map['ChildInstanceRouteTableId'])) {
            $model->childInstanceRouteTableId = $map['ChildInstanceRouteTableId'];
        }

        if (isset($map['Conflicts'])) {
            $model->conflicts = conflicts::fromMap($map['Conflicts']);
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
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

        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        return $model;
    }
}
