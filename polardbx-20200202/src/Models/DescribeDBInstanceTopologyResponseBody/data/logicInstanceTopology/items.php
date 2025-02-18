<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items\azoneRoleList;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items\connectionIp;

class items extends Model
{
    /**
     * @var bool
     */
    public $activated;
    /**
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
     * @var string
     */
    public $DBInstanceCreateTime;
    /**
     * @var string
     */
    public $DBInstanceDescription;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var int
     */
    public $DBInstanceStatus;
    /**
     * @var string
     */
    public $DBInstanceStatusDescription;
    /**
     * @var int
     */
    public $diskSize;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineVersion;
    /**
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
     * @var int
     */
    public $maxConnections;
    /**
     * @var int
     */
    public $maxIops;
    /**
     * @var string
     */
    public $nodeClass;
    /**
     * @var string
     */
    public $phyInstanceName;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $storageUsed;
    /**
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
        if (\is_array($this->azoneRoleList)) {
            Model::validateArray($this->azoneRoleList);
        }
        if (\is_array($this->connectionIp)) {
            Model::validateArray($this->connectionIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activated) {
            $res['Activated'] = $this->activated;
        }

        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }

        if (null !== $this->azoneRoleList) {
            if (\is_array($this->azoneRoleList)) {
                $res['AzoneRoleList'] = [];
                $n1                   = 0;
                foreach ($this->azoneRoleList as $item1) {
                    $res['AzoneRoleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }

        if (null !== $this->connectionIp) {
            if (\is_array($this->connectionIp)) {
                $res['ConnectionIp'] = [];
                $n1                  = 0;
                foreach ($this->connectionIp as $item1) {
                    $res['ConnectionIp'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                   = 0;
                foreach ($map['AzoneRoleList'] as $item1) {
                    $model->azoneRoleList[$n1++] = azoneRoleList::fromMap($item1);
                }
            }
        }

        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }

        if (isset($map['ConnectionIp'])) {
            if (!empty($map['ConnectionIp'])) {
                $model->connectionIp = [];
                $n1                  = 0;
                foreach ($map['ConnectionIp'] as $item1) {
                    $model->connectionIp[$n1++] = connectionIp::fromMap($item1);
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
