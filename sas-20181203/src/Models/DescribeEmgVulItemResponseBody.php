<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponseBody\groupedVulItems;
use AlibabaCloud\Tea\Model;

class DescribeEmgVulItemResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var groupedVulItems[]
     */
    public $groupedVulItems;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
        'groupedVulItems' => 'GroupedVulItems',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEmgVulItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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

        return $model;
    }
}
