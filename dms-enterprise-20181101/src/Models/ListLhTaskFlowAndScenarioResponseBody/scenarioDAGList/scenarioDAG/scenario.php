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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\scenarioDAG;

use AlibabaCloud\Tea\Model;

class scenario extends Model
{
    /**
     * @description The ID of the user who creates the business scenario.
     *
     * @example 51****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The description of the business scenario.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the business scenario.
     *
     * @example Scenario_2
     *
     * @var string
     */
    public $scenarioName;
    protected $_name = [
        'creatorId' => 'CreatorId',
        'description' => 'Description',
        'scenarioName' => 'ScenarioName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenario
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }

        return $model;
    }
}
