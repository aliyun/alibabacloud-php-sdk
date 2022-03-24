<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;
use AlibabaCloud\Tea\Model;

class scenarioDAGList extends Model
{
    /**
     * @var scenarioDAG[]
     */
    public $scenarioDAG;
    protected $_name = [
        'scenarioDAG' => 'ScenarioDAG',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenarioDAG) {
            $res['ScenarioDAG'] = [];
            if (null !== $this->scenarioDAG && \is_array($this->scenarioDAG)) {
                $n = 0;
                foreach ($this->scenarioDAG as $item) {
                    $res['ScenarioDAG'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarioDAGList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScenarioDAG'])) {
            if (!empty($map['ScenarioDAG'])) {
                $model->scenarioDAG = [];
                $n                  = 0;
                foreach ($map['ScenarioDAG'] as $item) {
                    $model->scenarioDAG[$n++] = null !== $item ? scenarioDAG::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
