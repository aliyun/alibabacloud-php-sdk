<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeRequest;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeRequest\scenarioList\scenarioResources;
use AlibabaCloud\Tea\Model;

class scenarioList extends Model
{
    /**
     * @var string
     */
    public $scenario;

    /**
     * @var scenarioResources[]
     */
    public $scenarioResources;
    protected $_name = [
        'scenario'          => 'Scenario',
        'scenarioResources' => 'ScenarioResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->scenarioResources) {
            $res['ScenarioResources'] = [];
            if (null !== $this->scenarioResources && \is_array($this->scenarioResources)) {
                $n = 0;
                foreach ($this->scenarioResources as $item) {
                    $res['ScenarioResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarioList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['ScenarioResources'])) {
            if (!empty($map['ScenarioResources'])) {
                $model->scenarioResources = [];
                $n                        = 0;
                foreach ($map['ScenarioResources'] as $item) {
                    $model->scenarioResources[$n++] = null !== $item ? scenarioResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
