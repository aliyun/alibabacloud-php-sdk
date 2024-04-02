<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteInstanceResponseBody\websiteInstanceList;
use AlibabaCloud\Tea\Model;

class DescribeWebsiteInstanceResponseBody extends Model
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
     * @var websiteInstanceList[]
     */
    public $websiteInstanceList;
    protected $_name = [
        'currentPage'         => 'CurrentPage',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'websiteInstanceList' => 'WebsiteInstanceList',
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
        if (null !== $this->websiteInstanceList) {
            $res['WebsiteInstanceList'] = [];
            if (null !== $this->websiteInstanceList && \is_array($this->websiteInstanceList)) {
                $n = 0;
                foreach ($this->websiteInstanceList as $item) {
                    $res['WebsiteInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteInstanceResponseBody
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
        if (isset($map['WebsiteInstanceList'])) {
            if (!empty($map['WebsiteInstanceList'])) {
                $model->websiteInstanceList = [];
                $n                          = 0;
                foreach ($map['WebsiteInstanceList'] as $item) {
                    $model->websiteInstanceList[$n++] = null !== $item ? websiteInstanceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
