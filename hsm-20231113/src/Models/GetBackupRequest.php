<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class GetBackupRequest extends Model
{
    /**
     * @example backup-fdb897sdf****
     *
     * @var string
     */
    public $backupId;
    protected $_name = [
        'backupId' => 'BackupId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        return $model;
    }
}
