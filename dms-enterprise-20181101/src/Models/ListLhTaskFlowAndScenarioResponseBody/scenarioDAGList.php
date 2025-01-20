<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;

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
        if (\is_array($this->scenarioDAG)) {
            Model::validateArray($this->scenarioDAG);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenarioDAG) {
            if (\is_array($this->scenarioDAG)) {
                $res['ScenarioDAG'] = [];
                $n1                 = 0;
                foreach ($this->scenarioDAG as $item1) {
                    $res['ScenarioDAG'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ScenarioDAG'])) {
            if (!empty($map['ScenarioDAG'])) {
                $model->scenarioDAG = [];
                $n1                 = 0;
                foreach ($map['ScenarioDAG'] as $item1) {
                    $model->scenarioDAG[$n1++] = scenarioDAG::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
