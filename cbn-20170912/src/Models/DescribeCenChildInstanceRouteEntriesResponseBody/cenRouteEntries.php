<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\conflicts;
use AlibabaCloud\Tea\Model;

class cenRouteEntries extends Model
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
    public $routeTableId;

    /**
     * @var string[]
     */
    public $asPaths;

    /**
     * @var conflicts[]
     */
    public $conflicts;

    /**
     * @var string[]
     */
    public $communities;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var cenRouteMapRecords[]
     */
    public $cenRouteMapRecords;
    protected $_name = [
        'status'               => 'Status',
        'type'                 => 'Type',
        'publishStatus'        => 'PublishStatus',
        'nextHopType'          => 'NextHopType',
        'operationalMode'      => 'OperationalMode',
        'nextHopRegionId'      => 'NextHopRegionId',
        'nextHopInstanceId'    => 'NextHopInstanceId',
        'routeTableId'         => 'RouteTableId',
        'asPaths'              => 'AsPaths',
        'conflicts'            => 'Conflicts',
        'communities'          => 'Communities',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'cenRouteMapRecords'   => 'CenRouteMapRecords',
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
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->asPaths) {
            $res['AsPaths'] = $this->asPaths;
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
        if (null !== $this->communities) {
            $res['Communities'] = $this->communities;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = [];
            if (null !== $this->cenRouteMapRecords && \is_array($this->cenRouteMapRecords)) {
                $n = 0;
                foreach ($this->cenRouteMapRecords as $item) {
                    $res['CenRouteMapRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntries
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
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['AsPaths'])) {
            if (!empty($map['AsPaths'])) {
                $model->asPaths = $map['AsPaths'];
            }
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
        if (isset($map['Communities'])) {
            if (!empty($map['Communities'])) {
                $model->communities = $map['Communities'];
            }
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['CenRouteMapRecords'])) {
            if (!empty($map['CenRouteMapRecords'])) {
                $model->cenRouteMapRecords = [];
                $n                         = 0;
                foreach ($map['CenRouteMapRecords'] as $item) {
                    $model->cenRouteMapRecords[$n++] = null !== $item ? cenRouteMapRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
