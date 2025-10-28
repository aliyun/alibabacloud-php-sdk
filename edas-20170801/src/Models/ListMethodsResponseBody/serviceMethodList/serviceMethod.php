<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\inputParams;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod\paramTypes;

class serviceMethod extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var inputParams
     */
    public $inputParams;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $output;

    /**
     * @var paramTypes
     */
    public $paramTypes;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'appName' => 'AppName',
        'inputParams' => 'InputParams',
        'methodName' => 'MethodName',
        'output' => 'Output',
        'paramTypes' => 'ParamTypes',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (null !== $this->inputParams) {
            $this->inputParams->validate();
        }
        if (null !== $this->paramTypes) {
            $this->paramTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->inputParams) {
            $res['InputParams'] = null !== $this->inputParams ? $this->inputParams->toArray($noStream) : $this->inputParams;
        }

        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->paramTypes) {
            $res['ParamTypes'] = null !== $this->paramTypes ? $this->paramTypes->toArray($noStream) : $this->paramTypes;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['InputParams'])) {
            $model->inputParams = inputParams::fromMap($map['InputParams']);
        }

        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['ParamTypes'])) {
            $model->paramTypes = paramTypes::fromMap($map['ParamTypes']);
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
