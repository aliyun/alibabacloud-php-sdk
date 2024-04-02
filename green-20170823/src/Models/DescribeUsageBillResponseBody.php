<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUsageBillResponseBody\billList;
use AlibabaCloud\Tea\Model;

class DescribeUsageBillResponseBody extends Model
{
    /**
     * @var billList[]
     */
    public $billList;

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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'billList'    => 'BillList',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billList) {
            $res['BillList'] = [];
            if (null !== $this->billList && \is_array($this->billList)) {
                $n = 0;
                foreach ($this->billList as $item) {
                    $res['BillList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeUsageBillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillList'])) {
            if (!empty($map['BillList'])) {
                $model->billList = [];
                $n               = 0;
                foreach ($map['BillList'] as $item) {
                    $model->billList[$n++] = null !== $item ? billList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
