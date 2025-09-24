<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\costUnit;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\costUnitStatisInfo;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data\resourceInstanceDtoList;

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
        'costUnit' => 'CostUnit',
        'costUnitStatisInfo' => 'CostUnitStatisInfo',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'resourceInstanceDtoList' => 'ResourceInstanceDtoList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->costUnit) {
            $this->costUnit->validate();
        }
        if (null !== $this->costUnitStatisInfo) {
            $this->costUnitStatisInfo->validate();
        }
        if (\is_array($this->resourceInstanceDtoList)) {
            Model::validateArray($this->resourceInstanceDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costUnit) {
            $res['CostUnit'] = null !== $this->costUnit ? $this->costUnit->toArray($noStream) : $this->costUnit;
        }

        if (null !== $this->costUnitStatisInfo) {
            $res['CostUnitStatisInfo'] = null !== $this->costUnitStatisInfo ? $this->costUnitStatisInfo->toArray($noStream) : $this->costUnitStatisInfo;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceInstanceDtoList) {
            if (\is_array($this->resourceInstanceDtoList)) {
                $res['ResourceInstanceDtoList'] = [];
                $n1 = 0;
                foreach ($this->resourceInstanceDtoList as $item1) {
                    $res['ResourceInstanceDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ResourceInstanceDtoList'] as $item1) {
                    $model->resourceInstanceDtoList[$n1] = resourceInstanceDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
