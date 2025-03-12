<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponseBody\backupStorageCount;
use AlibabaCloud\Tea\Model;

class GetBackupStorageCountResponseBody extends Model
{
    /**
     * @description The details about the anti-ransomware capacity.
     *
     * @var backupStorageCount
     */
    public $backupStorageCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 33C2CCFF-4BF8-5F88-9B5C-22F932F80E5A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupStorageCount' => 'BackupStorageCount',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupStorageCount) {
            $res['BackupStorageCount'] = null !== $this->backupStorageCount ? $this->backupStorageCount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupStorageCount'])) {
            $model->backupStorageCount = backupStorageCount::fromMap($map['BackupStorageCount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
