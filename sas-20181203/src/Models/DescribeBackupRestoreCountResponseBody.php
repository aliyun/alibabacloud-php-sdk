<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody\backupRestoreCount;

class DescribeBackupRestoreCountResponseBody extends Model
{
    /**
     * @var backupRestoreCount
     */
    public $backupRestoreCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRestoreCount' => 'BackupRestoreCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backupRestoreCount) {
            $this->backupRestoreCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRestoreCount) {
            $res['BackupRestoreCount'] = null !== $this->backupRestoreCount ? $this->backupRestoreCount->toArray($noStream) : $this->backupRestoreCount;
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
        if (isset($map['BackupRestoreCount'])) {
            $model->backupRestoreCount = backupRestoreCount::fromMap($map['BackupRestoreCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
