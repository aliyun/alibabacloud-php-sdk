<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeViewContentResponseBody\viewContentList;
use AlibabaCloud\Tea\Model;

class DescribeViewContentResponseBody extends Model
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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var viewContentList[]
     */
    public $viewContentList;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'viewContentList' => 'ViewContentList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->viewContentList) {
            $res['ViewContentList'] = [];
            if (null !== $this->viewContentList && \is_array($this->viewContentList)) {
                $n = 0;
                foreach ($this->viewContentList as $item) {
                    $res['ViewContentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeViewContentResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ViewContentList'])) {
            if (!empty($map['ViewContentList'])) {
                $model->viewContentList = [];
                $n                      = 0;
                foreach ($map['ViewContentList'] as $item) {
                    $model->viewContentList[$n++] = null !== $item ? viewContentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
