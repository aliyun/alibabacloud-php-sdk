<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupJobRequest extends Model
{
    /**
     * @var int
     */
    public $backupJobId;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'backupJobId' => 'BackupJobId',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
