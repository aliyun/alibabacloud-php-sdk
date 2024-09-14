<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ResetBackupRequest extends Model
{
    /**
     * @example backup-fdb897sdfg5****
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
     * @return ResetBackupRequest
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
