<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponseBody\groupedVulItems;
use AlibabaCloud\Tea\Model;

class DescribeImageGroupedVulListResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description An array that consists of the image vulnerabilities.
     *
     * @var groupedVulItems[]
     */
    public $groupedVulItems;

    /**
     * @description The number of entries returned per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5E244439-UJND-8BF7-26F36E21B9AA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of image system vulnerabilities.
     *
     * @example 21
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
     * @return DescribeImageGroupedVulListResponseBody
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
