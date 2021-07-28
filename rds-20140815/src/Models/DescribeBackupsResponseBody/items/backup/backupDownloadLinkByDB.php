<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup;

use AlibabaCloud\Tea\Model;

class backupDownloadLinkByDB extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB\backupDownloadLinkByDB[]
     */
    public $backupDownloadLinkByDB;
    protected $_name = [
        'backupDownloadLinkByDB' => 'BackupDownloadLinkByDB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadLinkByDB) {
            $res['BackupDownloadLinkByDB'] = [];
            if (null !== $this->backupDownloadLinkByDB && \is_array($this->backupDownloadLinkByDB)) {
                $n = 0;
                foreach ($this->backupDownloadLinkByDB as $item) {
                    $res['BackupDownloadLinkByDB'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDownloadLinkByDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadLinkByDB'])) {
            if (!empty($map['BackupDownloadLinkByDB'])) {
                $model->backupDownloadLinkByDB = [];
                $n                             = 0;
                foreach ($map['BackupDownloadLinkByDB'] as $item) {
                    $model->backupDownloadLinkByDB[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB\backupDownloadLinkByDB::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
