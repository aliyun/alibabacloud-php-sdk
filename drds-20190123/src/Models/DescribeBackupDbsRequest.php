<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupDbsRequest extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $preferredRestoreTime;
    protected $_name = [
        'backupId'             => 'BackupId',
        'drdsInstanceId'       => 'DrdsInstanceId',
        'preferredRestoreTime' => 'PreferredRestoreTime',
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
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->preferredRestoreTime) {
            $res['PreferredRestoreTime'] = $this->preferredRestoreTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupDbsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PreferredRestoreTime'])) {
            $model->preferredRestoreTime = $map['PreferredRestoreTime'];
        }

        return $model;
    }
}
