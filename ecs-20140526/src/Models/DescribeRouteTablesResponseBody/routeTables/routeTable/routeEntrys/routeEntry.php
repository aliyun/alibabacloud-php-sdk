<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

class routeEntry extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $nextHopType;
    /**
     * @var nextHops
     */
    public $nextHops;
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
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'instanceId'           => 'InstanceId',
        'nextHopType'          => 'NextHopType',
        'nextHops'             => 'NextHops',
        'routeTableId'         => 'RouteTableId',
        'status'               => 'Status',
        'type'                 => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->nextHops) {
            $this->nextHops->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }

        if (null !== $this->nextHops) {
            $res['NextHops'] = null !== $this->nextHops ? $this->nextHops->toArray($noStream) : $this->nextHops;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        if (isset($map['NextHops'])) {
            $model->nextHops = nextHops::fromMap($map['NextHops']);
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
