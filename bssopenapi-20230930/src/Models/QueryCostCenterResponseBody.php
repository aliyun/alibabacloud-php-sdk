<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResponseBody\costCenterDtoList;

class QueryCostCenterResponseBody extends Model
{
    /**
     * @var costCenterDtoList[]
     */
    public $costCenterDtoList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var mixed
     */
    public $metadata;

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
        'costCenterDtoList' => 'CostCenterDtoList',
        'currentPage' => 'CurrentPage',
        'metadata' => 'Metadata',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->costCenterDtoList)) {
            Model::validateArray($this->costCenterDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterDtoList) {
            if (\is_array($this->costCenterDtoList)) {
                $res['CostCenterDtoList'] = [];
                $n1 = 0;
                foreach ($this->costCenterDtoList as $item1) {
                    $res['CostCenterDtoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
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
        if (isset($map['CostCenterDtoList'])) {
            if (!empty($map['CostCenterDtoList'])) {
                $model->costCenterDtoList = [];
                $n1 = 0;
                foreach ($map['CostCenterDtoList'] as $item1) {
                    $model->costCenterDtoList[$n1++] = costCenterDtoList::fromMap($item1);
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
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
