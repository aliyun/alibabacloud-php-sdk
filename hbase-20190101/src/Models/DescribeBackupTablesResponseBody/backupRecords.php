<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody\backupRecords\backupRecord;
use AlibabaCloud\Tea\Model;

class backupRecords extends Model
{
    /**
     * @var backupRecord[]
     */
    public $backupRecord;
    protected $_name = [
        'backupRecord' => 'BackupRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRecord) {
            $res['BackupRecord'] = [];
            if (null !== $this->backupRecord && \is_array($this->backupRecord)) {
                $n = 0;
                foreach ($this->backupRecord as $item) {
                    $res['BackupRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRecord'])) {
            if (!empty($map['BackupRecord'])) {
                $model->backupRecord = [];
                $n                   = 0;
                foreach ($map['BackupRecord'] as $item) {
                    $model->backupRecord[$n++] = null !== $item ? backupRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
