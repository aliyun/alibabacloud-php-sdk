<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponseBody\groupedVulItems;

class DescribeEmgVulItemResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var groupedVulItems[]
     */
    public $groupedVulItems;
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
        'currentPage'     => 'CurrentPage',
        'groupedVulItems' => 'GroupedVulItems',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->groupedVulItems)) {
            Model::validateArray($this->groupedVulItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->groupedVulItems) {
            if (\is_array($this->groupedVulItems)) {
                $res['GroupedVulItems'] = [];
                $n1                     = 0;
                foreach ($this->groupedVulItems as $item1) {
                    $res['GroupedVulItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['GroupedVulItems'])) {
            if (!empty($map['GroupedVulItems'])) {
                $model->groupedVulItems = [];
                $n1                     = 0;
                foreach ($map['GroupedVulItems'] as $item1) {
                    $model->groupedVulItems[$n1++] = groupedVulItems::fromMap($item1);
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
