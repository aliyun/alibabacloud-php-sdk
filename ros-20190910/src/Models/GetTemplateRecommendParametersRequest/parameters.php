<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersRequest;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string[]
     */
    public $parameterCandidateValues;

    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'parameterCandidateValues' => 'ParameterCandidateValues',
        'parameterKey' => 'ParameterKey',
        'parameterValue' => 'ParameterValue',
    ];

    public function validate()
    {
        if (\is_array($this->parameterCandidateValues)) {
            Model::validateArray($this->parameterCandidateValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterCandidateValues) {
            if (\is_array($this->parameterCandidateValues)) {
                $res['ParameterCandidateValues'] = [];
                $n1 = 0;
                foreach ($this->parameterCandidateValues as $item1) {
                    $res['ParameterCandidateValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }

        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
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
        if (isset($map['ParameterCandidateValues'])) {
            if (!empty($map['ParameterCandidateValues'])) {
                $model->parameterCandidateValues = [];
                $n1 = 0;
                foreach ($map['ParameterCandidateValues'] as $item1) {
                    $model->parameterCandidateValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }

        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        return $model;
    }
}
