<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesResponseBody\backupDumpTimes;
use AlibabaCloud\Tea\Model;

class QueryDBBackupDumpTimesResponseBody extends Model
{
    /**
     * @var backupDumpTimes[]
     */
    public $backupDumpTimes;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupDumpTimes' => 'BackupDumpTimes',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDumpTimes) {
            $res['BackupDumpTimes'] = [];
            if (null !== $this->backupDumpTimes && \is_array($this->backupDumpTimes)) {
                $n = 0;
                foreach ($this->backupDumpTimes as $item) {
                    $res['BackupDumpTimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDBBackupDumpTimesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDumpTimes'])) {
            if (!empty($map['BackupDumpTimes'])) {
                $model->backupDumpTimes = [];
                $n                      = 0;
                foreach ($map['BackupDumpTimes'] as $item) {
                    $model->backupDumpTimes[$n++] = null !== $item ? backupDumpTimes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
