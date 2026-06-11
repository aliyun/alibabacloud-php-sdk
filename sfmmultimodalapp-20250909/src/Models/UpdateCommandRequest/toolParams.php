<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandRequest;

use AlibabaCloud\Dara\Model;

class toolParams extends Model
{
    /**
     * @var string
     */
    public $paramDesc;

    /**
     * @var string
     */
    public $paramExample;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'paramDesc' => 'ParamDesc',
        'paramExample' => 'ParamExample',
        'paramName' => 'ParamName',
        'paramType' => 'ParamType',
        'required' => 'Required',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramDesc) {
            $res['ParamDesc'] = $this->paramDesc;
        }

        if (null !== $this->paramExample) {
            $res['ParamExample'] = $this->paramExample;
        }

        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
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
        if (isset($map['ParamDesc'])) {
            $model->paramDesc = $map['ParamDesc'];
        }

        if (isset($map['ParamExample'])) {
            $model->paramExample = $map['ParamExample'];
        }

        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
