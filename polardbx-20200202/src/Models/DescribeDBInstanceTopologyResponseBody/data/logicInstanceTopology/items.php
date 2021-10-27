<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items\connectionIp;
use AlibabaCloud\Tea\Model;

class items extends Model
{
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
    protected $_name = [
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
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
