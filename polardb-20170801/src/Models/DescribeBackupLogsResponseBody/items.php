<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponseBody\items\backupLog;

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
        if (\is_array($this->backupLog)) {
            Model::validateArray($this->backupLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupLog) {
            if (\is_array($this->backupLog)) {
                $res['BackupLog'] = [];
                $n1               = 0;
                foreach ($this->backupLog as $item1) {
                    $res['BackupLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BackupLog'])) {
            if (!empty($map['BackupLog'])) {
                $model->backupLog = [];
                $n1               = 0;
                foreach ($map['BackupLog'] as $item1) {
                    $model->backupLog[$n1++] = backupLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
