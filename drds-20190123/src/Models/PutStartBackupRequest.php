<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class PutStartBackupRequest extends Model
{
    /**
     * @var string
     */
    public $backupDbNames;

    /**
     * @var string
     */
    public $backupLevel;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'backupDbNames' => 'BackupDbNames',
        'backupLevel' => 'BackupLevel',
        'backupMode' => 'BackupMode',
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDbNames) {
            $res['BackupDbNames'] = $this->backupDbNames;
        }

        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
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
        if (isset($map['BackupDbNames'])) {
            $model->backupDbNames = $map['BackupDbNames'];
        }

        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
