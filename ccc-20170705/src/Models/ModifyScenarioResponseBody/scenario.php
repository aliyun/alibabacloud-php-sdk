<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioResponseBody\scenario\strategy;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioResponseBody\scenario\surveys;
use AlibabaCloud\SDK\CCC\V20170705\Models\ModifyScenarioResponseBody\scenario\variables;
use AlibabaCloud\Tea\Model;

class scenario extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $scenarioDescription;

    /**
     * @var string
     */
    public $scenarioName;

    /**
     * @var surveys[]
     */
    public $surveys;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'type'                => 'Type',
        'scenarioId'          => 'ScenarioId',
        'strategy'            => 'Strategy',
        'isTemplate'          => 'IsTemplate',
        'scenarioDescription' => 'ScenarioDescription',
        'scenarioName'        => 'ScenarioName',
        'surveys'             => 'Surveys',
        'variables'           => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->scenarioDescription) {
            $res['ScenarioDescription'] = $this->scenarioDescription;
        }
        if (null !== $this->scenarioName) {
            $res['ScenarioName'] = $this->scenarioName;
        }
        if (null !== $this->surveys) {
            $res['Surveys'] = [];
            if (null !== $this->surveys && \is_array($this->surveys)) {
                $n = 0;
                foreach ($this->surveys as $item) {
                    $res['Surveys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['ScenarioDescription'])) {
            $model->scenarioDescription = $map['ScenarioDescription'];
        }
        if (isset($map['ScenarioName'])) {
            $model->scenarioName = $map['ScenarioName'];
        }
        if (isset($map['Surveys'])) {
            if (!empty($map['Surveys'])) {
                $model->surveys = [];
                $n              = 0;
                foreach ($map['Surveys'] as $item) {
                    $model->surveys[$n++] = null !== $item ? surveys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
