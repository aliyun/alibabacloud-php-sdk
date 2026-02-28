<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceRequest;

use AlibabaCloud\Dara\Model;

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
        'listParamType' => 'ListParamType',
        'listParamValue' => 'ListParamValue',
        'paramName' => 'ParamName',
        'paramType' => 'ParamType',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
        if (\is_array($this->listParamValue)) {
            Model::validateArray($this->listParamValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listParamType) {
            $res['ListParamType'] = $this->listParamType;
        }

        if (null !== $this->listParamValue) {
            if (\is_array($this->listParamValue)) {
                $res['ListParamValue'] = [];
                $n1 = 0;
                foreach ($this->listParamValue as $item1) {
                    $res['ListParamValue'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListParamType'])) {
            $model->listParamType = $map['ListParamType'];
        }

        if (isset($map['ListParamValue'])) {
            if (!empty($map['ListParamValue'])) {
                $model->listParamValue = [];
                $n1 = 0;
                foreach ($map['ListParamValue'] as $item1) {
                    $model->listParamValue[$n1] = $item1;
                    ++$n1;
                }
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
