<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamType'])) {
            if (!empty($map['ParamType'])) {
                $model->paramType = $map['ParamType'];
            }
        }

        return $model;
    }
}
