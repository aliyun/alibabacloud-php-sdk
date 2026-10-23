<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupLogDownloadLinksRequest extends Model
{
    /**
     * @var string
     */
    public $backupLogIds;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $expireHours;
    protected $_name = [
        'backupLogIds' => 'BackupLogIds',
        'DBClusterId' => 'DBClusterId',
        'expireHours' => 'ExpireHours',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupLogIds) {
            $res['BackupLogIds'] = $this->backupLogIds;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->expireHours) {
            $res['ExpireHours'] = $this->expireHours;
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
        if (isset($map['BackupLogIds'])) {
            $model->backupLogIds = $map['BackupLogIds'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExpireHours'])) {
            $model->expireHours = $map['ExpireHours'];
        }

        return $model;
    }
}
