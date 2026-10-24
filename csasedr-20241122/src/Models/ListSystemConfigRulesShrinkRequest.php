<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class ListSystemConfigRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregationIdsShrink;

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
     * @var string
     */
    public $ruleTypesShrink;

    /**
     * @var string
     */
    public $selectionKey;

    /**
     * @var int
     */
    public $systemType;
    protected $_name = [
        'aggregationIdsShrink' => 'AggregationIds',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'ruleName' => 'RuleName',
        'ruleTypesShrink' => 'RuleTypes',
        'selectionKey' => 'SelectionKey',
        'systemType' => 'SystemType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationIdsShrink) {
            $res['AggregationIds'] = $this->aggregationIdsShrink;
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

        if (null !== $this->ruleTypesShrink) {
            $res['RuleTypes'] = $this->ruleTypesShrink;
        }

        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
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
            $model->aggregationIdsShrink = $map['AggregationIds'];
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
            $model->ruleTypesShrink = $map['RuleTypes'];
        }

        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
