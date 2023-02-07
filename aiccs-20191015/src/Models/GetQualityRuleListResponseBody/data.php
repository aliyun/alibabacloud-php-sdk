<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponseBody\data\qualityRuleList;
use AlibabaCloud\Tea\Model;

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
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'qualityRuleList' => 'QualityRuleList',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->qualityRuleList) {
            $res['QualityRuleList'] = [];
            if (null !== $this->qualityRuleList && \is_array($this->qualityRuleList)) {
                $n = 0;
                foreach ($this->qualityRuleList as $item) {
                    $res['QualityRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QualityRuleList'])) {
            if (!empty($map['QualityRuleList'])) {
                $model->qualityRuleList = [];
                $n                      = 0;
                foreach ($map['QualityRuleList'] as $item) {
                    $model->qualityRuleList[$n++] = null !== $item ? qualityRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
