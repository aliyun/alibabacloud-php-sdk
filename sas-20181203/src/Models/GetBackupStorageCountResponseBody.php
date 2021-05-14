<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponseBody\backupStorageCount;
use AlibabaCloud\Tea\Model;

class GetBackupStorageCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupStorageCount
     */
    public $backupStorageCount;
    protected $_name = [
        'requestId'          => 'RequestId',
        'backupStorageCount' => 'BackupStorageCount',
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
        if (null !== $this->backupStorageCount) {
            $res['BackupStorageCount'] = null !== $this->backupStorageCount ? $this->backupStorageCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBackupStorageCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupStorageCount'])) {
            $model->backupStorageCount = backupStorageCount::fromMap($map['BackupStorageCount']);
        }

        return $model;
    }
}
