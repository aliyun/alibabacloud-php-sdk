<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\workload;

use AlibabaCloud\Tea\Model;

class paramSettings extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $paramDesc;

    /**
     * @example ITERATION
     *
     * @var string
     */
    public $paramName;

    /**
     * @example [0-9]+
     *
     * @var string
     */
    public $paramRegex;

    /**
     * @example number
     *
     * @var string
     */
    public $paramType;

    /**
     * @example 100
     *
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'paramDesc'    => 'ParamDesc',
        'paramName'    => 'ParamName',
        'paramRegex'   => 'ParamRegex',
        'paramType'    => 'ParamType',
        'paramValue'   => 'ParamValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->paramDesc) {
            $res['ParamDesc'] = $this->paramDesc;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramRegex) {
            $res['ParamRegex'] = $this->paramRegex;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['ParamDesc'])) {
            $model->paramDesc = $map['ParamDesc'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamRegex'])) {
            $model->paramRegex = $map['ParamRegex'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
