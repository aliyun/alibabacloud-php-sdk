<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteTablesResponseBody;

use AlibabaCloud\Dara\Model;

class routeTables extends Model
{
    /**
     * @var string
     */
    public $associateType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var bool
     */
    public $isDefaultGatewayRouteTable;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'associateType' => 'AssociateType',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'isDefaultGatewayRouteTable' => 'IsDefaultGatewayRouteTable',
        'networkId' => 'NetworkId',
        'routeTableId' => 'RouteTableId',
        'routeTableName' => 'RouteTableName',
        'status' => 'Status',
        'type' => 'Type',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateType) {
            $res['AssociateType'] = $this->associateType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->isDefaultGatewayRouteTable) {
            $res['IsDefaultGatewayRouteTable'] = $this->isDefaultGatewayRouteTable;
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
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['IsDefaultGatewayRouteTable'])) {
            $model->isDefaultGatewayRouteTable = $map['IsDefaultGatewayRouteTable'];
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
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
