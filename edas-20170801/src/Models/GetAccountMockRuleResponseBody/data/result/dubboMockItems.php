<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class dubboMockItems extends Model
{
    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string[]
     */
    public $paramTypes;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $oper;

    /**
     * @var string
     */
    public $executeCondition;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $exceptionClassName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'methodName'         => 'MethodName',
        'paramTypes'         => 'ParamTypes',
        'value'              => 'Value',
        'oper'               => 'Oper',
        'executeCondition'   => 'ExecuteCondition',
        'version'            => 'Version',
        'exceptionClassName' => 'ExceptionClassName',
        'serviceName'        => 'ServiceName',
        'group'              => 'Group',
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
            $res['ParamTypes'] = $this->paramTypes;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->oper) {
            $res['Oper'] = $this->oper;
        }
        if (null !== $this->executeCondition) {
            $res['ExecuteCondition'] = $this->executeCondition;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->exceptionClassName) {
            $res['ExceptionClassName'] = $this->exceptionClassName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dubboMockItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['ParamTypes'])) {
            if (!empty($map['ParamTypes'])) {
                $model->paramTypes = $map['ParamTypes'];
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Oper'])) {
            $model->oper = $map['Oper'];
        }
        if (isset($map['ExecuteCondition'])) {
            $model->executeCondition = $map['ExecuteCondition'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ExceptionClassName'])) {
            $model->exceptionClassName = $map['ExceptionClassName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
