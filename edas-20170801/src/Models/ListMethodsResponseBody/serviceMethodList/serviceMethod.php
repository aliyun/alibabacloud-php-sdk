<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\inputParams;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\paramTypes;
use AlibabaCloud\Tea\Model;

class serviceMethod extends Model
{
    /**
     * @var string
     */
    public $methodName;

    /**
     * @var paramTypes
     */
    public $paramTypes;

    /**
     * @var inputParams
     */
    public $inputParams;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'methodName'  => 'MethodName',
        'paramTypes'  => 'ParamTypes',
        'inputParams' => 'InputParams',
        'appName'     => 'AppName',
        'output'      => 'Output',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->paramTypes) {
            $res['ParamTypes'] = null !== $this->paramTypes ? $this->paramTypes->toMap() : null;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = null !== $this->inputParams ? $this->inputParams->toMap() : null;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMethod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['ParamTypes'])) {
            $model->paramTypes = paramTypes::fromMap($map['ParamTypes']);
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = inputParams::fromMap($map['InputParams']);
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
