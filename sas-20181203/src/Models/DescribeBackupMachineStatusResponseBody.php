<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;
use AlibabaCloud\Tea\Model;

class DescribeBackupMachineStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupMachineStatus
     */
    public $backupMachineStatus;
    protected $_name = [
        'requestId'           => 'RequestId',
        'backupMachineStatus' => 'BackupMachineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupMachineStatus) {
            $res['BackupMachineStatus'] = null !== $this->backupMachineStatus ? $this->backupMachineStatus->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupMachineStatus'])) {
            $model->backupMachineStatus = backupMachineStatus::fromMap($map['BackupMachineStatus']);
        }

        return $model;
    }
}
