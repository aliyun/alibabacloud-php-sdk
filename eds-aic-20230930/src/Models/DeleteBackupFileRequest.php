<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $backupFileIdList;
    protected $_name = [
        'backupFileIdList' => 'BackupFileIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupFileIdList) {
            $res['BackupFileIdList'] = $this->backupFileIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupFileIdList'])) {
            if (!empty($map['BackupFileIdList'])) {
                $model->backupFileIdList = $map['BackupFileIdList'];
            }
        }

        return $model;
    }
}
