<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody\recoverableInfoList;
use AlibabaCloud\Tea\Model;

class DescribeUniRecoverableListResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the database.
     *
     * @example msdb
     *
     * @var string
     */
    public $database;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description An array that consists of the backup snapshots.
     *
     * @var recoverableInfoList[]
     */
    public $recoverableInfoList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example F35F45B0-5D6B-4238-BE02-A62D0760****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 23
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'               => 'Count',
        'currentPage'         => 'CurrentPage',
        'database'            => 'Database',
        'pageSize'            => 'PageSize',
        'recoverableInfoList' => 'RecoverableInfoList',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recoverableInfoList) {
            $res['RecoverableInfoList'] = [];
            if (null !== $this->recoverableInfoList && \is_array($this->recoverableInfoList)) {
                $n = 0;
                foreach ($this->recoverableInfoList as $item) {
                    $res['RecoverableInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniRecoverableListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecoverableInfoList'])) {
            if (!empty($map['RecoverableInfoList'])) {
                $model->recoverableInfoList = [];
                $n                          = 0;
                foreach ($map['RecoverableInfoList'] as $item) {
                    $model->recoverableInfoList[$n++] = null !== $item ? recoverableInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
