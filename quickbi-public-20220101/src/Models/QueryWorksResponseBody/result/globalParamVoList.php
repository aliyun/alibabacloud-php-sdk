<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody\result;

use AlibabaCloud\Dara\Model;

class globalParamVoList extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $paramAlias;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'dataType' => 'DataType',
        'paramAlias' => 'ParamAlias',
        'paramName' => 'ParamName',
        'required' => 'Required',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->paramAlias) {
            $res['ParamAlias'] = $this->paramAlias;
        }

        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['ParamAlias'])) {
            $model->paramAlias = $map['ParamAlias'];
        }

        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
