<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class hooks extends Model
{
    /**
     * @description Hook trigger condition. When this condition is met, hook action is triggered. Currently, only two conditional expressions are supported:
     *
     * - Specify only one set of rule severity types AND rule verification status, such as `${severity} = = "High" AND ${status} = = "Critical"`, which indicates that in the executed rule, if the rule verification result of severity High is Critical, the condition is met.
     * - Specify multiple sets of rule severity types AND rule verification status, such as `(${severity} = = "High" AND ${status} = "Critical") OR (${severity} = "Normal" AND ${status} = "Critical") OR (${severity} = "Normal" AND ${status} = "Error")`, if the rule verification result of severity High is Critical, the rule verification result of severity Normal is Critical, or the rule verification result of severity Normal is Error, the enumeration that satisfies the condition expression severity is consistent with the enumeration DataQualityRule in severity, and the enumeration of status is consistent with the status in DataQualityResult.
     *
     * @example (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")
     *
     * @var string
     */
    public $condition;

    /**
     * @description The hook type. Only one hook type is supported.
     *
     *   BlockTaskInstance: Blocks the running of scheduling tasks. A monitor is triggered by scheduling tasks. After a monitor finishes running, the monitor determines whether to block the running of scheduling tasks based on the hook condition.
     *
     * @example BlockTaskInstance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'Condition',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hooks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
