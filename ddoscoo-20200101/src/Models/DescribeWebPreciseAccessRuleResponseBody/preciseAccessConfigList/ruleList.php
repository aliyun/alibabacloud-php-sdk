<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebPreciseAccessRuleResponseBody\preciseAccessConfigList\ruleList\conditionList;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The action triggered if the rule is matched. Valid values:
     *
     *   **accept**: allows the requests that match the rule.
     *   **block**: blocks the requests that match the rule.
     *   **challenge**: implements Completely Automated Public Turing test to tell Computers and Humans Apart (CAPTCHA) verification for the requests that match the rule.
     *
     * @example accept
     *
     * @var string
     */
    public $action;

    /**
     * @description The match conditions.
     *
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @description The validity period of the rule. Unit: seconds. This parameter takes effect only when **action** of a rule is **block**. Access requests that match the rule are blocked within the specified validity period of the rule. **0** indicates that the rule takes effect all the time.
     *
     * @example 0
     *
     * @var int
     */
    public $expires;

    /**
     * @description The name of the rule.
     *
     * @example testrule
     *
     * @var string
     */
    public $name;

    /**
     * @description The source of the rule. Valid values:
     *
     *   **manual**: manually created. This is the default value.
     *   **auto**: automatically generated.
     *
     * @example manual
     *
     * @var string
     */
    public $owner;
    protected $_name = [
        'action'        => 'Action',
        'conditionList' => 'ConditionList',
        'expires'       => 'Expires',
        'name'          => 'Name',
        'owner'         => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->conditionList) {
            $res['ConditionList'] = [];
            if (null !== $this->conditionList && \is_array($this->conditionList)) {
                $n = 0;
                foreach ($this->conditionList as $item) {
                    $res['ConditionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n                    = 0;
                foreach ($map['ConditionList'] as $item) {
                    $model->conditionList[$n++] = null !== $item ? conditionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
