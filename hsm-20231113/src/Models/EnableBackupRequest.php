<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class EnableBackupRequest extends Model
{
    /**
     * @description The ID of the backup.
     *
     * This parameter is required.
     *
     * @example backup-1736207****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the HSM.
     *
     * This parameter is required.
     *
     * @example hsm-cn-mp90fxef****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'backupId' => 'BackupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
