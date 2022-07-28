<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange\fullBackupList;

use AlibabaCloud\Tea\Model;

class fullBackupDetail extends Model
{
    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'endTime'     => 'EndTime',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullBackupDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
