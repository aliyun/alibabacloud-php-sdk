<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;
use AlibabaCloud\Tea\Model;

class DescribeBackupMachineStatusResponseBody extends Model
{
    /**
     * @var backupMachineStatus
     */
    public $backupMachineStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupMachineStatus' => 'BackupMachineStatus',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMachineStatus) {
            $res['BackupMachineStatus'] = null !== $this->backupMachineStatus ? $this->backupMachineStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupMachineStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMachineStatus'])) {
            $model->backupMachineStatus = backupMachineStatus::fromMap($map['BackupMachineStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
