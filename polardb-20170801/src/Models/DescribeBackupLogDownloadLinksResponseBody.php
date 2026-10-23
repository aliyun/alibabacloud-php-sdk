<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogDownloadLinksResponseBody\backupLogDownloadLinkItem;

class DescribeBackupLogDownloadLinksResponseBody extends Model
{
    /**
     * @var backupLogDownloadLinkItem[]
     */
    public $backupLogDownloadLinkItem;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupLogDownloadLinkItem' => 'BackupLogDownloadLinkItem',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->backupLogDownloadLinkItem)) {
            Model::validateArray($this->backupLogDownloadLinkItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupLogDownloadLinkItem) {
            if (\is_array($this->backupLogDownloadLinkItem)) {
                $res['BackupLogDownloadLinkItem'] = [];
                $n1 = 0;
                foreach ($this->backupLogDownloadLinkItem as $item1) {
                    $res['BackupLogDownloadLinkItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupLogDownloadLinkItem'])) {
            if (!empty($map['BackupLogDownloadLinkItem'])) {
                $model->backupLogDownloadLinkItem = [];
                $n1 = 0;
                foreach ($map['BackupLogDownloadLinkItem'] as $item1) {
                    $model->backupLogDownloadLinkItem[$n1] = backupLogDownloadLinkItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
