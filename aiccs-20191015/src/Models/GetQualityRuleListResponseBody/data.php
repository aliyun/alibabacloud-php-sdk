<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponseBody\data\qualityRuleList;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var qualityRuleList[]
     */
    public $qualityRuleList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'qualityRuleList' => 'QualityRuleList',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->qualityRuleList)) {
            Model::validateArray($this->qualityRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->qualityRuleList) {
            if (\is_array($this->qualityRuleList)) {
                $res['QualityRuleList'] = [];
                $n1 = 0;
                foreach ($this->qualityRuleList as $item1) {
                    $res['QualityRuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QualityRuleList'])) {
            if (!empty($map['QualityRuleList'])) {
                $model->qualityRuleList = [];
                $n1 = 0;
                foreach ($map['QualityRuleList'] as $item1) {
                    $model->qualityRuleList[$n1++] = qualityRuleList::fromMap($item1);
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
