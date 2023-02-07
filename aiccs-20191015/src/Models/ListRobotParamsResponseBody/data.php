<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotParamsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $isEmpty;

    /**
     * @example name
     *
     * @var string
     */
    public $paramCode;

    /**
     * @var string
     */
    public $paramName;
    protected $_name = [
        'isEmpty'   => 'IsEmpty',
        'paramCode' => 'ParamCode',
        'paramName' => 'ParamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEmpty) {
            $res['IsEmpty'] = $this->isEmpty;
        }
        if (null !== $this->paramCode) {
            $res['ParamCode'] = $this->paramCode;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
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
        if (isset($map['IsEmpty'])) {
            $model->isEmpty = $map['IsEmpty'];
        }
        if (isset($map['ParamCode'])) {
            $model->paramCode = $map['ParamCode'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        return $model;
    }
}
