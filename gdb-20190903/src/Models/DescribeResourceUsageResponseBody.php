<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var int
     */
    public $coldBackupSize;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupSize'     => 'BackupSize',
        'coldBackupSize' => 'ColdBackupSize',
        'DBInstanceId'   => 'DBInstanceId',
        'dataSize'       => 'DataSize',
        'diskUsed'       => 'DiskUsed',
        'engine'         => 'Engine',
        'logSize'        => 'LogSize',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->coldBackupSize) {
            $res['ColdBackupSize'] = $this->coldBackupSize;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['ColdBackupSize'])) {
            $model->coldBackupSize = $map['ColdBackupSize'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
