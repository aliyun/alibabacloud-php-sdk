<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeEntrys\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntrys extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var nextHops[]
     */
    public $nextHops;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'type'                 => 'Type',
        'status'               => 'Status',
        'nextHopType'          => 'NextHopType',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHops'             => 'NextHops',
        'instanceId'           => 'InstanceId',
        'routeTableId'         => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHops) {
            $res['NextHops'] = [];
            if (null !== $this->nextHops && \is_array($this->nextHops)) {
                $n = 0;
                foreach ($this->nextHops as $item) {
                    $res['NextHops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHops'])) {
            if (!empty($map['NextHops'])) {
                $model->nextHops = [];
                $n               = 0;
                foreach ($map['NextHops'] as $item) {
                    $model->nextHops[$n++] = null !== $item ? nextHops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
