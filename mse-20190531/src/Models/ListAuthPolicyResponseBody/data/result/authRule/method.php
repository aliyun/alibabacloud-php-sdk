<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule;

use AlibabaCloud\Tea\Model;

class method extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $group;

    /**
     * @example hello
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameterTypes;

    /**
     * @example Boolean
     *
     * @var string
     */
    public $returnType;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 0.0.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'group'          => 'Group',
        'name'           => 'Name',
        'parameterTypes' => 'ParameterTypes',
        'returnType'     => 'ReturnType',
        'serviceName'    => 'ServiceName',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterTypes) {
            $res['ParameterTypes'] = $this->parameterTypes;
        }
        if (null !== $this->returnType) {
            $res['ReturnType'] = $this->returnType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return method
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterTypes'])) {
            if (!empty($map['ParameterTypes'])) {
                $model->parameterTypes = $map['ParameterTypes'];
            }
        }
        if (isset($map['ReturnType'])) {
            $model->returnType = $map['ReturnType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
