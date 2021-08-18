<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody\databaseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeUniBackupDatabaseResponseBody extends Model
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
     * @var databaseList[]
     */
    public $databaseList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pageInfo'     => 'PageInfo',
        'databaseList' => 'DatabaseList',
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
        if (null !== $this->databaseList) {
            $res['DatabaseList'] = [];
            if (null !== $this->databaseList && \is_array($this->databaseList)) {
                $n = 0;
                foreach ($this->databaseList as $item) {
                    $res['DatabaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniBackupDatabaseResponseBody
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
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n                   = 0;
                foreach ($map['DatabaseList'] as $item) {
                    $model->databaseList[$n++] = null !== $item ? databaseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
