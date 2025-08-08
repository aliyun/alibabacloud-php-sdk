<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\dagList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\scenario;

class scenarioDAG extends Model
{
    /**
     * @var dagList
     */
    public $dagList;

    /**
     * @var scenario
     */
    public $scenario;
    protected $_name = [
        'dagList' => 'DagList',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
        if (null !== $this->dagList) {
            $this->dagList->validate();
        }
        if (null !== $this->scenario) {
            $this->scenario->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagList) {
            $res['DagList'] = null !== $this->dagList ? $this->dagList->toArray($noStream) : $this->dagList;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = null !== $this->scenario ? $this->scenario->toArray($noStream) : $this->scenario;
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
        if (isset($map['DagList'])) {
            $model->dagList = dagList::fromMap($map['DagList']);
        }

        if (isset($map['Scenario'])) {
            $model->scenario = scenario::fromMap($map['Scenario']);
        }

        return $model;
    }
}
