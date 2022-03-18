<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\dagList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenario;
use AlibabaCloud\Tea\Model;

class scenarioDAGList extends Model
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
        'dagList'  => 'DagList',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagList) {
            $res['DagList'] = null !== $this->dagList ? $this->dagList->toMap() : null;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = null !== $this->scenario ? $this->scenario->toMap() : null;
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
        if (isset($map['DagList'])) {
            $model->dagList = dagList::fromMap($map['DagList']);
        }
        if (isset($map['Scenario'])) {
            $model->scenario = scenario::fromMap($map['Scenario']);
        }

        return $model;
    }
}
