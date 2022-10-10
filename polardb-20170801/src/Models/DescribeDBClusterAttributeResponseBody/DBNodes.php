<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @var string
     */
    public $addedCpuCores;

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
    public $sccMode;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addedCpuCores'    => 'AddedCpuCores',
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
        'sccMode'          => 'SccMode',
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
        if (null !== $this->sccMode) {
            $res['SccMode'] = $this->sccMode;
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
        if (isset($map['SccMode'])) {
            $model->sccMode = $map['SccMode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
