<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody\databaseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody\pageInfo;

class DescribeUniBackupDatabaseResponseBody extends Model
{
    /**
     * @var databaseList[]
     */
    public $databaseList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'databaseList' => 'DatabaseList',
        'pageInfo'     => 'PageInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->databaseList)) {
            Model::validateArray($this->databaseList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseList) {
            if (\is_array($this->databaseList)) {
                $res['DatabaseList'] = [];
                $n1                  = 0;
                foreach ($this->databaseList as $item1) {
                    $res['DatabaseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n1                  = 0;
                foreach ($map['DatabaseList'] as $item1) {
                    $model->databaseList[$n1++] = databaseList::fromMap($item1);
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
