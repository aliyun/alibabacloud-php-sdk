<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserBackupFileResponseBody extends Model
{
    /**
     * @description The ID of the deleted full backup file.
     *
     * @example b-w1haya7e4i25********
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the request.
     *
     * @example F28AE40B-203B-4CFE-B81F-FD981CD97B17
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
     * @return DeleteUserBackupFileResponseBody
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
