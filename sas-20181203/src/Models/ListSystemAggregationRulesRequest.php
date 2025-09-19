<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListSystemAggregationRulesRequest extends Model
{
    /**
     * @var int[]
     */
    public $aggregationIds;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int[]
     */
    public $ruleTypes;

    /**
     * @var int
     */
    public $systemType;
    protected $_name = [
        'aggregationIds' => 'AggregationIds',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'ruleName' => 'RuleName',
        'ruleTypes' => 'RuleTypes',
        'systemType' => 'SystemType',
    ];

    public function validate()
    {
        if (\is_array($this->aggregationIds)) {
            Model::validateArray($this->aggregationIds);
        }
        if (\is_array($this->ruleTypes)) {
            Model::validateArray($this->ruleTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationIds) {
            if (\is_array($this->aggregationIds)) {
                $res['AggregationIds'] = [];
                $n1 = 0;
                foreach ($this->aggregationIds as $item1) {
                    $res['AggregationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleTypes) {
            if (\is_array($this->ruleTypes)) {
                $res['RuleTypes'] = [];
                $n1 = 0;
                foreach ($this->ruleTypes as $item1) {
                    $res['RuleTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
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
        if (isset($map['AggregationIds'])) {
            if (!empty($map['AggregationIds'])) {
                $model->aggregationIds = [];
                $n1 = 0;
                foreach ($map['AggregationIds'] as $item1) {
                    $model->aggregationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleTypes'])) {
            if (!empty($map['RuleTypes'])) {
                $model->ruleTypes = [];
                $n1 = 0;
                foreach ($map['RuleTypes'] as $item1) {
                    $model->ruleTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
