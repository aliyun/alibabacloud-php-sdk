<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupExpireTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupExpireTime;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupExpireTime' => 'BackupExpireTime',
        'backupId' => 'BackupId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupExpireTime) {
            $res['BackupExpireTime'] = $this->backupExpireTime;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
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
        if (isset($map['BackupExpireTime'])) {
            $model->backupExpireTime = $map['BackupExpireTime'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
