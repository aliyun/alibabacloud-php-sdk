<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupTablesResponseBody\backupRecords\backupRecord;

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
        if (\is_array($this->backupRecord)) {
            Model::validateArray($this->backupRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRecord) {
            if (\is_array($this->backupRecord)) {
                $res['BackupRecord'] = [];
                $n1 = 0;
                foreach ($this->backupRecord as $item1) {
                    $res['BackupRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BackupRecord'])) {
            if (!empty($map['BackupRecord'])) {
                $model->backupRecord = [];
                $n1 = 0;
                foreach ($map['BackupRecord'] as $item1) {
                    $model->backupRecord[$n1] = backupRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
