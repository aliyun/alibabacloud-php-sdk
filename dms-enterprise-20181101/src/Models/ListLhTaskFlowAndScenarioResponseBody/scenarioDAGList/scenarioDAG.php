<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\dagList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG\scenario;
use AlibabaCloud\Tea\Model;

class scenarioDAG extends Model
{
    /**
     * @description The list of task flows.
     *
     * @var dagList
     */
    public $dagList;

    /**
     * @description The information about the business scenario.
     *
     * @var scenario
     */
    public $scenario;
    protected $_name = [
        'dagList' => 'DagList',
        'scenario' => 'Scenario',
    ];

    public function validate(): void {}

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
     * @return scenarioDAG
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
