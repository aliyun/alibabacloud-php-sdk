<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponseBody\data\financialRelationInfoList;

class data extends Model
{
    /**
     * @var financialRelationInfoList[]
     */
    public $financialRelationInfoList;

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
    protected $_name = [
        'financialRelationInfoList' => 'FinancialRelationInfoList',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->financialRelationInfoList)) {
            Model::validateArray($this->financialRelationInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->financialRelationInfoList) {
            if (\is_array($this->financialRelationInfoList)) {
                $res['FinancialRelationInfoList'] = [];
                $n1 = 0;
                foreach ($this->financialRelationInfoList as $item1) {
                    $res['FinancialRelationInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['FinancialRelationInfoList'])) {
            if (!empty($map['FinancialRelationInfoList'])) {
                $model->financialRelationInfoList = [];
                $n1 = 0;
                foreach ($map['FinancialRelationInfoList'] as $item1) {
                    $model->financialRelationInfoList[$n1] = financialRelationInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
