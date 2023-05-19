<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\costUnit;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\costUnitStatisInfo;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\resourceInstanceDtoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the cost center.
     *
     * @var costUnit
     */
    public $costUnit;

    /**
     * @description The statistical information about the cost center.
     *
     * @var costUnitStatisInfo
     */
    public $costUnitStatisInfo;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource instances.
     *
     * @var resourceInstanceDtoList[]
     */
    public $resourceInstanceDtoList;

    /**
     * @description The total number of returned entries.
     *
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'costUnit'                => 'CostUnit',
        'costUnitStatisInfo'      => 'CostUnitStatisInfo',
        'pageNum'                 => 'PageNum',
        'pageSize'                => 'PageSize',
        'resourceInstanceDtoList' => 'ResourceInstanceDtoList',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costUnit) {
            $res['CostUnit'] = null !== $this->costUnit ? $this->costUnit->toMap() : null;
        }
        if (null !== $this->costUnitStatisInfo) {
            $res['CostUnitStatisInfo'] = null !== $this->costUnitStatisInfo ? $this->costUnitStatisInfo->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceInstanceDtoList) {
            $res['ResourceInstanceDtoList'] = [];
            if (null !== $this->resourceInstanceDtoList && \is_array($this->resourceInstanceDtoList)) {
                $n = 0;
                foreach ($this->resourceInstanceDtoList as $item) {
                    $res['ResourceInstanceDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostUnit'])) {
            $model->costUnit = costUnit::fromMap($map['CostUnit']);
        }
        if (isset($map['CostUnitStatisInfo'])) {
            $model->costUnitStatisInfo = costUnitStatisInfo::fromMap($map['CostUnitStatisInfo']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceInstanceDtoList'])) {
            if (!empty($map['ResourceInstanceDtoList'])) {
                $model->resourceInstanceDtoList = [];
                $n                              = 0;
                foreach ($map['ResourceInstanceDtoList'] as $item) {
                    $model->resourceInstanceDtoList[$n++] = null !== $item ? resourceInstanceDtoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
