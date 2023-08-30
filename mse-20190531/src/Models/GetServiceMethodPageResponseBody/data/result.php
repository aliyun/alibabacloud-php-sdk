<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageResponseBody\data\result\parameterDefinitions;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example com.alibabacloud.mse.demo.a.AController
     *
     * @var string
     */
    public $methodController;

    /**
     * @example aMethod
     *
     * @var string
     */
    public $name;

    /**
     * @example 示例接口描述信息。
     *
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
     * @example java.lang.String
     *
     * @var string
     */
    public $returnDetails;

    /**
     * @example java.lang.String
     *
     * @var string
     */
    public $returnType;
    protected $_name = [
        'methodController'     => 'MethodController',
        'name'                 => 'Name',
        'nameDetail'           => 'NameDetail',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterDetails'     => 'ParameterDetails',
        'parameterTypes'       => 'ParameterTypes',
        'paths'                => 'Paths',
        'requestMethods'       => 'RequestMethods',
        'returnDetails'        => 'ReturnDetails',
        'returnType'           => 'ReturnType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ParameterDefinitions'] = [];
            if (null !== $this->parameterDefinitions && \is_array($this->parameterDefinitions)) {
                $n = 0;
                foreach ($this->parameterDefinitions as $item) {
                    $res['ParameterDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameterDetails) {
            $res['ParameterDetails'] = $this->parameterDetails;
        }
        if (null !== $this->parameterTypes) {
            $res['ParameterTypes'] = $this->parameterTypes;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->requestMethods) {
            $res['RequestMethods'] = $this->requestMethods;
        }
        if (null !== $this->returnDetails) {
            $res['ReturnDetails'] = $this->returnDetails;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
                $n                           = 0;
                foreach ($map['ParameterDefinitions'] as $item) {
                    $model->parameterDefinitions[$n++] = null !== $item ? parameterDefinitions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParameterDetails'])) {
            if (!empty($map['ParameterDetails'])) {
                $model->parameterDetails = $map['ParameterDetails'];
            }
        }
        if (isset($map['ParameterTypes'])) {
            if (!empty($map['ParameterTypes'])) {
                $model->parameterTypes = $map['ParameterTypes'];
            }
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['RequestMethods'])) {
            if (!empty($map['RequestMethods'])) {
                $model->requestMethods = $map['RequestMethods'];
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
