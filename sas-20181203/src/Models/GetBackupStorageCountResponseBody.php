<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponseBody\backupStorageCount;

class GetBackupStorageCountResponseBody extends Model
{
    /**
     * @var backupStorageCount
     */
    public $backupStorageCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupStorageCount' => 'BackupStorageCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backupStorageCount) {
            $this->backupStorageCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupStorageCount) {
            $res['BackupStorageCount'] = null !== $this->backupStorageCount ? $this->backupStorageCount->toArray($noStream) : $this->backupStorageCount;
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
        if (isset($map['BackupStorageCount'])) {
            $model->backupStorageCount = backupStorageCount::fromMap($map['BackupStorageCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
