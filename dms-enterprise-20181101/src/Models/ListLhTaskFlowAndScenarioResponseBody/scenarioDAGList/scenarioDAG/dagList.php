<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\dagList\dag;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dag) {
            $res['Dag'] = [];
            if (null !== $this->dag && \is_array($this->dag)) {
                $n = 0;
                foreach ($this->dag as $item) {
                    $res['Dag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dag'])) {
            if (!empty($map['Dag'])) {
                $model->dag = [];
                $n          = 0;
                foreach ($map['Dag'] as $item) {
                    $model->dag[$n++] = null !== $item ? dag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
