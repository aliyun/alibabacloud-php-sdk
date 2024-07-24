<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @description The time when the node was created.
     *
     * @example 2020-03-23T21:35:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The specifications of the node.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The node ID.
     *
     * @example pi-****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The role of the node. Valid values:
     *
     *   **Writer**: the primary node
     *   **Reader**: a read-only node
     *
     * @example Reader
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description The status of the node. Valid values:
     *
     *   **Creating**: The node is being created.
     *   **Running**: The node is running.
     *   **Deleting**: The node is being deleted.
     *   **Rebooting**: The node is restarting.
     *   **ClassChanging**: The specifications of the node are being changed.
     *   **NetAddressCreating**: The network connection is being created.
     *   **NetAddressDeleting**: The network connection is being deleted.
     *   **NetAddressModifying**: The network connection is being modified.
     *   **MinorVersionUpgrading**: The minor version of the node is being updated.
     *   **Maintaining**: The node is being maintained.
     *   **Switching**: A failover is being performed.
     *
     * @example Running
     *
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description The failover priority. Each node is assigned a failover priority. The failover priority determines which node is selected as the primary node when a failover occurs. A larger value indicates a higher priority. Valid values: 1 to 15.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverPriority;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 8000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum input/output operations per second (IOPS).
     *
     * @example 32000
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'DBNodeClass'      => 'DBNodeClass',
        'DBNodeId'         => 'DBNodeId',
        'DBNodeRole'       => 'DBNodeRole',
        'DBNodeStatus'     => 'DBNodeStatus',
        'failoverPriority' => 'FailoverPriority',
        'maxConnections'   => 'MaxConnections',
        'maxIOPS'          => 'MaxIOPS',
        'zoneId'           => 'ZoneId',
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
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }
        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }
        if (null !== $this->failoverPriority) {
            $res['FailoverPriority'] = $this->failoverPriority;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }
        if (isset($map['FailoverPriority'])) {
            $model->failoverPriority = $map['FailoverPriority'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
