<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\backupFiles;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackupFilesResponseBody extends Model
{
    /**
     * @description An array that consists of the backup files returned.
     *
     * @var backupFiles[]
     */
    public $backupFiles;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 00A60A6D-33E0-5D5A-9B7C-E5D4DCA88148
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupFiles' => 'BackupFiles',
        'pageInfo'    => 'PageInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupFiles) {
            $res['BackupFiles'] = [];
            if (null !== $this->backupFiles && \is_array($this->backupFiles)) {
                $n = 0;
                foreach ($this->backupFiles as $item) {
                    $res['BackupFiles'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeBackupFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupFiles'])) {
            if (!empty($map['BackupFiles'])) {
                $model->backupFiles = [];
                $n                  = 0;
                foreach ($map['BackupFiles'] as $item) {
                    $model->backupFiles[$n++] = null !== $item ? backupFiles::fromMap($item) : $item;
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
