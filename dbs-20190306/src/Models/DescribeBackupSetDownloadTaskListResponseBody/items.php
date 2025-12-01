<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponseBody\items\backupSetDownloadTaskDetail;

class items extends Model
{
    /**
     * @var backupSetDownloadTaskDetail[]
     */
    public $backupSetDownloadTaskDetail;
    protected $_name = [
        'backupSetDownloadTaskDetail' => 'BackupSetDownloadTaskDetail',
    ];

    public function validate()
    {
        if (\is_array($this->backupSetDownloadTaskDetail)) {
            Model::validateArray($this->backupSetDownloadTaskDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupSetDownloadTaskDetail) {
            if (\is_array($this->backupSetDownloadTaskDetail)) {
                $res['BackupSetDownloadTaskDetail'] = [];
                $n1 = 0;
                foreach ($this->backupSetDownloadTaskDetail as $item1) {
                    $res['BackupSetDownloadTaskDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BackupSetDownloadTaskDetail'])) {
            if (!empty($map['BackupSetDownloadTaskDetail'])) {
                $model->backupSetDownloadTaskDetail = [];
                $n1 = 0;
                foreach ($map['BackupSetDownloadTaskDetail'] as $item1) {
                    $model->backupSetDownloadTaskDetail[$n1] = backupSetDownloadTaskDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
