<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\backupFiles;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackupFilesResponseBody extends Model
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
     * @var backupFiles[]
     */
    public $backupFiles;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pageInfo'    => 'PageInfo',
        'backupFiles' => 'BackupFiles',
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
        if (null !== $this->backupFiles) {
            $res['BackupFiles'] = [];
            if (null !== $this->backupFiles && \is_array($this->backupFiles)) {
                $n = 0;
                foreach ($this->backupFiles as $item) {
                    $res['BackupFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupFilesResponseBody
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
        if (isset($map['BackupFiles'])) {
            if (!empty($map['BackupFiles'])) {
                $model->backupFiles = [];
                $n                  = 0;
                foreach ($map['BackupFiles'] as $item) {
                    $model->backupFiles[$n++] = null !== $item ? backupFiles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
