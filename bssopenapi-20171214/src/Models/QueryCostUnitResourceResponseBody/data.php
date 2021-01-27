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
     * @var costUnit
     */
    public $costUnit;

    /**
     * @var costUnitStatisInfo
     */
    public $costUnitStatisInfo;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var resourceInstanceDtoList[]
     */
    public $resourceInstanceDtoList;

    /**
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
