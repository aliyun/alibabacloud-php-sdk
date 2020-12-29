<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries\conflicts;
use AlibabaCloud\Tea\Model;

class publishedRouteEntries extends Model
{
    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var conflicts[]
     */
    public $conflicts;

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
    protected $_name = [
        'nextHopId'                 => 'NextHopId',
        'conflicts'                 => 'Conflicts',
        'publishStatus'             => 'PublishStatus',
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'nextHopType'               => 'NextHopType',
        'operationalMode'           => 'OperationalMode',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'routeType'                 => 'RouteType',
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
        if (null !== $this->conflicts) {
            $res['Conflicts'] = [];
            if (null !== $this->conflicts && \is_array($this->conflicts)) {
                $n = 0;
                foreach ($this->conflicts as $item) {
                    $res['Conflicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishedRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['Conflicts'])) {
            if (!empty($map['Conflicts'])) {
                $model->conflicts = [];
                $n                = 0;
                foreach ($map['Conflicts'] as $item) {
                    $model->conflicts[$n++] = null !== $item ? conflicts::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
