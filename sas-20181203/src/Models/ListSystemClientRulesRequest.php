<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListSystemClientRulesRequest extends Model
{
    /**
     * @description The IDs of the aggregation types for rules.
     *
     * @var int[]
     */
    public $aggregationIds;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether to query only container images. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $isContainer;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the system defense rule.
     *
     * @example Rule\*\*\*\*
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The types of the system defense rules.
     *
     * @var int[]
     */
    public $ruleTypes;

    /**
     * @description The type of the OS. Valid values:
     *
     *   **2**: Windows
     *   **1**: Linux
     *   **0**: all types
     *
     * @example 0
     *
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
