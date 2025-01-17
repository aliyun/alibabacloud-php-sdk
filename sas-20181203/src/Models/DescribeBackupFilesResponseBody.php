<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\backupFiles;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody\pageInfo;

class DescribeBackupFilesResponseBody extends Model
{
    /**
     * @var backupFiles[]
     */
    public $backupFiles;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
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
        if (\is_array($this->backupFiles)) {
            Model::validateArray($this->backupFiles);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupFiles) {
            if (\is_array($this->backupFiles)) {
                $res['BackupFiles'] = [];
                $n1                 = 0;
                foreach ($this->backupFiles as $item1) {
                    $res['BackupFiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['BackupFiles'])) {
            if (!empty($map['BackupFiles'])) {
                $model->backupFiles = [];
                $n1                 = 0;
                foreach ($map['BackupFiles'] as $item1) {
                    $model->backupFiles[$n1++] = backupFiles::fromMap($item1);
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
