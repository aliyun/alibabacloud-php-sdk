<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityEvaluationTaskRequest;

use AlibabaCloud\Tea\Model;

class hooks extends Model
{
    /**
     * @description The hook trigger condition. When this condition is met, the hook action is triggered. Only two conditional expressions are supported:
     *
     *   Specify only one group of rule strength type and rule check status, such as ${severity} == "High" AND ${status} == "Critical". In this expression, the hook trigger condition is met if severity is High and status is Critical.
     *   Specify multiple groups of rule strength types and rule check status, such as (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error"). In this expression, the hook trigger condition is met if severity is High and status is Critical, severity is Normal and status is Critical, or severity is Normal and status is Error. The enumeration of severity in a conditional expression is the same as the enumeration of severity in DataQualityRule. The enumeration of status in a conditional expression is the same as the enumeration of status in DataQualityResult.
     *
     * @example ${severity} == "High" AND ${status} == "Critical"
     *
     * @var string
     */
    public $condition;

    /**
     * @description The hook type. Valid values:
     *
     *   BlockTaskInstance: Blocks the running of scheduling tasks.
     *
     * @example ByScheduledTaskInstance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'condition' => 'Condition',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

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
