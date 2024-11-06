<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteTablesResponseBody;

use AlibabaCloud\Tea\Model;

class routeTables extends Model
{
    /**
     * @description The time when the route table was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-03-08T08:35:18Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing-15
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the network.
     *
     * @example n-5v9lufsezl4g****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The ID of the route table.
     *
     * @example rt-5xde2bit9****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @description The status. Valid values:
     *
     *   Available: The route table is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the route table. Valid values:
     *
     *   Custom: custom route table.
     *   System: system route table.
     *
     * @example System
     *
     * @var string
     */
    public $type;

    /**
     * @description The vSwitches that are associated with the route table.
     *
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'ensRegionId'    => 'EnsRegionId',
        'networkId'      => 'NetworkId',
        'routeTableId'   => 'RouteTableId',
        'routeTableName' => 'RouteTableName',
        'status'         => 'Status',
        'type'           => 'Type',
        'vSwitchIds'     => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
