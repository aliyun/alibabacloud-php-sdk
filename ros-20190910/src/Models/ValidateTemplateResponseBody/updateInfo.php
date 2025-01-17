<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $parametersCauseReplacementIfModified;
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
    public $parametersConditionallyCauseReplacementIfModified;
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
    /**
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
        if (\is_array($this->parametersAllowedToBeModified)) {
            Model::validateArray($this->parametersAllowedToBeModified);
        }
        if (\is_array($this->parametersCauseInterruptionIfModified)) {
            Model::validateArray($this->parametersCauseInterruptionIfModified);
        }
        if (\is_array($this->parametersCauseReplacementIfModified)) {
            Model::validateArray($this->parametersCauseReplacementIfModified);
        }
        if (\is_array($this->parametersConditionallyAllowedToBeModified)) {
            Model::validateArray($this->parametersConditionallyAllowedToBeModified);
        }
        if (\is_array($this->parametersConditionallyCauseInterruptionIfModified)) {
            Model::validateArray($this->parametersConditionallyCauseInterruptionIfModified);
        }
        if (\is_array($this->parametersConditionallyCauseReplacementIfModified)) {
            Model::validateArray($this->parametersConditionallyCauseReplacementIfModified);
        }
        if (\is_array($this->parametersNotAllowedToBeModified)) {
            Model::validateArray($this->parametersNotAllowedToBeModified);
        }
        if (\is_array($this->parametersUncertainlyAllowedToBeModified)) {
            Model::validateArray($this->parametersUncertainlyAllowedToBeModified);
        }
        if (\is_array($this->parametersUncertainlyCauseInterruptionIfModified)) {
            Model::validateArray($this->parametersUncertainlyCauseInterruptionIfModified);
        }
        if (\is_array($this->parametersUncertainlyCauseReplacementIfModified)) {
            Model::validateArray($this->parametersUncertainlyCauseReplacementIfModified);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parametersAllowedToBeModified) {
            if (\is_array($this->parametersAllowedToBeModified)) {
                $res['ParametersAllowedToBeModified'] = [];
                $n1                                   = 0;
                foreach ($this->parametersAllowedToBeModified as $item1) {
                    $res['ParametersAllowedToBeModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersCauseInterruptionIfModified) {
            if (\is_array($this->parametersCauseInterruptionIfModified)) {
                $res['ParametersCauseInterruptionIfModified'] = [];
                $n1                                           = 0;
                foreach ($this->parametersCauseInterruptionIfModified as $item1) {
                    $res['ParametersCauseInterruptionIfModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersCauseReplacementIfModified) {
            if (\is_array($this->parametersCauseReplacementIfModified)) {
                $res['ParametersCauseReplacementIfModified'] = [];
                $n1                                          = 0;
                foreach ($this->parametersCauseReplacementIfModified as $item1) {
                    $res['ParametersCauseReplacementIfModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersConditionallyAllowedToBeModified) {
            if (\is_array($this->parametersConditionallyAllowedToBeModified)) {
                $res['ParametersConditionallyAllowedToBeModified'] = [];
                $n1                                                = 0;
                foreach ($this->parametersConditionallyAllowedToBeModified as $item1) {
                    $res['ParametersConditionallyAllowedToBeModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersConditionallyCauseInterruptionIfModified) {
            if (\is_array($this->parametersConditionallyCauseInterruptionIfModified)) {
                $res['ParametersConditionallyCauseInterruptionIfModified'] = [];
                $n1                                                        = 0;
                foreach ($this->parametersConditionallyCauseInterruptionIfModified as $item1) {
                    $res['ParametersConditionallyCauseInterruptionIfModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersConditionallyCauseReplacementIfModified) {
            if (\is_array($this->parametersConditionallyCauseReplacementIfModified)) {
                $res['ParametersConditionallyCauseReplacementIfModified'] = [];
                $n1                                                       = 0;
                foreach ($this->parametersConditionallyCauseReplacementIfModified as $item1) {
                    $res['ParametersConditionallyCauseReplacementIfModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersNotAllowedToBeModified) {
            if (\is_array($this->parametersNotAllowedToBeModified)) {
                $res['ParametersNotAllowedToBeModified'] = [];
                $n1                                      = 0;
                foreach ($this->parametersNotAllowedToBeModified as $item1) {
                    $res['ParametersNotAllowedToBeModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersUncertainlyAllowedToBeModified) {
            if (\is_array($this->parametersUncertainlyAllowedToBeModified)) {
                $res['ParametersUncertainlyAllowedToBeModified'] = [];
                $n1                                              = 0;
                foreach ($this->parametersUncertainlyAllowedToBeModified as $item1) {
                    $res['ParametersUncertainlyAllowedToBeModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersUncertainlyCauseInterruptionIfModified) {
            if (\is_array($this->parametersUncertainlyCauseInterruptionIfModified)) {
                $res['ParametersUncertainlyCauseInterruptionIfModified'] = [];
                $n1                                                      = 0;
                foreach ($this->parametersUncertainlyCauseInterruptionIfModified as $item1) {
                    $res['ParametersUncertainlyCauseInterruptionIfModified'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersUncertainlyCauseReplacementIfModified) {
            if (\is_array($this->parametersUncertainlyCauseReplacementIfModified)) {
                $res['ParametersUncertainlyCauseReplacementIfModified'] = [];
                $n1                                                     = 0;
                foreach ($this->parametersUncertainlyCauseReplacementIfModified as $item1) {
                    $res['ParametersUncertainlyCauseReplacementIfModified'][$n1++] = $item1;
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
        if (isset($map['ParametersAllowedToBeModified'])) {
            if (!empty($map['ParametersAllowedToBeModified'])) {
                $model->parametersAllowedToBeModified = [];
                $n1                                   = 0;
                foreach ($map['ParametersAllowedToBeModified'] as $item1) {
                    $model->parametersAllowedToBeModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersCauseInterruptionIfModified'])) {
                $model->parametersCauseInterruptionIfModified = [];
                $n1                                           = 0;
                foreach ($map['ParametersCauseInterruptionIfModified'] as $item1) {
                    $model->parametersCauseInterruptionIfModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersCauseReplacementIfModified'])) {
            if (!empty($map['ParametersCauseReplacementIfModified'])) {
                $model->parametersCauseReplacementIfModified = [];
                $n1                                          = 0;
                foreach ($map['ParametersCauseReplacementIfModified'] as $item1) {
                    $model->parametersCauseReplacementIfModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersConditionallyAllowedToBeModified'])) {
            if (!empty($map['ParametersConditionallyAllowedToBeModified'])) {
                $model->parametersConditionallyAllowedToBeModified = [];
                $n1                                                = 0;
                foreach ($map['ParametersConditionallyAllowedToBeModified'] as $item1) {
                    $model->parametersConditionallyAllowedToBeModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersConditionallyCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersConditionallyCauseInterruptionIfModified'])) {
                $model->parametersConditionallyCauseInterruptionIfModified = [];
                $n1                                                        = 0;
                foreach ($map['ParametersConditionallyCauseInterruptionIfModified'] as $item1) {
                    $model->parametersConditionallyCauseInterruptionIfModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersConditionallyCauseReplacementIfModified'])) {
            if (!empty($map['ParametersConditionallyCauseReplacementIfModified'])) {
                $model->parametersConditionallyCauseReplacementIfModified = [];
                $n1                                                       = 0;
                foreach ($map['ParametersConditionallyCauseReplacementIfModified'] as $item1) {
                    $model->parametersConditionallyCauseReplacementIfModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersNotAllowedToBeModified'])) {
            if (!empty($map['ParametersNotAllowedToBeModified'])) {
                $model->parametersNotAllowedToBeModified = [];
                $n1                                      = 0;
                foreach ($map['ParametersNotAllowedToBeModified'] as $item1) {
                    $model->parametersNotAllowedToBeModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersUncertainlyAllowedToBeModified'])) {
            if (!empty($map['ParametersUncertainlyAllowedToBeModified'])) {
                $model->parametersUncertainlyAllowedToBeModified = [];
                $n1                                              = 0;
                foreach ($map['ParametersUncertainlyAllowedToBeModified'] as $item1) {
                    $model->parametersUncertainlyAllowedToBeModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersUncertainlyCauseInterruptionIfModified'])) {
            if (!empty($map['ParametersUncertainlyCauseInterruptionIfModified'])) {
                $model->parametersUncertainlyCauseInterruptionIfModified = [];
                $n1                                                      = 0;
                foreach ($map['ParametersUncertainlyCauseInterruptionIfModified'] as $item1) {
                    $model->parametersUncertainlyCauseInterruptionIfModified[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersUncertainlyCauseReplacementIfModified'])) {
            if (!empty($map['ParametersUncertainlyCauseReplacementIfModified'])) {
                $model->parametersUncertainlyCauseReplacementIfModified = [];
                $n1                                                     = 0;
                foreach ($map['ParametersUncertainlyCauseReplacementIfModified'] as $item1) {
                    $model->parametersUncertainlyCauseReplacementIfModified[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
