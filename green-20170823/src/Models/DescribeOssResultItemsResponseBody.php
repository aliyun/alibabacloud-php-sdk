<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssResultItemsResponseBody\scanResultList;
use AlibabaCloud\Tea\Model;

class DescribeOssResultItemsResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scanResultList[]
     */
    public $scanResultList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'queryId'        => 'QueryId',
        'requestId'      => 'RequestId',
        'scanResultList' => 'ScanResultList',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanResultList) {
            $res['ScanResultList'] = [];
            if (null !== $this->scanResultList && \is_array($this->scanResultList)) {
                $n = 0;
                foreach ($this->scanResultList as $item) {
                    $res['ScanResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssResultItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanResultList'])) {
            if (!empty($map['ScanResultList'])) {
                $model->scanResultList = [];
                $n                     = 0;
                foreach ($map['ScanResultList'] as $item) {
                    $model->scanResultList[$n++] = null !== $item ? scanResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
