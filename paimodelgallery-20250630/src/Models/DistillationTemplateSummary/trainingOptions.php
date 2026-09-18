<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20250630\Models\DistillationTemplateSummary;

use AlibabaCloud\Dara\Model;

class trainingOptions extends Model
{
    /**
     * @var string[]
     */
    public $modelTasks;

    /**
     * @var string[]
     */
    public $trainingMethods;

    /**
     * @var string
     */
    public $trainingType;
    protected $_name = [
        'modelTasks' => 'ModelTasks',
        'trainingMethods' => 'TrainingMethods',
        'trainingType' => 'TrainingType',
    ];

    public function validate()
    {
        if (\is_array($this->modelTasks)) {
            Model::validateArray($this->modelTasks);
        }
        if (\is_array($this->trainingMethods)) {
            Model::validateArray($this->trainingMethods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelTasks) {
            if (\is_array($this->modelTasks)) {
                $res['ModelTasks'] = [];
                $n1 = 0;
                foreach ($this->modelTasks as $item1) {
                    $res['ModelTasks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trainingMethods) {
            if (\is_array($this->trainingMethods)) {
                $res['TrainingMethods'] = [];
                $n1 = 0;
                foreach ($this->trainingMethods as $item1) {
                    $res['TrainingMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trainingType) {
            $res['TrainingType'] = $this->trainingType;
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
        if (isset($map['ModelTasks'])) {
            if (!empty($map['ModelTasks'])) {
                $model->modelTasks = [];
                $n1 = 0;
                foreach ($map['ModelTasks'] as $item1) {
                    $model->modelTasks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TrainingMethods'])) {
            if (!empty($map['TrainingMethods'])) {
                $model->trainingMethods = [];
                $n1 = 0;
                foreach ($map['TrainingMethods'] as $item1) {
                    $model->trainingMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TrainingType'])) {
            $model->trainingType = $map['TrainingType'];
        }

        return $model;
    }
}
