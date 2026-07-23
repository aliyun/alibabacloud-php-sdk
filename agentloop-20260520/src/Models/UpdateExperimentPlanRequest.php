<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class UpdateExperimentPlanRequest extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetProject;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Evaluator[]
     */
    public $evaluators;

    /**
     * @var string
     */
    public $experimentType;

    /**
     * @var ExperimentConfig[]
     */
    public $experiments;

    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $querySql;

    /**
     * @var string[]
     */
    public $selectedItemIds;
    protected $_name = [
        'datasetId' => 'datasetId',
        'datasetProject' => 'datasetProject',
        'description' => 'description',
        'evaluators' => 'evaluators',
        'experimentType' => 'experimentType',
        'experiments' => 'experiments',
        'input' => 'input',
        'planName' => 'planName',
        'querySql' => 'querySql',
        'selectedItemIds' => 'selectedItemIds',
    ];

    public function validate()
    {
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        if (\is_array($this->experiments)) {
            Model::validateArray($this->experiments);
        }
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->selectedItemIds)) {
            Model::validateArray($this->selectedItemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetProject) {
            $res['datasetProject'] = $this->datasetProject;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->evaluators) {
            if (\is_array($this->evaluators)) {
                $res['evaluators'] = [];
                $n1 = 0;
                foreach ($this->evaluators as $item1) {
                    $res['evaluators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->experimentType) {
            $res['experimentType'] = $this->experimentType;
        }

        if (null !== $this->experiments) {
            if (\is_array($this->experiments)) {
                $res['experiments'] = [];
                $n1 = 0;
                foreach ($this->experiments as $item1) {
                    $res['experiments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                foreach ($this->input as $key1 => $value1) {
                    $res['input'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->querySql) {
            $res['querySql'] = $this->querySql;
        }

        if (null !== $this->selectedItemIds) {
            if (\is_array($this->selectedItemIds)) {
                $res['selectedItemIds'] = [];
                $n1 = 0;
                foreach ($this->selectedItemIds as $item1) {
                    $res['selectedItemIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        if (isset($map['datasetProject'])) {
            $model->datasetProject = $map['datasetProject'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['evaluators'])) {
            if (!empty($map['evaluators'])) {
                $model->evaluators = [];
                $n1 = 0;
                foreach ($map['evaluators'] as $item1) {
                    $model->evaluators[$n1] = Evaluator::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['experimentType'])) {
            $model->experimentType = $map['experimentType'];
        }

        if (isset($map['experiments'])) {
            if (!empty($map['experiments'])) {
                $model->experiments = [];
                $n1 = 0;
                foreach ($map['experiments'] as $item1) {
                    $model->experiments[$n1] = ExperimentConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                foreach ($map['input'] as $key1 => $value1) {
                    $model->input[$key1] = $value1;
                }
            }
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['querySql'])) {
            $model->querySql = $map['querySql'];
        }

        if (isset($map['selectedItemIds'])) {
            if (!empty($map['selectedItemIds'])) {
                $model->selectedItemIds = [];
                $n1 = 0;
                foreach ($map['selectedItemIds'] as $item1) {
                    $model->selectedItemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
