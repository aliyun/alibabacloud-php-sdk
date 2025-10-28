<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;

use AlibabaCloud\Dara\Model;

class paramTypes extends Model
{
    /**
     * @var string[]
     */
    public $paramType;
    protected $_name = [
        'paramType' => 'ParamType',
    ];

    public function validate()
    {
        if (\is_array($this->paramType)) {
            Model::validateArray($this->paramType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramType) {
            if (\is_array($this->paramType)) {
                $res['ParamType'] = [];
                $n1 = 0;
                foreach ($this->paramType as $item1) {
                    $res['ParamType'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ParamType'])) {
            if (!empty($map['ParamType'])) {
                $model->paramType = [];
                $n1 = 0;
                foreach ($map['ParamType'] as $item1) {
                    $model->paramType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
