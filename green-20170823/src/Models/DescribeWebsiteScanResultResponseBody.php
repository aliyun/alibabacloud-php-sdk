<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultResponseBody\websiteScanResultList;
use AlibabaCloud\Tea\Model;

class DescribeWebsiteScanResultResponseBody extends Model
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
     * @var websiteScanResultList[]
     */
    public $websiteScanResultList;
    protected $_name = [
        'currentPage'           => 'CurrentPage',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'websiteScanResultList' => 'WebsiteScanResultList',
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
        if (null !== $this->websiteScanResultList) {
            $res['WebsiteScanResultList'] = [];
            if (null !== $this->websiteScanResultList && \is_array($this->websiteScanResultList)) {
                $n = 0;
                foreach ($this->websiteScanResultList as $item) {
                    $res['WebsiteScanResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteScanResultResponseBody
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
        if (isset($map['WebsiteScanResultList'])) {
            if (!empty($map['WebsiteScanResultList'])) {
                $model->websiteScanResultList = [];
                $n                            = 0;
                foreach ($map['WebsiteScanResultList'] as $item) {
                    $model->websiteScanResultList[$n++] = null !== $item ? websiteScanResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
