<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponseBody\items\backupSetDownloadTaskDetail;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetDownloadTaskDetail) {
            $res['BackupSetDownloadTaskDetail'] = [];
            if (null !== $this->backupSetDownloadTaskDetail && \is_array($this->backupSetDownloadTaskDetail)) {
                $n = 0;
                foreach ($this->backupSetDownloadTaskDetail as $item) {
                    $res['BackupSetDownloadTaskDetail'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BackupSetDownloadTaskDetail'])) {
            if (!empty($map['BackupSetDownloadTaskDetail'])) {
                $model->backupSetDownloadTaskDetail = [];
                $n                                  = 0;
                foreach ($map['BackupSetDownloadTaskDetail'] as $item) {
                    $model->backupSetDownloadTaskDetail[$n++] = null !== $item ? backupSetDownloadTaskDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
