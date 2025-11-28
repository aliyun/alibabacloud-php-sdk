<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSlowSQLRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $cpuTimeMs;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $durationTime;

    /**
     * @var int
     */
    public $lockWaitTime;

    /**
     * @var int
     */
    public $memBytes;

    /**
     * @var string
     */
    public $optimizer;

    /**
     * @var string
     */
    public $queryEndTime;

    /**
     * @var string
     */
    public $queryID;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var int
     */
    public $queueWaitTime;

    /**
     * @var int
     */
    public $spillBytes;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $sqlTruncated;

    /**
     * @var int
     */
    public $sqlTruncatedThreshold;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'cpuTimeMs' => 'CpuTimeMs',
        'DBName' => 'DBName',
        'durationTime' => 'DurationTime',
        'lockWaitTime' => 'LockWaitTime',
        'memBytes' => 'MemBytes',
        'optimizer' => 'Optimizer',
        'queryEndTime' => 'QueryEndTime',
        'queryID' => 'QueryID',
        'queryStartTime' => 'QueryStartTime',
        'queueWaitTime' => 'QueueWaitTime',
        'spillBytes' => 'SpillBytes',
        'sqlText' => 'SqlText',
        'sqlTruncated' => 'SqlTruncated',
        'sqlTruncatedThreshold' => 'SqlTruncatedThreshold',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuTimeMs) {
            $res['CpuTimeMs'] = $this->cpuTimeMs;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->durationTime) {
            $res['DurationTime'] = $this->durationTime;
        }

        if (null !== $this->lockWaitTime) {
            $res['LockWaitTime'] = $this->lockWaitTime;
        }

        if (null !== $this->memBytes) {
            $res['MemBytes'] = $this->memBytes;
        }

        if (null !== $this->optimizer) {
            $res['Optimizer'] = $this->optimizer;
        }

        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
        }

        if (null !== $this->queryID) {
            $res['QueryID'] = $this->queryID;
        }

        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }

        if (null !== $this->queueWaitTime) {
            $res['QueueWaitTime'] = $this->queueWaitTime;
        }

        if (null !== $this->spillBytes) {
            $res['SpillBytes'] = $this->spillBytes;
        }

        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        if (null !== $this->sqlTruncated) {
            $res['SqlTruncated'] = $this->sqlTruncated;
        }

        if (null !== $this->sqlTruncatedThreshold) {
            $res['SqlTruncatedThreshold'] = $this->sqlTruncatedThreshold;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['CpuTimeMs'])) {
            $model->cpuTimeMs = $map['CpuTimeMs'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DurationTime'])) {
            $model->durationTime = $map['DurationTime'];
        }

        if (isset($map['LockWaitTime'])) {
            $model->lockWaitTime = $map['LockWaitTime'];
        }

        if (isset($map['MemBytes'])) {
            $model->memBytes = $map['MemBytes'];
        }

        if (isset($map['Optimizer'])) {
            $model->optimizer = $map['Optimizer'];
        }

        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }

        if (isset($map['QueryID'])) {
            $model->queryID = $map['QueryID'];
        }

        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }

        if (isset($map['QueueWaitTime'])) {
            $model->queueWaitTime = $map['QueueWaitTime'];
        }

        if (isset($map['SpillBytes'])) {
            $model->spillBytes = $map['SpillBytes'];
        }

        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        if (isset($map['SqlTruncated'])) {
            $model->sqlTruncated = $map['SqlTruncated'];
        }

        if (isset($map['SqlTruncatedThreshold'])) {
            $model->sqlTruncatedThreshold = $map['SqlTruncatedThreshold'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
