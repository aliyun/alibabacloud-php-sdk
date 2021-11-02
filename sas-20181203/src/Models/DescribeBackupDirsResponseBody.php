<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody\backupDirs;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackupDirsResponseBody extends Model
{
    /**
     * @var backupDirs[]
     */
    public $backupDirs;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupDirs' => 'BackupDirs',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDirs) {
            $res['BackupDirs'] = [];
            if (null !== $this->backupDirs && \is_array($this->backupDirs)) {
                $n = 0;
                foreach ($this->backupDirs as $item) {
                    $res['BackupDirs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupDirs'])) {
            if (!empty($map['BackupDirs'])) {
                $model->backupDirs = [];
                $n                 = 0;
                foreach ($map['BackupDirs'] as $item) {
                    $model->backupDirs[$n++] = null !== $item ? backupDirs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
