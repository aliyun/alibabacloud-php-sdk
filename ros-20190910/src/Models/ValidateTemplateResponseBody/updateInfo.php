<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class updateInfo extends Model
{
    /**
     * @var string[]
     */
    public $parametersAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersCauseInterruptionIfModified;

    /**
     * @var string[]
     */
    public $parametersConditionallyAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersConditionallyCauseInterruptionIfModified;

    /**
     * @var string[]
     */
    public $parametersNotAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersUncertainlyAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersUncertainlyCauseInterruptionIfModified;
    protected $_name = [
        'parametersAllowedToBeModified'                      => 'ParametersAllowedToBeModified',
        'parametersCauseInterruptionIfModified'              => 'ParametersCauseInterruptionIfModified',
        'parametersConditionallyAllowedToBeModified'         => 'ParametersConditionallyAllowedToBeModified',
        'parametersConditionallyCauseInterruptionIfModified' => 'ParametersConditionallyCauseInterruptionIfModified',
        'parametersNotAllowedToBeModified'                   => 'ParametersNotAllowedToBeModified',
        'parametersUncertainlyAllowedToBeModified'           => 'ParametersUncertainlyAllowedToBeModified',
        'parametersUncertainlyCauseInterruptionIfModified'   => 'ParametersUncertainlyCauseInterruptionIfModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parametersAllowedToBeModified) {
            $res['ParametersAllowedToBeModified'] = $this->parametersAllowedToBeModified;
        }
        if (null !== $this->parametersCauseInterruptionIfModified) {
            $res['ParametersCauseInterruptionIfModified'] = $this->parametersCauseInterruptionIfModified;
        }
        if (null !== $this->parametersConditionallyAllowedToBeModified) {
            $res['ParametersConditionallyAllowedToBeModified'] = $this->parametersConditionallyAllowedToBeModified;
        }
        if (null !== $this->parametersConditionallyCauseInterruptionIfModified) {
            $res['ParametersConditionallyCauseInterruptionIfModified'] = $this->parametersConditionallyCauseInterruptionIfModified;
        }
        if (null !== $this->parametersNotAllowedToBeModified) {
            $res['ParametersNotAllowedToBeModified'] = $this->parametersNotAllowedToBeModified;
        }
        if (null !== $this->parametersUncertainlyAllowedToBeModified) {
            $res['ParametersUncertainlyAllowedToBeModified'] = $this->parametersUncertainlyAllowedToBeModified;
        }
        if (null !== $this->parametersUncertainlyCauseInterruptionIfModified) {
            $res['ParametersUncertainlyCauseInterruptionIfModified'] = $this->parametersUncertainlyCauseInterruptionIfModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParametersAllowedToBeModified'])) {
            if (!empty($map['ParametersAllowedToBeModified'])) {
                $model->parametersAllowedToBeModified = $map['ParametersAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersCauseInterruptionIfModified'])) {
                $model->parametersCauseInterruptionIfModified = $map['ParametersCauseInterruptionIfModified'];
            }
        }
        if (isset($map['ParametersConditionallyAllowedToBeModified'])) {
            if (!empty($map['ParametersConditionallyAllowedToBeModified'])) {
                $model->parametersConditionallyAllowedToBeModified = $map['ParametersConditionallyAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersConditionallyCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersConditionallyCauseInterruptionIfModified'])) {
                $model->parametersConditionallyCauseInterruptionIfModified = $map['ParametersConditionallyCauseInterruptionIfModified'];
            }
        }
        if (isset($map['ParametersNotAllowedToBeModified'])) {
            if (!empty($map['ParametersNotAllowedToBeModified'])) {
                $model->parametersNotAllowedToBeModified = $map['ParametersNotAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersUncertainlyAllowedToBeModified'])) {
            if (!empty($map['ParametersUncertainlyAllowedToBeModified'])) {
                $model->parametersUncertainlyAllowedToBeModified = $map['ParametersUncertainlyAllowedToBeModified'];
            }
        }
        if (isset($map['ParametersUncertainlyCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersUncertainlyCauseInterruptionIfModified'])) {
                $model->parametersUncertainlyCauseInterruptionIfModified = $map['ParametersUncertainlyCauseInterruptionIfModified'];
            }
        }

        return $model;
    }
}
