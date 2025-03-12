<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponseBody\backupRestoreCount;
use AlibabaCloud\Tea\Model;

class DescribeBackupRestoreCountResponseBody extends Model
{
    /**
     * @description The statistics of restoration tasks.
     *
     * @var backupRestoreCount
     */
    public $backupRestoreCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example ECC6B3E3-D496-512D-B46D-E6996A6B63EE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRestoreCount' => 'BackupRestoreCount',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRestoreCount) {
            $res['BackupRestoreCount'] = null !== $this->backupRestoreCount ? $this->backupRestoreCount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupRestoreCount'])) {
            $model->backupRestoreCount = backupRestoreCount::fromMap($map['BackupRestoreCount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
