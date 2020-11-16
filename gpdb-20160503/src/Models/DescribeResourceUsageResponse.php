<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var int
     */
    public $backupSize;
    protected $_name = [
        'requestId'    => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'engine'       => 'Engine',
        'diskUsed'     => 'DiskUsed',
        'dataSize'     => 'DataSize',
        'logSize'      => 'LogSize',
        'backupSize'   => 'BackupSize',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('diskUsed', $this->diskUsed, true);
        Model::validateRequired('dataSize', $this->dataSize, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('backupSize', $this->backupSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceUsageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        return $model;
    }
}
