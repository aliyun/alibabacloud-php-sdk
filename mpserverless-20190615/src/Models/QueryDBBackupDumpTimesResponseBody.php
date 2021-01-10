<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QueryDBBackupDumpTimesResponseBody\backupDumpTimes;
use AlibabaCloud\Tea\Model;

class QueryDBBackupDumpTimesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backupDumpTimes[]
     */
    public $backupDumpTimes;
    protected $_name = [
        'requestId'       => 'RequestId',
        'backupDumpTimes' => 'BackupDumpTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupDumpTimes) {
            $res['BackupDumpTimes'] = [];
            if (null !== $this->backupDumpTimes && \is_array($this->backupDumpTimes)) {
                $n = 0;
                foreach ($this->backupDumpTimes as $item) {
                    $res['BackupDumpTimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupDumpTimes'])) {
            if (!empty($map['BackupDumpTimes'])) {
                $model->backupDumpTimes = [];
                $n                      = 0;
                foreach ($map['BackupDumpTimes'] as $item) {
                    $model->backupDumpTimes[$n++] = null !== $item ? backupDumpTimes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
