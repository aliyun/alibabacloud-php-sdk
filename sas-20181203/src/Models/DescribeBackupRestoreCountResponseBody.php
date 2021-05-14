<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody\backupRestoreCount;
use AlibabaCloud\Tea\Model;

class DescribeBackupRestoreCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupRestoreCount
     */
    public $backupRestoreCount;
    protected $_name = [
        'requestId'          => 'RequestId',
        'backupRestoreCount' => 'BackupRestoreCount',
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
        if (null !== $this->backupRestoreCount) {
            $res['BackupRestoreCount'] = null !== $this->backupRestoreCount ? $this->backupRestoreCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupRestoreCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupRestoreCount'])) {
            $model->backupRestoreCount = backupRestoreCount::fromMap($map['BackupRestoreCount']);
        }

        return $model;
    }
}
