<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TaskGraphFlow;

class hitTaskFlowList extends Model
{
    /**
     * @var TaskGraphFlow
     */
    public $graphFlow;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $taskFlowType;
    protected $_name = [
        'graphFlow' => 'GraphFlow',
        'rid' => 'Rid',
        'taskFlowType' => 'TaskFlowType',
    ];

    public function validate()
    {
        if (null !== $this->graphFlow) {
            $this->graphFlow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graphFlow) {
            $res['GraphFlow'] = null !== $this->graphFlow ? $this->graphFlow->toArray($noStream) : $this->graphFlow;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->taskFlowType) {
            $res['TaskFlowType'] = $this->taskFlowType;
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
