<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserBackupFileResponseBody extends Model
{
    /**
     * @description The ID of the backup file.
     *
     * @example b-g14d0m772f7b********
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The request ID.
     *
     * @example 6A236067-4727-4B42-92CF-734E417ED69A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupId'  => 'BackupId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserBackupFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
