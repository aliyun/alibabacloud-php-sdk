<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleRequest\conditions;
use AlibabaCloud\Tea\Model;

class ListContainerDefenseRuleRequest extends Model
{
    /**
     * @description The conditions.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether to query system rules.
     *
     * >  This parameter is deprecated.
     * @example 1
     *
     * @var int
     */
    public $isDefaultRule;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleType;
    protected $_name = [
        'conditions'    => 'Conditions',
        'currentPage'   => 'CurrentPage',
        'isDefaultRule' => 'IsDefaultRule',
        'lang'          => 'Lang',
        'pageSize'      => 'PageSize',
        'ruleType'      => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->isDefaultRule) {
            $res['IsDefaultRule'] = $this->isDefaultRule;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListContainerDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IsDefaultRule'])) {
            $model->isDefaultRule = $map['IsDefaultRule'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
