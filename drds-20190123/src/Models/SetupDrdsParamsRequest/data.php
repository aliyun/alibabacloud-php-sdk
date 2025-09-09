<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dbName;

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
        'dbName' => 'DbName',
        'paramRanges' => 'ParamRanges',
        'paramType' => 'ParamType',
        'paramValue' => 'ParamValue',
        'paramVariableName' => 'ParamVariableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
