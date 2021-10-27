<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsParamsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $needRestart;

    /**
     * @var string
     */
    public $paramDefaultValue;

    /**
     * @var string
     */
    public $paramDesc;

    /**
     * @var string
     */
    public $paramEnglishName;

    /**
     * @var string
     */
    public $paramLevel;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramRanges;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $paramValue;

    /**
     * @var string
     */
    public $paramVariableName;
    protected $_name = [
        'dbName'            => 'DbName',
        'needRestart'       => 'NeedRestart',
        'paramDefaultValue' => 'ParamDefaultValue',
        'paramDesc'         => 'ParamDesc',
        'paramEnglishName'  => 'ParamEnglishName',
        'paramLevel'        => 'ParamLevel',
        'paramName'         => 'ParamName',
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
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->paramDefaultValue) {
            $res['ParamDefaultValue'] = $this->paramDefaultValue;
        }
        if (null !== $this->paramDesc) {
            $res['ParamDesc'] = $this->paramDesc;
        }
        if (null !== $this->paramEnglishName) {
            $res['ParamEnglishName'] = $this->paramEnglishName;
        }
        if (null !== $this->paramLevel) {
            $res['ParamLevel'] = $this->paramLevel;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['ParamDefaultValue'])) {
            $model->paramDefaultValue = $map['ParamDefaultValue'];
        }
        if (isset($map['ParamDesc'])) {
            $model->paramDesc = $map['ParamDesc'];
        }
        if (isset($map['ParamEnglishName'])) {
            $model->paramEnglishName = $map['ParamEnglishName'];
        }
        if (isset($map['ParamLevel'])) {
            $model->paramLevel = $map['ParamLevel'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
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
