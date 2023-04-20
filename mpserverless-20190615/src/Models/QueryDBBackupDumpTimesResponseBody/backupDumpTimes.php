<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesResponseBody;

use AlibabaCloud\Tea\Model;

class backupDumpTimes extends Model
{
    /**
     * @example 20201118114602_6bd7c996-f620-4026-ae24-418eddf78671
     *
     * @var string
     */
    public $backupId;

    /**
     * @example 2020-11-18T03:46:02Z
     *
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
