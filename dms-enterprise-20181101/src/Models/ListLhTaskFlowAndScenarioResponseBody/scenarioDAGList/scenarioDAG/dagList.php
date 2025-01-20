<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\dagList\dag;

class dagList extends Model
{
    /**
     * @var dag[]
     */
    public $dag;
    protected $_name = [
        'dag' => 'Dag',
    ];

    public function validate()
    {
        if (\is_array($this->dag)) {
            Model::validateArray($this->dag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dag) {
            if (\is_array($this->dag)) {
                $res['Dag'] = [];
                $n1         = 0;
                foreach ($this->dag as $item1) {
                    $res['Dag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dag'])) {
            if (!empty($map['Dag'])) {
                $model->dag = [];
                $n1         = 0;
                foreach ($map['Dag'] as $item1) {
                    $model->dag[$n1++] = dag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
