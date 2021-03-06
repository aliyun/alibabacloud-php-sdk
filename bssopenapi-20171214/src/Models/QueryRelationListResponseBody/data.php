<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody\data\financialRelationInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var financialRelationInfoList[]
     */
    public $financialRelationInfoList;
    protected $_name = [
        'pageNum'                   => 'PageNum',
        'pageSize'                  => 'PageSize',
        'totalCount'                => 'TotalCount',
        'financialRelationInfoList' => 'FinancialRelationInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->financialRelationInfoList) {
            $res['FinancialRelationInfoList'] = [];
            if (null !== $this->financialRelationInfoList && \is_array($this->financialRelationInfoList)) {
                $n = 0;
                foreach ($this->financialRelationInfoList as $item) {
                    $res['FinancialRelationInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FinancialRelationInfoList'])) {
            if (!empty($map['FinancialRelationInfoList'])) {
                $model->financialRelationInfoList = [];
                $n                                = 0;
                foreach ($map['FinancialRelationInfoList'] as $item) {
                    $model->financialRelationInfoList[$n++] = null !== $item ? financialRelationInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
