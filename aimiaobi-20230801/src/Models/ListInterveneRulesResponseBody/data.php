<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data\interveneRuleList;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var interveneRuleList[]
     */
    public $interveneRuleList;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'interveneRuleList' => 'InterveneRuleList',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->interveneRuleList)) {
            Model::validateArray($this->interveneRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->interveneRuleList) {
            if (\is_array($this->interveneRuleList)) {
                $res['InterveneRuleList'] = [];
                $n1 = 0;
                foreach ($this->interveneRuleList as $item1) {
                    $res['InterveneRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['InterveneRuleList'])) {
            if (!empty($map['InterveneRuleList'])) {
                $model->interveneRuleList = [];
                $n1 = 0;
                foreach ($map['InterveneRuleList'] as $item1) {
                    $model->interveneRuleList[$n1] = interveneRuleList::fromMap($item1);
                    ++$n1;
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
