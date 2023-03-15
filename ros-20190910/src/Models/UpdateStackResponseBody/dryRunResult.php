<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackResponseBody;

use AlibabaCloud\Tea\Model;

class dryRunResult extends Model
{
    /**
     * @description The parameters that can be modified. If you change only values of the parameters in a stack template and use the template to update the stack, no validation errors are caused.
     *
     * @var string[]
     */
    public $parametersAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions. If you change only values of the parameters in a stack template and use the template to update the stack, service interruptions are caused.
     *
     * >
     *   This parameter is supported only for a small number of resource types.
     *   This parameter is valid only for changes that are made on ROS stacks.
     *
     * @var string[]
     */
    public $parametersCauseInterruptionIfModified;

    /**
     * @description The parameters that can be modified under specific conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the new values of the parameters determine whether validation errors are caused.
     *
     * @var string[]
     */
    public $parametersConditionallyAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions under specific conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the new values and the update type determine whether service interruptions are caused.
     *
     * >
     *   This parameter is supported only for a small number of resource types.
     *   This parameter is valid only for changes that are made on ROS stacks.
     *
     * @var string[]
     */
    public $parametersConditionallyCauseInterruptionIfModified;

    /**
     * @description The parameters that cannot be modified. If you change only values of the parameters in a stack template and use the template to update the stack, validation errors are caused.
     *
     * @var string[]
     */
    public $parametersNotAllowedToBeModified;

    /**
     * @description The parameters that can be modified under uncertain conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the actual running environment determines whether validation errors are caused.
     *
     * @var string[]
     */
    public $parametersUncertainlyAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions under uncertain conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the actual running environment determines whether service interruptions are caused.
     *
     * >
     *   This parameter is supported only for a small number of resource types.
     *   This parameter is valid only for changes that are made on ROS stacks.
     *
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
     * @return dryRunResult
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
