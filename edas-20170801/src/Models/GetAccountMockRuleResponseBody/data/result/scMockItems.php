<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetAccountMockRuleResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class scMockItems extends Model
{
    /**
     * @var string
     */
    public $exceptionClassName;

    /**
     * @var string
     */
    public $executeCondition;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $oper;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'exceptionClassName' => 'ExceptionClassName',
        'executeCondition'   => 'ExecuteCondition',
        'method'             => 'Method',
        'oper'               => 'Oper',
        'path'               => 'Path',
        'serviceName'        => 'ServiceName',
        'value'              => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceptionClassName) {
            $res['ExceptionClassName'] = $this->exceptionClassName;
        }
        if (null !== $this->executeCondition) {
            $res['ExecuteCondition'] = $this->executeCondition;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->oper) {
            $res['Oper'] = $this->oper;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scMockItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExceptionClassName'])) {
            $model->exceptionClassName = $map['ExceptionClassName'];
        }
        if (isset($map['ExecuteCondition'])) {
            $model->executeCondition = $map['ExecuteCondition'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Oper'])) {
            $model->oper = $map['Oper'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
