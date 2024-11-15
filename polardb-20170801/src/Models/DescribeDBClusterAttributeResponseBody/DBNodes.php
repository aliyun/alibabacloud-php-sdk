<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @description Number of CPU cores for second-level elastic scaling.
     *
     * @example 6
     *
     * @var string
     */
    public $addedCpuCores;

    /**
     * @description Number of CPU cores for the node.
     *
     * @example 2
     *
     * @var string
     */
    public $cpuCores;

    /**
     * @description Node creation time.
     *
     * @example 2020-03-23T21:35:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Node specification.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeDescription;

    /**
     * @description Node ID.
     *
     * @example pi-****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description Node role, with possible values as follows:
     *
     * - **Writer**: Primary node.
     * - **Reader**: Read-only node.
     * @example Reader
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description Node status, with possible values as follows:
     * **Creating**: Creating
     * **Running**: Running
     * **Deleting**: Deleting
     * **Rebooting**: Rebooting
     * **DBNodeCreating**: Adding node
     * **DBNodeDeleting**: Removing node
     * **ClassChanging**: Modifying node specification
     * **NetAddressCreating**: Creating network connection
     * **NetAddressDeleting**: Deleting network connection
     * **NetAddressModifying**: Modifying network connection
     * **MinorVersionUpgrading**: Upgrading minor version
     * **Maintaining**: Instance maintenance
     * **Switching**: Switching
     *
     * @example Running
     *
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description Failover priority. Each node has a failover priority, determining the likelihood of being elected as the primary node during a failover. A higher value indicates a higher priority.
     * Range: 1 to 15.
     * @example 1
     *
     * @var int
     */
    public $failoverPriority;

    /**
     * @description Whether hot standby is enabled. Possible values are:
     *
     * - **ON**: Enabled
     * - **OFF**: Disabled
     * @example ON
     *
     * @var string
     */
    public $hotReplicaMode;

    /**
     * @description Whether columnar index is enabled. Possible values are:
     *
     * - **ON**: Enabled
     * - **OFF**: Disabled
     * @example ON
     *
     * @var string
     */
    public $imciSwitch;

    /**
     * @description Primary node ID of the multi-master architecture cluster edition.
     *
     * @example pi-bp18z52akld3*****
     *
     * @var string
     */
    public $masterId;

    /**
     * @description Maximum concurrent connections of the cluster.
     *
     * @example 8000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description Maximum number of I/O requests, that is, IOPS.
     *
     * @example 32000
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description Node memory size, in MB.
     *
     * @example 8192
     *
     * @var string
     */
    public $memorySize;

    /**
     * @description The name of the hot standby compute node corresponding to the node when the hot standby storage and compute clusters feature is enabled.
     *
     * @example pi-bp18z52mirror*****
     *
     * @var string
     */
    public $mirrorInsName;

    /**
     * @var string
     */
    public $multiMasterLocalStandby;

    /**
     * @var string
     */
    public $multiMasterPrimaryNode;

    /**
     * @description Orca feature, valid values are:
     * - off: disabled
     * @example off
     *
     * @var string
     */
    public $orca;

    /**
     * @description Remote memory size, in MB.
     *
     * @example 3072
     *
     * @var string
     */
    public $remoteMemorySize;

    /**
     * @description Whether the node has the global consistency (high-performance mode) feature enabled. Possible values are:
     *
     * - **ON**: Enabled
     *
     * - **OFF**: Disabled
     *
     * This parameter is required.
     * @example ON
     *
     * @var string
     */
    public $sccMode;

    /**
     * @description Routing weight.
     * Range: 1~100. Default is 1.
     * @example 1
     *
     * @var string
     */
    public $serverWeight;

    /**
     * @description Serverless type. Possible values include:
     *
     * - **AgileServerless**: Agile
     * - **SteadyServerless**: Steady
     *
     * > This parameter is only supported by Serverless clusters.
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description Identifies whether the node is in the primary or standby availability zone, primarily used in resource mirroring scenarios.
     * Values include:
     * - **Primary**: Primary Availability Zone
     * - **Standby**: Standby Availability Zone
     * @example Primary
     *
     * @var string
     */
    public $subCluster;

    /**
     * @description Availability zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addedCpuCores'           => 'AddedCpuCores',
        'cpuCores'                => 'CpuCores',
        'creationTime'            => 'CreationTime',
        'DBNodeClass'             => 'DBNodeClass',
        'DBNodeDescription'       => 'DBNodeDescription',
        'DBNodeId'                => 'DBNodeId',
        'DBNodeRole'              => 'DBNodeRole',
        'DBNodeStatus'            => 'DBNodeStatus',
        'failoverPriority'        => 'FailoverPriority',
        'hotReplicaMode'          => 'HotReplicaMode',
        'imciSwitch'              => 'ImciSwitch',
        'masterId'                => 'MasterId',
        'maxConnections'          => 'MaxConnections',
        'maxIOPS'                 => 'MaxIOPS',
        'memorySize'              => 'MemorySize',
        'mirrorInsName'           => 'MirrorInsName',
        'multiMasterLocalStandby' => 'MultiMasterLocalStandby',
        'multiMasterPrimaryNode'  => 'MultiMasterPrimaryNode',
        'orca'                    => 'Orca',
        'remoteMemorySize'        => 'RemoteMemorySize',
        'sccMode'                 => 'SccMode',
        'serverWeight'            => 'ServerWeight',
        'serverlessType'          => 'ServerlessType',
        'subCluster'              => 'SubCluster',
        'zoneId'                  => 'ZoneId',
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
        if (null !== $this->DBNodeDescription) {
            $res['DBNodeDescription'] = $this->DBNodeDescription;
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
        if (null !== $this->mirrorInsName) {
            $res['MirrorInsName'] = $this->mirrorInsName;
        }
        if (null !== $this->multiMasterLocalStandby) {
            $res['MultiMasterLocalStandby'] = $this->multiMasterLocalStandby;
        }
        if (null !== $this->multiMasterPrimaryNode) {
            $res['MultiMasterPrimaryNode'] = $this->multiMasterPrimaryNode;
        }
        if (null !== $this->orca) {
            $res['Orca'] = $this->orca;
        }
        if (null !== $this->remoteMemorySize) {
            $res['RemoteMemorySize'] = $this->remoteMemorySize;
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
        if (null !== $this->subCluster) {
            $res['SubCluster'] = $this->subCluster;
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
        if (isset($map['DBNodeDescription'])) {
            $model->DBNodeDescription = $map['DBNodeDescription'];
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
        if (isset($map['MirrorInsName'])) {
            $model->mirrorInsName = $map['MirrorInsName'];
        }
        if (isset($map['MultiMasterLocalStandby'])) {
            $model->multiMasterLocalStandby = $map['MultiMasterLocalStandby'];
        }
        if (isset($map['MultiMasterPrimaryNode'])) {
            $model->multiMasterPrimaryNode = $map['MultiMasterPrimaryNode'];
        }
        if (isset($map['Orca'])) {
            $model->orca = $map['Orca'];
        }
        if (isset($map['RemoteMemorySize'])) {
            $model->remoteMemorySize = $map['RemoteMemorySize'];
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
        if (isset($map['SubCluster'])) {
            $model->subCluster = $map['SubCluster'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
