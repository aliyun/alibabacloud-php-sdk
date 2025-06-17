<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data\methods\parameterDefinitions;

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
     * @var string
     */
    public $nameDetail;

    /**
     * @var parameterDefinitions[]
     */
    public $parameterDefinitions;

    /**
     * @var string[]
     */
    public $parameterDetails;

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
    public $returnDetails;

    /**
     * @var string
     */
    public $returnType;
    protected $_name = [
        'methodController' => 'MethodController',
        'name' => 'Name',
        'nameDetail' => 'NameDetail',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterDetails' => 'ParameterDetails',
        'parameterTypes' => 'ParameterTypes',
        'paths' => 'Paths',
        'requestMethods' => 'RequestMethods',
        'returnDetails' => 'ReturnDetails',
        'returnType' => 'ReturnType',
    ];

    public function validate()
    {
        if (\is_array($this->parameterDefinitions)) {
            Model::validateArray($this->parameterDefinitions);
        }
        if (\is_array($this->parameterDetails)) {
            Model::validateArray($this->parameterDetails);
        }
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

        if (null !== $this->nameDetail) {
            $res['NameDetail'] = $this->nameDetail;
        }

        if (null !== $this->parameterDefinitions) {
            if (\is_array($this->parameterDefinitions)) {
                $res['ParameterDefinitions'] = [];
                $n1 = 0;
                foreach ($this->parameterDefinitions as $item1) {
                    $res['ParameterDefinitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameterDetails) {
            if (\is_array($this->parameterDetails)) {
                $res['ParameterDetails'] = [];
                $n1 = 0;
                foreach ($this->parameterDetails as $item1) {
                    $res['ParameterDetails'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->returnDetails) {
            $res['ReturnDetails'] = $this->returnDetails;
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

        if (isset($map['NameDetail'])) {
            $model->nameDetail = $map['NameDetail'];
        }

        if (isset($map['ParameterDefinitions'])) {
            if (!empty($map['ParameterDefinitions'])) {
                $model->parameterDefinitions = [];
                $n1 = 0;
                foreach ($map['ParameterDefinitions'] as $item1) {
                    $model->parameterDefinitions[$n1] = parameterDefinitions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ParameterDetails'])) {
            if (!empty($map['ParameterDetails'])) {
                $model->parameterDetails = [];
                $n1 = 0;
                foreach ($map['ParameterDetails'] as $item1) {
                    $model->parameterDetails[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ReturnDetails'])) {
            $model->returnDetails = $map['ReturnDetails'];
        }

        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }

        return $model;
    }
}
