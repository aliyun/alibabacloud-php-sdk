<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTasksResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTasksResponseBody\data\evaluateTask;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var evaluateTask[]
     */
    public $evaluateTask;
    protected $_name = [
        'evaluateTask' => 'EvaluateTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluateTask) {
            $res['EvaluateTask'] = [];
            if (null !== $this->evaluateTask && \is_array($this->evaluateTask)) {
                $n = 0;
                foreach ($this->evaluateTask as $item) {
                    $res['EvaluateTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluateTask'])) {
            if (!empty($map['EvaluateTask'])) {
                $model->evaluateTask = [];
                $n                   = 0;
                foreach ($map['EvaluateTask'] as $item) {
                    $model->evaluateTask[$n++] = null !== $item ? evaluateTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
