<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'diskUsed'     => 'DiskUsed',
        'dataSize'     => 'DataSize',
        'requestId'    => 'RequestId',
        'backupSize'   => 'BackupSize',
        'logSize'      => 'LogSize',
        'DBInstanceId' => 'DBInstanceId',
        'engine'       => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
