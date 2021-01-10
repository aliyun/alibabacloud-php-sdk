<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesResponseBody;

use AlibabaCloud\Tea\Model;

class backupDumpTimes extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $dumpTime;
    protected $_name = [
        'backupId' => 'BackupId',
        'dumpTime' => 'DumpTime',
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
        if (null !== $this->dumpTime) {
            $res['DumpTime'] = $this->dumpTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDumpTimes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DumpTime'])) {
            $model->dumpTime = $map['DumpTime'];
        }

        return $model;
    }
}
