<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items\azoneRoleList;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items\connectionIp;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $activated;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $azone;

    /**
     * @var azoneRoleList[]
     */
    public $azoneRoleList;

    /**
     * @var string
     */
    public $characterType;

    /**
     * @var connectionIp[]
     */
    public $connectionIp;

    /**
     * @var int
     */
    public $DBInstanceConnType;

    /**
     * @example 2021-10-21T10:30:45Z
     *
     * @var string
     */
    public $DBInstanceCreateTime;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @example 304726049
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example pxc-i-tk6t4z****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 8
     *
     * @var int
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceStatusDescription;

    /**
     * @example 3145728
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example 4000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @example 7000
     *
     * @var int
     */
    public $maxIops;

    /**
     * @example polarx.x4.large.2e
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @var string
     */
    public $phyInstanceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageUsed;

    /**
     * @example polarx-cdc-kernel-2.0.0-3985896
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'activated'                   => 'Activated',
        'azone'                       => 'Azone',
        'azoneRoleList'               => 'AzoneRoleList',
        'characterType'               => 'CharacterType',
        'connectionIp'                => 'ConnectionIp',
        'DBInstanceConnType'          => 'DBInstanceConnType',
        'DBInstanceCreateTime'        => 'DBInstanceCreateTime',
        'DBInstanceDescription'       => 'DBInstanceDescription',
        'DBInstanceId'                => 'DBInstanceId',
        'DBInstanceName'              => 'DBInstanceName',
        'DBInstanceStatus'            => 'DBInstanceStatus',
        'DBInstanceStatusDescription' => 'DBInstanceStatusDescription',
        'diskSize'                    => 'DiskSize',
        'engine'                      => 'Engine',
        'engineVersion'               => 'EngineVersion',
        'lockMode'                    => 'LockMode',
        'lockReason'                  => 'LockReason',
        'maintainEndTime'             => 'MaintainEndTime',
        'maintainStartTime'           => 'MaintainStartTime',
        'maxConnections'              => 'MaxConnections',
        'maxIops'                     => 'MaxIops',
        'nodeClass'                   => 'NodeClass',
        'phyInstanceName'             => 'PhyInstanceName',
        'region'                      => 'Region',
        'role'                        => 'Role',
        'status'                      => 'Status',
        'storageUsed'                 => 'StorageUsed',
        'version'                     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activated) {
            $res['Activated'] = $this->activated;
        }
        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }
        if (null !== $this->azoneRoleList) {
            $res['AzoneRoleList'] = [];
            if (null !== $this->azoneRoleList && \is_array($this->azoneRoleList)) {
                $n = 0;
                foreach ($this->azoneRoleList as $item) {
                    $res['AzoneRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->connectionIp) {
            $res['ConnectionIp'] = [];
            if (null !== $this->connectionIp && \is_array($this->connectionIp)) {
                $n = 0;
                foreach ($this->connectionIp as $item) {
                    $res['ConnectionIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceConnType) {
            $res['DBInstanceConnType'] = $this->DBInstanceConnType;
        }
        if (null !== $this->DBInstanceCreateTime) {
            $res['DBInstanceCreateTime'] = $this->DBInstanceCreateTime;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStatusDescription) {
            $res['DBInstanceStatusDescription'] = $this->DBInstanceStatusDescription;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIops) {
            $res['MaxIops'] = $this->maxIops;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->phyInstanceName) {
            $res['PhyInstanceName'] = $this->phyInstanceName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activated'])) {
            $model->activated = $map['Activated'];
        }
        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }
        if (isset($map['AzoneRoleList'])) {
            if (!empty($map['AzoneRoleList'])) {
                $model->azoneRoleList = [];
                $n                    = 0;
                foreach ($map['AzoneRoleList'] as $item) {
                    $model->azoneRoleList[$n++] = null !== $item ? azoneRoleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['ConnectionIp'])) {
            if (!empty($map['ConnectionIp'])) {
                $model->connectionIp = [];
                $n                   = 0;
                foreach ($map['ConnectionIp'] as $item) {
                    $model->connectionIp[$n++] = null !== $item ? connectionIp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceConnType'])) {
            $model->DBInstanceConnType = $map['DBInstanceConnType'];
        }
        if (isset($map['DBInstanceCreateTime'])) {
            $model->DBInstanceCreateTime = $map['DBInstanceCreateTime'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStatusDescription'])) {
            $model->DBInstanceStatusDescription = $map['DBInstanceStatusDescription'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIops'])) {
            $model->maxIops = $map['MaxIops'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['PhyInstanceName'])) {
            $model->phyInstanceName = $map['PhyInstanceName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
