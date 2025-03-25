<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class DBNodes extends Model
{
    /**
     * @var string
     */
    public $addedCpuCores;

    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeDescription;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $DBNodeRole;

    /**
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @var int
     */
    public $failoverPriority;

    /**
     * @var string
     */
    public $hotReplicaMode;

    /**
     * @var string
     */
    public $imciSwitch;

    /**
     * @var string
     */
    public $masterId;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $memorySize;

    /**
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
     * @var string
     */
    public $orca;

    /**
     * @var string
     */
    public $remoteMemorySize;

    /**
     * @var string
     */
    public $sccMode;

    /**
     * @var string
     */
    public $serverWeight;

    /**
     * @var string
     */
    public $serverlessType;

    /**
     * @var string
     */
    public $subCluster;

    /**
     * @var string
     */
    public $subGroupDescription;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addedCpuCores' => 'AddedCpuCores',
        'cpuCores' => 'CpuCores',
        'creationTime' => 'CreationTime',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeDescription' => 'DBNodeDescription',
        'DBNodeId' => 'DBNodeId',
        'DBNodeRole' => 'DBNodeRole',
        'DBNodeStatus' => 'DBNodeStatus',
        'failoverPriority' => 'FailoverPriority',
        'hotReplicaMode' => 'HotReplicaMode',
        'imciSwitch' => 'ImciSwitch',
        'masterId' => 'MasterId',
        'maxConnections' => 'MaxConnections',
        'maxIOPS' => 'MaxIOPS',
        'memorySize' => 'MemorySize',
        'mirrorInsName' => 'MirrorInsName',
        'multiMasterLocalStandby' => 'MultiMasterLocalStandby',
        'multiMasterPrimaryNode' => 'MultiMasterPrimaryNode',
        'orca' => 'Orca',
        'remoteMemorySize' => 'RemoteMemorySize',
        'sccMode' => 'SccMode',
        'serverWeight' => 'ServerWeight',
        'serverlessType' => 'ServerlessType',
        'subCluster' => 'SubCluster',
        'subGroupDescription' => 'SubGroupDescription',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->subGroupDescription) {
            $res['SubGroupDescription'] = $this->subGroupDescription;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['SubGroupDescription'])) {
            $model->subGroupDescription = $map['SubGroupDescription'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
