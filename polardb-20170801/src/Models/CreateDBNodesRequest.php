<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest\DBNode;
use AlibabaCloud\Tea\Model;

class CreateDBNodesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f54a343f1a4233c1e7d1c5c******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The details of the read-only node.
     *
     * This parameter is required.
     * @var DBNode[]
     */
    public $DBNode;

    /**
     * @description The type of the node. Valid values:
     *
     *   RO
     *   STANDBY
     *   DLNode
     *
     * @example RO
     *
     * @var string
     */
    public $DBNodeType;

    /**
     * @description The ID of the cluster endpoint to which the read-only node is added. If you want to add the read-only node to multiple endpoints at the same time, separate the endpoint IDs with commas (,).
     * >- You can enter the ID of the default cluster endpoint or a custom cluster endpoint.
     * >- If you leave this parameter empty, the read-only node is added to all cluster endpoints for which the **Automatically Associate New Nodes** feature is enabled. If you set `AutoAddNewNodes` to `Enable`, the Automatically Associate New Nodes feature is enabled.
     * @example pe-****************,pe-****************
     *
     * @var string
     */
    public $endpointBindList;

    /**
     * @description Specifies whether to enable the In-Memory Column Index (IMCI) feature. Default value: OFF. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * > This parameter is invalid for a PolarDB for Oracle or PolarDB for PostgreSQL cluster.
     * @example ON
     *
     * @var string
     */
    public $imciSwitch;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The latest start time for upgrading the specifications within the scheduled time period. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >- If you specify `PlannedStartTime` but do not specify PlannedEndTime, the latest start time of the task is set to a value that is calculated by using the following formula: `PlannedEndTime value + 30 minutes`. For example, if you set `PlannedStartTime` to `2021-01-14T09:00:00Z` and you do not specify PlannedEndTime, the latest start time of the task is set to `2021-01-14T09:30:00Z`.
     * @example 2021-01-14T09:30:00Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time of the scheduled task for adding the read-only node. The scheduled task specifies that the task is run in the required period. Specify the time in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC.
     *
     * >- If you leave this parameter empty, the task for adding the read-only node is immediately run by default.
     * @example 2021-01-14T09:00:00Z
     *
     * @var string
     */
    public $plannedStartTime;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'DBClusterId'          => 'DBClusterId',
        'DBNode'               => 'DBNode',
        'DBNodeType'           => 'DBNodeType',
        'endpointBindList'     => 'EndpointBindList',
        'imciSwitch'           => 'ImciSwitch',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'plannedEndTime'       => 'PlannedEndTime',
        'plannedStartTime'     => 'PlannedStartTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBNode) {
            $res['DBNode'] = [];
            if (null !== $this->DBNode && \is_array($this->DBNode)) {
                $n = 0;
                foreach ($this->DBNode as $item) {
                    $res['DBNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBNodeType) {
            $res['DBNodeType'] = $this->DBNodeType;
        }
        if (null !== $this->endpointBindList) {
            $res['EndpointBindList'] = $this->endpointBindList;
        }
        if (null !== $this->imciSwitch) {
            $res['ImciSwitch'] = $this->imciSwitch;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }
        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBNode'])) {
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n             = 0;
                foreach ($map['DBNode'] as $item) {
                    $model->DBNode[$n++] = null !== $item ? DBNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBNodeType'])) {
            $model->DBNodeType = $map['DBNodeType'];
        }
        if (isset($map['EndpointBindList'])) {
            $model->endpointBindList = $map['EndpointBindList'];
        }
        if (isset($map['ImciSwitch'])) {
            $model->imciSwitch = $map['ImciSwitch'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }
        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
