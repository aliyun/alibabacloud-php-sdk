<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule\rules;
use AlibabaCloud\Tea\Model;

class alertRule extends Model
{
    /**
     * @description The logical operator between conditions. Valid values: `&`: AND. `|`: OR.
     *
     * @example |
     *
     * @var string
     */
    public $operator;

    /**
     * @description The condition of the alert rule.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'operator' => 'Operator',
        'rules' => 'Rules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
