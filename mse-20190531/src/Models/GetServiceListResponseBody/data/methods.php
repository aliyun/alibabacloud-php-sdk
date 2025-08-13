<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListResponseBody\data;

use AlibabaCloud\Dara\Model;

class methods extends Model
{
    /**
     * @var string
     */
    public $methodController;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameterTypes;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var string[]
     */
    public $requestMethods;

    /**
     * @var string
     */
    public $returnType;
    protected $_name = [
        'methodController' => 'MethodController',
        'name' => 'Name',
        'parameterTypes' => 'ParameterTypes',
        'paths' => 'Paths',
        'requestMethods' => 'RequestMethods',
        'returnType' => 'ReturnType',
    ];

    public function validate()
    {
        if (\is_array($this->parameterTypes)) {
            Model::validateArray($this->parameterTypes);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->requestMethods)) {
            Model::validateArray($this->requestMethods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->methodController) {
            $res['MethodController'] = $this->methodController;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameterTypes) {
            if (\is_array($this->parameterTypes)) {
                $res['ParameterTypes'] = [];
                $n1 = 0;
                foreach ($this->parameterTypes as $item1) {
                    $res['ParameterTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestMethods) {
            if (\is_array($this->requestMethods)) {
                $res['RequestMethods'] = [];
                $n1 = 0;
                foreach ($this->requestMethods as $item1) {
                    $res['RequestMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
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
        if (isset($map['MethodController'])) {
            $model->methodController = $map['MethodController'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParameterTypes'])) {
            if (!empty($map['ParameterTypes'])) {
                $model->parameterTypes = [];
                $n1 = 0;
                foreach ($map['ParameterTypes'] as $item1) {
                    $model->parameterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestMethods'])) {
            if (!empty($map['RequestMethods'])) {
                $model->requestMethods = [];
                $n1 = 0;
                foreach ($map['RequestMethods'] as $item1) {
                    $model->requestMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        return $model;
    }
}
