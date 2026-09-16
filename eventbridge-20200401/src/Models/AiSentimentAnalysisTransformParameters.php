<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiSentimentAnalysisTransformParameters extends Model
{
    /**
     * @var string[]
     */
    public $aspects;

    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'aspects' => 'Aspects',
        'inputField' => 'InputField',
        'stepName' => 'StepName',
    ];

    public function validate()
    {
        if (\is_array($this->aspects)) {
            Model::validateArray($this->aspects);
        }
        if (null !== $this->inputField) {
            $this->inputField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aspects) {
            if (\is_array($this->aspects)) {
                $res['Aspects'] = [];
                $n1 = 0;
                foreach ($this->aspects as $item1) {
                    $res['Aspects'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
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
        if (isset($map['Aspects'])) {
            if (!empty($map['Aspects'])) {
                $model->aspects = [];
                $n1 = 0;
                foreach ($map['Aspects'] as $item1) {
                    $model->aspects[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
