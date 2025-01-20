<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule;

use AlibabaCloud\Dara\Model;

class method extends Model
{
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string[]
     */
    public $parameterTypes;
    /**
     * @var string
     */
    public $returnType;
    /**
     * @var string
     */
    public $serviceName;
    /**
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
        if (\is_array($this->parameterTypes)) {
            Model::validateArray($this->parameterTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameterTypes) {
            if (\is_array($this->parameterTypes)) {
                $res['ParameterTypes'] = [];
                $n1                    = 0;
                foreach ($this->parameterTypes as $item1) {
                    $res['ParameterTypes'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->parameterTypes = [];
                $n1                    = 0;
                foreach ($map['ParameterTypes'] as $item1) {
                    $model->parameterTypes[$n1++] = $item1;
                }
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
