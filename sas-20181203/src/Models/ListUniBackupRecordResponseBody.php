<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUniBackupRecordResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUniBackupRecordResponseBody\uniBackupRecordList;

class ListUniBackupRecordResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uniBackupRecordList[]
     */
    public $uniBackupRecordList;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'uniBackupRecordList' => 'UniBackupRecordList',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->uniBackupRecordList)) {
            Model::validateArray($this->uniBackupRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uniBackupRecordList) {
            if (\is_array($this->uniBackupRecordList)) {
                $res['UniBackupRecordList'] = [];
                $n1 = 0;
                foreach ($this->uniBackupRecordList as $item1) {
                    $res['UniBackupRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UniBackupRecordList'])) {
            if (!empty($map['UniBackupRecordList'])) {
                $model->uniBackupRecordList = [];
                $n1 = 0;
                foreach ($map['UniBackupRecordList'] as $item1) {
                    $model->uniBackupRecordList[$n1] = uniBackupRecordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
