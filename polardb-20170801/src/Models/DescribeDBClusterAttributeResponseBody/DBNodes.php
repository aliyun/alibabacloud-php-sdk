<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @description The number of CPU cores for compute node scale-out within seconds.
     *
     * @example 6
     *
     * @var string
     */
    public $addedCpuCores;

    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @description The time when the node was created.
     *
     * @example 2020-03-23T21:35:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of the node.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The ID of the node.
     *
     * @example pi-****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The role of the node. Valid values:
     *
     *   **Writer**: The node is the primary node.
     *   **Reader**: The node is a read-only node.
     *
     * @example Reader
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description The status of the node. Valid values:
     *
     *   **Creating**: The cluster is being created.
     *   **Running**: The cluster is running.
     *   **Deleting**: The cluster is being deleted.
     *   **Rebooting**: The cluster is restarting.
     *   **DBNodeCreating**: PolarProxy is being added.
     *   **DBNodeDeleting**: PolarProxy is being deleted.
     *   **ClassChanging**: The specification type of PolarProxy are being modified.
     *   **NetAddressCreating**: The network connection is being created.
     *   **NetAddressDeleting**: The network connection is being deleted.
     *   **NetAddressModifying**: The network connection is being modified.
     *   **MinorVersionUpgrading**: The minor version is being updated.
     *   **Maintaining**: The cluster is being maintained.
     *   **Switching**: A failover is being performed.
     *
     * @example Running
     *
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description The failover priority. Each node is assigned a failover priority. If a failover occurs, a node can be selected as a primary node. The priority determines the probability at which a node is selected as a primary node. A larger value indicates a higher priority. Valid values: 1 to 15.
     *
     * @example 1
     *
     * @var int
     */
    public $failoverPriority;

    /**
     * @description Indicates whether the hot standby feature is enabled. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $hotReplicaMode;

    /**
     * @description Indicates whether the In-Memory Column Index (IMCI) feature is enabled. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $imciSwitch;

    /**
     * @description The ID of the primary node in the cluster that runs Multi-master Cluster Edition.
     *
     * @example pi-bp18z52akld3*****
     *
     * @var string
     */
    public $masterId;

    /**
     * @description The maximum number of concurrent connections in the cluster.
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
     * @var string
     */
    public $memorySize;

    /**
     * @description Indicates whether the global consistency (high-performance mode) feature is enabled for the node. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $sccMode;

    /**
     * @description The routing weight of the node. Valid values: 1 to 100 Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $serverWeight;

    /**
     * @description The type of the serverless node. Only **AgileServerless** can be returned.
     *
     * > This parameter is supported only for serverless clusters.
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addedCpuCores'    => 'AddedCpuCores',
        'cpuCores'         => 'CpuCores',
        'creationTime'     => 'CreationTime',
        'DBNodeClass'      => 'DBNodeClass',
        'DBNodeId'         => 'DBNodeId',
        'DBNodeRole'       => 'DBNodeRole',
        'DBNodeStatus'     => 'DBNodeStatus',
        'failoverPriority' => 'FailoverPriority',
        'hotReplicaMode'   => 'HotReplicaMode',
        'imciSwitch'       => 'ImciSwitch',
        'masterId'         => 'MasterId',
        'maxConnections'   => 'MaxConnections',
        'maxIOPS'          => 'MaxIOPS',
        'memorySize'       => 'MemorySize',
        'sccMode'          => 'SccMode',
        'serverWeight'     => 'ServerWeight',
        'serverlessType'   => 'ServerlessType',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedCpuCores) {
            $res['AddedCpuCores'] = $this->addedCpuCores;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
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
        if (null !== $this->hotReplicaMode) {
            $res['HotReplicaMode'] = $this->hotReplicaMode;
        }
        if (null !== $this->imciSwitch) {
            $res['ImciSwitch'] = $this->imciSwitch;
        }
        if (null !== $this->masterId) {
            $res['MasterId'] = $this->masterId;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->sccMode) {
            $res['SccMode'] = $this->sccMode;
        }
        if (null !== $this->serverWeight) {
            $res['ServerWeight'] = $this->serverWeight;
        }
        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
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
        if (isset($map['AddedCpuCores'])) {
            $model->addedCpuCores = $map['AddedCpuCores'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
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
        if (isset($map['HotReplicaMode'])) {
            $model->hotReplicaMode = $map['HotReplicaMode'];
        }
        if (isset($map['ImciSwitch'])) {
            $model->imciSwitch = $map['ImciSwitch'];
        }
        if (isset($map['MasterId'])) {
            $model->masterId = $map['MasterId'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['SccMode'])) {
            $model->sccMode = $map['SccMode'];
        }
        if (isset($map['ServerWeight'])) {
            $model->serverWeight = $map['ServerWeight'];
        }
        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
