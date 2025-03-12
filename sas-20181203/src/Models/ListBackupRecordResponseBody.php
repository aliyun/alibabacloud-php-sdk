<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListBackupRecordResponseBody\backupRecordList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListBackupRecordResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListBackupRecordResponseBody extends Model
{
    /**
     * @description The details of the backup record.
     *
     * @var backupRecordList[]
     */
    public $backupRecordList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID, which is used to locate and troubleshoot issues.
     *
     * @example 3956048F-9D73-5EDB-834B-4827BB48****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRecordList' => 'BackupRecordList',
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRecordList) {
            $res['BackupRecordList'] = [];
            if (null !== $this->backupRecordList && \is_array($this->backupRecordList)) {
                $n = 0;
                foreach ($this->backupRecordList as $item) {
                    $res['BackupRecordList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBackupRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRecordList'])) {
            if (!empty($map['BackupRecordList'])) {
                $model->backupRecordList = [];
                $n                       = 0;
                foreach ($map['BackupRecordList'] as $item) {
                    $model->backupRecordList[$n++] = null !== $item ? backupRecordList::fromMap($item) : $item;
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
