<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody\items\backupLog;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var backupLog[]
     */
    public $backupLog;
    protected $_name = [
        'backupLog' => 'BackupLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLog) {
            $res['BackupLog'] = [];
            if (null !== $this->backupLog && \is_array($this->backupLog)) {
                $n = 0;
                foreach ($this->backupLog as $item) {
                    $res['BackupLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupLog'])) {
            if (!empty($map['BackupLog'])) {
                $model->backupLog = [];
                $n                = 0;
                foreach ($map['BackupLog'] as $item) {
                    $model->backupLog[$n++] = null !== $item ? backupLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
