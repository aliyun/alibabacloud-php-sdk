<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody;

use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos\perfInfo;
use AlibabaCloud\Tea\Model;

class hostInstanceConsoleInfos extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $maxConnIncreaseRatioValue;

    /**
     * @var int
     */
    public $memSize;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $memoryIncreaseRatioValue;

    /**
     * @var int
     */
    public $cpuIncreaseRatioValue;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var perfInfo
     */
    public $perfInfo;
    protected $_name = [
        'status'                    => 'Status',
        'maxConnIncreaseRatioValue' => 'MaxConnIncreaseRatioValue',
        'memSize'                   => 'MemSize',
        'diskSize'                  => 'DiskSize',
        'ip'                        => 'Ip',
        'port'                      => 'Port',
        'engineVersion'             => 'EngineVersion',
        'memoryIncreaseRatioValue'  => 'MemoryIncreaseRatioValue',
        'cpuIncreaseRatioValue'     => 'CpuIncreaseRatioValue',
        'DBInstanceId'              => 'DBInstanceId',
        'engine'                    => 'Engine',
        'levelName'                 => 'LevelName',
        'role'                      => 'Role',
        'DBInstanceDescription'     => 'DBInstanceDescription',
        'cpuCores'                  => 'CpuCores',
        'perfInfo'                  => 'PerfInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->maxConnIncreaseRatioValue) {
            $res['MaxConnIncreaseRatioValue'] = $this->maxConnIncreaseRatioValue;
        }
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->memoryIncreaseRatioValue) {
            $res['MemoryIncreaseRatioValue'] = $this->memoryIncreaseRatioValue;
        }
        if (null !== $this->cpuIncreaseRatioValue) {
            $res['CpuIncreaseRatioValue'] = $this->cpuIncreaseRatioValue;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->perfInfo) {
            $res['PerfInfo'] = null !== $this->perfInfo ? $this->perfInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostInstanceConsoleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MaxConnIncreaseRatioValue'])) {
            $model->maxConnIncreaseRatioValue = $map['MaxConnIncreaseRatioValue'];
        }
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['MemoryIncreaseRatioValue'])) {
            $model->memoryIncreaseRatioValue = $map['MemoryIncreaseRatioValue'];
        }
        if (isset($map['CpuIncreaseRatioValue'])) {
            $model->cpuIncreaseRatioValue = $map['CpuIncreaseRatioValue'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['PerfInfo'])) {
            $model->perfInfo = perfInfo::fromMap($map['PerfInfo']);
        }

        return $model;
    }
}
