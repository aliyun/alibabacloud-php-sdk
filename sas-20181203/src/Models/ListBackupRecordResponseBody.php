<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListBackupRecordResponseBody\backupRecordList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListBackupRecordResponseBody\pageInfo;

class ListBackupRecordResponseBody extends Model
{
    /**
     * @var backupRecordList[]
     */
    public $backupRecordList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRecordList' => 'BackupRecordList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->backupRecordList)) {
            Model::validateArray($this->backupRecordList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRecordList) {
            if (\is_array($this->backupRecordList)) {
                $res['BackupRecordList'] = [];
                $n1 = 0;
                foreach ($this->backupRecordList as $item1) {
                    $res['BackupRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BackupRecordList'])) {
            if (!empty($map['BackupRecordList'])) {
                $model->backupRecordList = [];
                $n1 = 0;
                foreach ($map['BackupRecordList'] as $item1) {
                    $model->backupRecordList[$n1] = backupRecordList::fromMap($item1);
                    ++$n1;
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
