<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TaskGraphFlow;
use AlibabaCloud\Tea\Model;

class hitTaskFlowList extends Model
{
    /**
     * @var TaskGraphFlow
     */
    public $graphFlow;

    /**
     * @example 1
     *
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $taskFlowType;
    protected $_name = [
        'graphFlow'    => 'GraphFlow',
        'rid'          => 'Rid',
        'taskFlowType' => 'TaskFlowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->graphFlow) {
            $res['GraphFlow'] = null !== $this->graphFlow ? $this->graphFlow->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->taskFlowType) {
            $res['TaskFlowType'] = $this->taskFlowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitTaskFlowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GraphFlow'])) {
            $model->graphFlow = TaskGraphFlow::fromMap($map['GraphFlow']);
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['TaskFlowType'])) {
            $model->taskFlowType = $map['TaskFlowType'];
        }

        return $model;
    }
}
