<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotParamsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $isEmpty;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
