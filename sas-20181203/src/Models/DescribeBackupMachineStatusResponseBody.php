<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;

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
        if (null !== $this->backupMachineStatus) {
            $this->backupMachineStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupMachineStatus) {
            $res['BackupMachineStatus'] = null !== $this->backupMachineStatus ? $this->backupMachineStatus->toArray($noStream) : $this->backupMachineStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupMachineStatus'])) {
            $model->backupMachineStatus = backupMachineStatus::fromMap($map['BackupMachineStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
