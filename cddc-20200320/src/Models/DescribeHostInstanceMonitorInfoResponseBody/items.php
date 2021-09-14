<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostInstanceMonitorInfoResponseBody;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostInstanceMonitorInfoResponseBody\items\auroraSwitchInstanceLog;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var auroraSwitchInstanceLog
     */
    public $auroraSwitchInstanceLog;
    protected $_name = [
        'status'                  => 'Status',
        'memSize'                 => 'MemSize',
        'diskSize'                => 'DiskSize',
        'ip'                      => 'Ip',
        'DBInstanceId'            => 'DBInstanceId',
        'levelName'               => 'LevelName',
        'engine'                  => 'Engine',
        'role'                    => 'Role',
        'port'                    => 'Port',
        'cpuCores'                => 'CpuCores',
        'engineVersion'           => 'EngineVersion',
        'auroraSwitchInstanceLog' => 'AuroraSwitchInstanceLog',
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
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->auroraSwitchInstanceLog) {
            $res['AuroraSwitchInstanceLog'] = null !== $this->auroraSwitchInstanceLog ? $this->auroraSwitchInstanceLog->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['AuroraSwitchInstanceLog'])) {
            $model->auroraSwitchInstanceLog = auroraSwitchInstanceLog::fromMap($map['AuroraSwitchInstanceLog']);
        }

        return $model;
    }
}
