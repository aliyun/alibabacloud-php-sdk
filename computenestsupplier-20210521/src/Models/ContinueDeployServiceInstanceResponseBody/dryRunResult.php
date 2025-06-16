<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class dryRunResult extends Model
{
    /**
     * @var string[]
     */
    public $parametersAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersConditionallyAllowedToBeModified;

    /**
     * @var string[]
     */
    public $parametersNotAllowedToBeModified;
    protected $_name = [
        'parametersAllowedToBeModified' => 'ParametersAllowedToBeModified',
        'parametersConditionallyAllowedToBeModified' => 'ParametersConditionallyAllowedToBeModified',
        'parametersNotAllowedToBeModified' => 'ParametersNotAllowedToBeModified',
    ];

    public function validate()
    {
        if (\is_array($this->parametersAllowedToBeModified)) {
            Model::validateArray($this->parametersAllowedToBeModified);
        }
        if (\is_array($this->parametersConditionallyAllowedToBeModified)) {
            Model::validateArray($this->parametersConditionallyAllowedToBeModified);
        }
        if (\is_array($this->parametersNotAllowedToBeModified)) {
            Model::validateArray($this->parametersNotAllowedToBeModified);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parametersAllowedToBeModified) {
            if (\is_array($this->parametersAllowedToBeModified)) {
                $res['ParametersAllowedToBeModified'] = [];
                $n1 = 0;
                foreach ($this->parametersAllowedToBeModified as $item1) {
                    $res['ParametersAllowedToBeModified'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parametersConditionallyAllowedToBeModified) {
            if (\is_array($this->parametersConditionallyAllowedToBeModified)) {
                $res['ParametersConditionallyAllowedToBeModified'] = [];
                $n1 = 0;
                foreach ($this->parametersConditionallyAllowedToBeModified as $item1) {
                    $res['ParametersConditionallyAllowedToBeModified'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parametersNotAllowedToBeModified) {
            if (\is_array($this->parametersNotAllowedToBeModified)) {
                $res['ParametersNotAllowedToBeModified'] = [];
                $n1 = 0;
                foreach ($this->parametersNotAllowedToBeModified as $item1) {
                    $res['ParametersNotAllowedToBeModified'][$n1] = $item1;
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
        if (isset($map['ParametersAllowedToBeModified'])) {
            if (!empty($map['ParametersAllowedToBeModified'])) {
                $model->parametersAllowedToBeModified = [];
                $n1 = 0;
                foreach ($map['ParametersAllowedToBeModified'] as $item1) {
                    $model->parametersAllowedToBeModified[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ParametersConditionallyAllowedToBeModified'])) {
            if (!empty($map['ParametersConditionallyAllowedToBeModified'])) {
                $model->parametersConditionallyAllowedToBeModified = [];
                $n1 = 0;
                foreach ($map['ParametersConditionallyAllowedToBeModified'] as $item1) {
                    $model->parametersConditionallyAllowedToBeModified[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ParametersNotAllowedToBeModified'])) {
            if (!empty($map['ParametersNotAllowedToBeModified'])) {
                $model->parametersNotAllowedToBeModified = [];
                $n1 = 0;
                foreach ($map['ParametersNotAllowedToBeModified'] as $item1) {
                    $model->parametersNotAllowedToBeModified[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
