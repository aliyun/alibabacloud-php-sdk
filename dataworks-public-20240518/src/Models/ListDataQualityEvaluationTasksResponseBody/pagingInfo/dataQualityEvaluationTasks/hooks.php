<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks;

use AlibabaCloud\Tea\Model;

class hooks extends Model
{
    /**
     * @description The trigger configuration of the callback event.
     *
     * @example ${severity} == "High" AND ${status} == "Critical"
     *
     * @var string
     */
    public $condition;

    /**
     * @description The type of the callback event. Valid values:
     *
     *   BlockTaskInstance. The value indicates that an auto triggered node is blocked.
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
