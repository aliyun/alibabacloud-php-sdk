<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody\backupDirs;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackupDirsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var backupDirs[]
     */
    public $backupDirs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageInfo'   => 'PageInfo',
        'backupDirs' => 'BackupDirs',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->backupDirs) {
            $res['BackupDirs'] = [];
            if (null !== $this->backupDirs && \is_array($this->backupDirs)) {
                $n = 0;
                foreach ($this->backupDirs as $item) {
                    $res['BackupDirs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupDirsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['BackupDirs'])) {
            if (!empty($map['BackupDirs'])) {
                $model->backupDirs = [];
                $n                 = 0;
                foreach ($map['BackupDirs'] as $item) {
                    $model->backupDirs[$n++] = null !== $item ? backupDirs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
