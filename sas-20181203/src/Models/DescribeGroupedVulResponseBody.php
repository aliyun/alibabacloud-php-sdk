<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponseBody\groupedVulItems;
use AlibabaCloud\Tea\Model;

class DescribeGroupedVulResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $currentPage;

    /**
     * @var groupedVulItems[]
     */
    public $groupedVulItems;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'currentPage'     => 'CurrentPage',
        'groupedVulItems' => 'GroupedVulItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
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

        return $model;
    }
}
