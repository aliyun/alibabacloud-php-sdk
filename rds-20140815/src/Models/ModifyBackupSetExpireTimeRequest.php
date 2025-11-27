<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupSetExpireTimeRequest extends Model
{
    /**
     * @var int
     */
    public $backupId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $expectExpireTime;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'backupId' => 'BackupId',
        'DBInstanceId' => 'DBInstanceId',
        'expectExpireTime' => 'ExpectExpireTime',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->expectExpireTime) {
            $res['ExpectExpireTime'] = $this->expectExpireTime;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ExpectExpireTime'])) {
            $model->expectExpireTime = $map['ExpectExpireTime'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
