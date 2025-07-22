<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResponseBody\costCenterDtoList;
use AlibabaCloud\Tea\Model;

class QueryCostCenterResponseBody extends Model
{
    /**
     * @var costCenterDtoList[]
     */
    public $costCenterDtoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 79EE7556-0CFD-44EB-9CD6-B3B526E3A85F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 30
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterDtoList) {
            $res['CostCenterDtoList'] = [];
            if (null !== $this->costCenterDtoList && \is_array($this->costCenterDtoList)) {
                $n = 0;
                foreach ($this->costCenterDtoList as $item) {
                    $res['CostCenterDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return QueryCostCenterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterDtoList'])) {
            if (!empty($map['CostCenterDtoList'])) {
                $model->costCenterDtoList = [];
                $n = 0;
                foreach ($map['CostCenterDtoList'] as $item) {
                    $model->costCenterDtoList[$n++] = null !== $item ? costCenterDtoList::fromMap($item) : $item;
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
