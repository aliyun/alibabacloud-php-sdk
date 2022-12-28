<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListSystemClientRulesRequest extends Model
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
     * @var int
     */
    public $isContainer;

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
        'currentPage'    => 'CurrentPage',
        'isContainer'    => 'IsContainer',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'ruleName'       => 'RuleName',
        'ruleTypes'      => 'RuleTypes',
        'systemType'     => 'SystemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationIds) {
            $res['AggregationIds'] = $this->aggregationIds;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->isContainer) {
            $res['IsContainer'] = $this->isContainer;
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
            $res['RuleTypes'] = $this->ruleTypes;
        }
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemClientRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationIds'])) {
            if (!empty($map['AggregationIds'])) {
                $model->aggregationIds = $map['AggregationIds'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IsContainer'])) {
            $model->isContainer = $map['IsContainer'];
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
                $model->ruleTypes = $map['RuleTypes'];
            }
        }
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
