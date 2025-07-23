<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigBackupRemarkRequest extends Model
{
    /**
     * @description The ID of the backup.
     *
     * This parameter is required.
     *
     * @example backup-fdb897sdfg****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The name of the backup.
     *
     * @example backup-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the backup.
     *
     * @example Test backup.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'backupId' => 'BackupId',
        'name' => 'Name',
        'remark' => 'Remark',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigBackupRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
