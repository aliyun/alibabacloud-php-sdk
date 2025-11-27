<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB\backupDownloadLinkByDB;

class backupDownloadLinkByDB extends Model
{
    /**
     * @var backupDownloadLinkByDB[]
     */
    public $backupDownloadLinkByDB;
    protected $_name = [
        'backupDownloadLinkByDB' => 'BackupDownloadLinkByDB',
    ];

    public function validate()
    {
        if (\is_array($this->backupDownloadLinkByDB)) {
            Model::validateArray($this->backupDownloadLinkByDB);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDownloadLinkByDB) {
            if (\is_array($this->backupDownloadLinkByDB)) {
                $res['BackupDownloadLinkByDB'] = [];
                $n1 = 0;
                foreach ($this->backupDownloadLinkByDB as $item1) {
                    $res['BackupDownloadLinkByDB'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BackupDownloadLinkByDB'])) {
            if (!empty($map['BackupDownloadLinkByDB'])) {
                $model->backupDownloadLinkByDB = [];
                $n1 = 0;
                foreach ($map['BackupDownloadLinkByDB'] as $item1) {
                    $model->backupDownloadLinkByDB[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
