<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceRequest;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $listParamType;

    /**
     * @var string[]
     */
    public $listParamValue;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'listParamType'  => 'ListParamType',
        'listParamValue' => 'ListParamValue',
        'paramName'      => 'ParamName',
        'paramType'      => 'ParamType',
        'paramValue'     => 'ParamValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listParamType) {
            $res['ListParamType'] = $this->listParamType;
        }
        if (null !== $this->listParamValue) {
            $res['ListParamValue'] = $this->listParamValue;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
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
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListParamType'])) {
            $model->listParamType = $map['ListParamType'];
        }
        if (isset($map['ListParamValue'])) {
            if (!empty($map['ListParamValue'])) {
                $model->listParamValue = $map['ListParamValue'];
            }
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
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
