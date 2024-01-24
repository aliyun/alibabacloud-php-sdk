<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the parameter that you want to configure for a database.
     *
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The valid values of the parameter.
     *
     * @example [true|false]
     *
     * @var string
     */
    public $paramRanges;

    /**
     * @description The type of the parameter that you want to configure. Valid values:
     *
     *   **ATOM**: the configuration item in the layer-3 data source.
     *   **CONFIG**: the configuration item in ConfigServer.
     *   **DIAMOND**: the configuration item in Diamond.
     *
     * @example ATOM
     *
     * @var string
     */
    public $paramType;

    /**
     * @description The value of parameter that you want to configure.
     *
     * @example true
     *
     * @var string
     */
    public $paramValue;

    /**
     * @description The name of the parameter that you want to configure.
     *
     * @example FORBID_EXECUTE_DML_ALL
     *
     * @var string
     */
    public $paramVariableName;
    protected $_name = [
        'dbName'            => 'DbName',
        'paramRanges'       => 'ParamRanges',
        'paramType'         => 'ParamType',
        'paramValue'        => 'ParamValue',
        'paramVariableName' => 'ParamVariableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->paramRanges) {
            $res['ParamRanges'] = $this->paramRanges;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }
        if (null !== $this->paramVariableName) {
            $res['ParamVariableName'] = $this->paramVariableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ParamRanges'])) {
            $model->paramRanges = $map['ParamRanges'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }
        if (isset($map['ParamVariableName'])) {
            $model->paramVariableName = $map['ParamVariableName'];
        }

        return $model;
    }
}
