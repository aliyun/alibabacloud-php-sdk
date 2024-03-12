<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data\interveneRuleList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @var interveneRuleList[]
     */
    public $interveneRuleList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'count'             => 'Count',
        'interveneRuleList' => 'InterveneRuleList',
        'pageIndex'         => 'PageIndex',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interveneRuleList) {
            $res['InterveneRuleList'] = [];
            if (null !== $this->interveneRuleList && \is_array($this->interveneRuleList)) {
                $n = 0;
                foreach ($this->interveneRuleList as $item) {
                    $res['InterveneRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InterveneRuleList'])) {
            if (!empty($map['InterveneRuleList'])) {
                $model->interveneRuleList = [];
                $n                        = 0;
                foreach ($map['InterveneRuleList'] as $item) {
                    $model->interveneRuleList[$n++] = null !== $item ? interveneRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
