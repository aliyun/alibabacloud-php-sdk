<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class updateInfo extends Model
{
    /**
     * @description The parameters that can be modified.
     *
     * @var string[]
     */
    public $parametersAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions.
     *
     * > - This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersCauseInterruptionIfModified;

    /**
     * @description The parameters whose changes trigger replacement updates for resources.
     *
     * > -  This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersCauseReplacementIfModified;

    /**
     * @description The parameters that can be modified under specific conditions.
     *
     * @var string[]
     */
    public $parametersConditionallyAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions under specific conditions.
     *
     * > - This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersConditionallyCauseInterruptionIfModified;

    /**
     * @description The parameters whose changes trigger replacement updates for resources under specific conditions.
     *
     * > - This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersConditionallyCauseReplacementIfModified;

    /**
     * @description The parameters that cannot be modified.
     *
     * @var string[]
     */
    public $parametersNotAllowedToBeModified;

    /**
     * @description The parameters that can be modified under uncertain conditions.
     *
     * @var string[]
     */
    public $parametersUncertainlyAllowedToBeModified;

    /**
     * @description The parameters whose changes cause service interruptions under uncertain conditions.
     *
     * > - This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersUncertainlyCauseInterruptionIfModified;

    /**
     * @description The parameters whose changes trigger replacement updates for resources under uncertain conditions.
     *
     * > -  This parameter is valid only for updates on ROS stacks.
     * @var string[]
     */
    public $parametersUncertainlyCauseReplacementIfModified;
    protected $_name = [
        'parametersAllowedToBeModified'                      => 'ParametersAllowedToBeModified',
        'parametersCauseInterruptionIfModified'              => 'ParametersCauseInterruptionIfModified',
        'parametersCauseReplacementIfModified'               => 'ParametersCauseReplacementIfModified',
        'parametersConditionallyAllowedToBeModified'         => 'ParametersConditionallyAllowedToBeModified',
        'parametersConditionallyCauseInterruptionIfModified' => 'ParametersConditionallyCauseInterruptionIfModified',
        'parametersConditionallyCauseReplacementIfModified'  => 'ParametersConditionallyCauseReplacementIfModified',
        'parametersNotAllowedToBeModified'                   => 'ParametersNotAllowedToBeModified',
        'parametersUncertainlyAllowedToBeModified'           => 'ParametersUncertainlyAllowedToBeModified',
        'parametersUncertainlyCauseInterruptionIfModified'   => 'ParametersUncertainlyCauseInterruptionIfModified',
        'parametersUncertainlyCauseReplacementIfModified'    => 'ParametersUncertainlyCauseReplacementIfModified',
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
        if (null !== $this->parametersCauseReplacementIfModified) {
            $res['ParametersCauseReplacementIfModified'] = $this->parametersCauseReplacementIfModified;
        }
        if (null !== $this->parametersConditionallyAllowedToBeModified) {
            $res['ParametersConditionallyAllowedToBeModified'] = $this->parametersConditionallyAllowedToBeModified;
        }
        if (null !== $this->parametersConditionallyCauseInterruptionIfModified) {
            $res['ParametersConditionallyCauseInterruptionIfModified'] = $this->parametersConditionallyCauseInterruptionIfModified;
        }
        if (null !== $this->parametersConditionallyCauseReplacementIfModified) {
            $res['ParametersConditionallyCauseReplacementIfModified'] = $this->parametersConditionallyCauseReplacementIfModified;
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
        if (null !== $this->parametersUncertainlyCauseReplacementIfModified) {
            $res['ParametersUncertainlyCauseReplacementIfModified'] = $this->parametersUncertainlyCauseReplacementIfModified;
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
        if (isset($map['ParametersCauseReplacementIfModified'])) {
            if (!empty($map['ParametersCauseReplacementIfModified'])) {
                $model->parametersCauseReplacementIfModified = $map['ParametersCauseReplacementIfModified'];
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
        if (isset($map['ParametersConditionallyCauseReplacementIfModified'])) {
            if (!empty($map['ParametersConditionallyCauseReplacementIfModified'])) {
                $model->parametersConditionallyCauseReplacementIfModified = $map['ParametersConditionallyCauseReplacementIfModified'];
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
        if (isset($map['ParametersUncertainlyCauseReplacementIfModified'])) {
            if (!empty($map['ParametersUncertainlyCauseReplacementIfModified'])) {
                $model->parametersUncertainlyCauseReplacementIfModified = $map['ParametersUncertainlyCauseReplacementIfModified'];
            }
        }

        return $model;
    }
}
