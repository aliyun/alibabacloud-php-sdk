<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulResponseBody\groupedVulItems;
use AlibabaCloud\Tea\Model;

class DescribeGroupedVulResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Details about vulnerabilities.
     *
     * @var groupedVulItems[]
     */
    public $groupedVulItems;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'groupedVulItems' => 'GroupedVulItems',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
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
        if (null !== $this->groupedVulItems) {
            $res['GroupedVulItems'] = [];
            if (null !== $this->groupedVulItems && \is_array($this->groupedVulItems)) {
                $n = 0;
                foreach ($this->groupedVulItems as $item) {
                    $res['GroupedVulItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeGroupedVulResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupedVulItems'])) {
            if (!empty($map['GroupedVulItems'])) {
                $model->groupedVulItems = [];
                $n                      = 0;
                foreach ($map['GroupedVulItems'] as $item) {
                    $model->groupedVulItems[$n++] = null !== $item ? groupedVulItems::fromMap($item) : $item;
                }
            }
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
