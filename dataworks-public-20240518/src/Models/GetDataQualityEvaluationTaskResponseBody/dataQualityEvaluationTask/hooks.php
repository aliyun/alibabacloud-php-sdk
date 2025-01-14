<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask;

use AlibabaCloud\Tea\Model;

class hooks extends Model
{
    /**
     * @description Hook触发条件
     *
     * @example (${severity} == "High" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Critical") OR (${severity} == "Normal" AND ${status} == "Error")
     *
     * @var string
     */
    public $condition;

    /**
     * @description The hook type. Only one hook type is supported.
     *
     * Valid values:
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
